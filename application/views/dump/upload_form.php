<html>
<head>
<title>Upload Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <div class="btn btn-primary">
        <?php echo form_open_multipart('upload/do_upload', array('id' => 'upload_form'));?>
            <div class="fileUpload btn">
                <span>Add Photos/Videos</span>
                <input type="file" name="userfile" id='file_upload' onchange="javascript:this.form.submit();"/>
            </div>

        </form>
    </div>

<style>
#upload_form{
    margin:0;
}
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload #file_upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
      height: 14px;
}
.btn {
  display: inline-block;
    margin: 2px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
</style>
<script>
$(document).ready(function(){
	$('#upload_file').submit(function(e) {
		e.preventDefault();
		$.ajaxFileUpload({
			url             :'./upload/do_upload/', 
			secureuri       :false,
			fileElementId	:'userfile',
			dataType        : 'json',
			data            : {
                            'title'     : $('#title').val()
			},
			success	: function (data, status) {
				if(data.status != 'error') {
					$('#files').html('<p>Reloading files...</p>');
				}
				alert(data.msg);
			}
		});
		return false;
	});

});
</script>
</body>
</html>