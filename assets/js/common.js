$(document).ready(function(){
    var files;
    $(".phs").hide();
    $(".closed").hide();
    $(".comment").hide();
    
    $('#file_upload').change(function(e) {
        files = e.target.files;
        uploadFiles(e);
        
    });

    // Catch the form submit and upload the files
    function uploadFiles(event) {
        event.stopPropagation(); // Stop stuff happening
        event.preventDefault(); // Totally stop stuff happening

        // START A LOADING SPINNER HERE

        // Create a formdata object and add the files
        var data = new FormData();
        $.each(files, function(key, value) {
            data.append(key, value);
        });

        $.ajax({
            url: './upload/do_upload',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Don't process the files
            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
            success: function(data, textStatus, jqXHR) {
                if(typeof data.error === 'undefined') {
                    $('#mediaThumb .upload_more').before('<div class="uploaded_media uploaded"><span class="close_media">x</span>'+data.img+'</div>');
                    $('#status_form').append('<input type="hidden" class="attahment-hidden" id="attch-'+data.img_id+'" value="'+data.file_name+'">');
                    $(".phs").show();
                } else {
                    // Handle errors here
                    console.log('ERRORS: ' + data.error);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle errors here
                console.log('ERRORS: ' + textStatus);
                // STOP LOADING SPINNER
            }
        });
    }

    // status update
    $('.fb_status').on('click', function(){
        
        var fb_status = $('.status_update').val();
        var attach= $('.attahment-hidden').val();
        var sku= $('#skuid').val();
        if(fb_status){
            var data={
                'status_update': fb_status,
                'attachment': attach,
                'sku': sku
            };
            $.ajax({
                url:'posts/post_update',
                type : 'post',
                data: data,
                success:function(response){
                   $('.outer_post2').before(response);
                   $('.status_update').val(" ");
                   $('#mediaThumb').empty();
                }
            });
        }
    });

    // comment submit
    $('.comment_input').keypress(function(e){
        var key=e.which;
        var comment=$(this).val();
        var post_id=$(this).attr('data-post-id');
        if(key == 13 && comment){
            var data_comment={
                'comment': comment,
                'post_id': post_id
            };
            $.ajax({
                url:'posts/comment_submit',
                type:'post',
                data: data_comment,
                success: function(response){
                    $('.ajax_comment_seperate_'+post_id).append(response);
                    $('.comment_input').val(" ");
                    $('.reply_box').hide();
                }
            });
        }
    });
    $(".close_media").click(function(){
        $(this).parent().remove();
    });
});

function like(id){
    var like_data={
        'post_id':id
    };
    $.ajax({
        url:'posts/post_like',
        type:'post',
        data: like_data,
        success: function(likecount){
            console.log(likecount);
            $('#post_'+id).text((likecount)+' Likes');
        }
    });
}

function getComments(id){
    var comment_data={
        'post_id':id
    };
    $.ajax({
        url:'posts/comments_lists',
        type:'post',
        data: comment_data,
        success: function(response){
            $('#post_comments_'+id).append(response);
        }
    });
}

// Get likes and comments for the post
function getCommentsLikes(id){
    var comment_data={
        'post_id':id
    };
    $.ajax({
        url:'posts/comments_likes_show',
        type:'post',
        data: comment_data,
        success: function(response){
            $('#post_comments_'+id).append(response);
        }
    });
}

// Hide post
function hide_post(id){
    $('.open_'+id).hide();
    $('.close_'+id).show();
}

// Unhide post
function undo_hide(id){
    $('.open_'+id).show();
    $('.close_'+id).hide();
}

function open_comment(id){
    $(".comment_"+id).show();
}