<div class="post1">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('verifylogin'); ?>
		  	<div class="post_row1">
				<ul class="nav nav-tabs" id="myTab1">
        			<li id="firstli"><a href="#"><img src="<?php echo base_url() ?>/assets/images/edit_img.png"/>Update Status</a></li>
        			<li><a href="#"><img src="<?php echo base_url() ?>/assets/images/addphoto.png"/>Add Photos/Video</a></li>
					<li><a  id="li_album" href="#"><img src="<?php echo base_url() ?>/assets/images/albumimg.png"/>Create Photo Album</a></li>
   				</ul>
				   </div>
					<div class="statusimg">
							<img src="<?php echo base_url() ?>/assets/images/statusimg.png"/>

							<textarea type="text" name="text" placeholder="What's on your mind?"></textarea>

						</div>
					<div class="update_bottom">
					<ul>
						<li>
						<a href="#"><img src="<?php echo base_url() ?>/assets/images/camera.png"/></a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url() ?>/assets/images/addperson.png"/></a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url() ?>/assets/images/smile.png"/></a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url() ?>/assets/images/location.png"/></a>
						</li>
					</ul>

					</div>

					<div class="update_right">
						<div class="selectfriends">
						<div class="dropdown keep-open">
							<!-- Dropdown Button -->
							<button id="dLabel" role="button" href="#"
							   data-toggle="dropdown" data-target="#"
							   class="btn btn-primary addfriend">
								<span>Friends</span><img class="arrowdown" src="<?php echo base_url() ?>/assets/images/arrowdown.png"/>
							</button>

							<!-- Dropdown Menu -->
							<ul class="dropdown-menu" role="menu"
								aria-labelledby="dLabel">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
						</div>
						<div class="postbutton"><input type="submit" name="" value="post" /></div>

					</div>


                  </form>
		  </div>