<?php
foreach($fb_posts as $fb_post){
    $to_time = strtotime($fb_post->post_date);
    $from_time = strtotime($fb_post->update_date);
    $time=round(abs($to_time - $from_time) / 60,2);
?>
<div class="open_<?php echo $fb_post->id; ?>">
<div class="post2 borderLeftRightTop3px">
        <div class="post2_row1">
            <img src="<?php echo base_url() ?>assets/uploads/profile_photo/ibm_logo.png" class="pr_photo">
            <div class="post2_text">
                <h3><a href="#"><?php echo $fb_post->username; ?></a></h3>
                <h5><span><?php echo $time; ?> mints</span><a href="#"><img src="<?php echo base_url();?>assets/images/globe.png"></a></h5>
            </div>
            <div class="post2_drop">
                <div class="dropdown keep-open">
                    <!-- Dropdown Button -->
                    <button id="dLabel" role="button" href="#" data-toggle="dropdown" data-target="#" class="btn btn-primary">
                    <a href="#"><img src="<?php echo base_url();?>assets/images/postarrow.png"></a>
                    </button>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li><span onclick="hide_post('<?php echo $fb_post->id; ?>')">Hide post</span></li>
                        <li class="divider"></li>
                        <li><span onclick="delete_post('<?php echo $fb_post->id; ?>')">Delete</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post2_row2"><?php echo $fb_post->post_content; ?></div>
        <div class="post2_row3 popup-gallery">
            <a href="images/postimage.png"><img src="<?php echo base_url().$fb_post->file_path.'/'.$fb_post->file_name;?>"></a>
        </div>
        <div class="post2_row4 reach">
        <span>2348 people reached</span>
        </div>
        <div class="post2_row4">
            <script type="text/javascript">
                getCommentsLikes(<?php echo $fb_post->id; ?>);
            </script>
            <span onclick="like('<?php echo $fb_post->id; ?>')" id="post_<?php echo $fb_post->id; ?>">Like</span>
            <span>.</span>
            <span onclick="open_comment(<?php echo $fb_post->id; ?>)">Comment</span>
            <span>.</span>
        </div>
</div>

<div id="post_comments_<?php echo $fb_post->id; ?>">
    <?php if($fb_post->post_likes_count!= 0){?>
    <?php if($fb_post->post_likes_count== 1){?>
    <div class="post2_row5">
        <?php echo $fb_post->post_likes_count.' person like this'; ?>
    </div>
    <?php }else{ ?>
    <div class="post2_row5">
        <?php echo $fb_post->post_likes_count.' people liked this'; ?>
    </div>
    <?php }} ?>
</div>
<script type="text/javascript">
    getComments(<?php echo $fb_post->id; ?>);
</script>

<div class="ajax_comment_seperate_<?php echo $fb_post->id; ?>"></div>
    <div class="post2_row5 borderLeftRightBottom3px comment_<?php echo $fb_post->id; ?> comment">
        <div class="post2_row5img comment_field"><img src="<?php echo base_url();?>assets/uploads/profile_photo/ibm_logo.png"></div>
        <div class="commentbox">
            <textarea class="comment_input" data-post-id="<?php echo $fb_post->id; ?>"></textarea>
        </div>
        <div class="comment_icons">
            <a href="#"><img src="<?php echo base_url();?>assets/images/camera.png"></a>
            <a href="#"><img src="<?php echo base_url();?>assets/images/smile.png"></a>
        </div>
    </div>
</div>
<div class="close_<?php echo $fb_post->id; ?> closed">
    <div class="post2 borderLeftRightTop3px">
        You won't see this post in News Feed. <span class="undo undo_hide_<?php echo $fb_post->id; ?>" onclick="undo_hide(<?php echo $fb_post->id; ?>)">Undo</span>
    </div>
    <style>
        
    </style>
    <div class="post2_row5 borderLeftRightBottom3px">
        <div><span>See less from this person</span></div>
        <div><span>Report post</span></div>
    </div>
</div>
<?php  } ?>