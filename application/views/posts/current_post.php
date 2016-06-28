<div class="outer_post2">
    <div class="post2">
        <div class="post2_row1">
            <img src="<?php echo base_url() ?>assets/uploads/profile_photo/ibm_logo.png" class="pr_photo">
            <div class="post2_text">
                <h3><a href="#">Prasobh</a></h3>
                <h5><span>19 mints</span><a href="#"><img src="<?php echo base_url();?>assets/images/globe.png"></a></h5>
            </div>
            <div class="post2_drop">
                <div class="dropdown keep-open">
                    <!-- Dropdown Button -->
                    <button id="dLabel" role="button" href="#" data-toggle="dropdown" data-target="#" class="btn btn-primary">
                        <a href="#"><img src="<?php echo base_url() ?>/assets/images/postarrow.png"/></a>
                    </button>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post2_row3">
            <p><?php echo $cur_status;?></p>
            <p><img src="<?php echo base_url().'uploads/'.$filename; ?>"  alt="<?php echo $filename; ?>" /></p>
        </div>
        <div class="post2_row4">
            <a href="#">Like</a>
            <span>.</span>
            <a href="#">Comment</a>
            <span>.</span>
            <a href="#">Share</a>
        </div>
    </div>
    <div class="post2_row5">
        <div class="post2_row5img"><img src="<?php echo base_url() ?>/assets/images/postimage.png"/></div>
	<div class="commentbox"><textarea class="comment_input" data-post-id="32"></textarea></div>
        <div class="comment_icons">
            <a href="#"><img src="<?php echo base_url() ?>/assets/images/camera.png"/></a>
            <a href="#"><img src="<?php echo base_url() ?>/assets/images/smile.png"/></a>
        </div>
    </div>
</div>
