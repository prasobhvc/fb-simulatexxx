<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>facebook</title>
    <link href="<?php echo base_url() ?>/assets/css/style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/css/style_1.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/prettyPhoto.css" />
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/common.js"></script>
</head>
<body>
    <div class="bs-example">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#sectionA"><img src="<?php echo base_url() ?>/assets/images/fb_tab.png"/>Facebook</a></li>
                <li><a href="#sectionB"><img src="<?php echo base_url() ?>/assets/images/fb_tab.png"/>Twitter</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="sectionA" class="tab-pane fade in active">
                <div class="outer_header">
                    <div class="container">
                        <div id="header">
                            <div class="fb_logo"><img src="<?php echo base_url() ?>/assets/images/fb_logo.png"/></div>
                            <div class="search_box">
                                <form action="#">
                                <input type="text" name="text" placeholder="Search Facebook" />
                                <input type="submit" name="" value="" />
                                </form>
                            </div>
                            <div class="header_right">
                                <div class="outer_profile">
                                    <div class="profile_img"><img src="<?php echo base_url() ?>assets/uploads/profile_photo/ibm_logo.png"/></div>
                                    <div class="profile_name"><span><?php echo $username; ?></span></div>
                                </div>
                                
                                <div class="chat">
                                    <ul>
                                        <li><a href="#"><img src="<?php echo base_url() ?>/assets/images/request.png"/></a></li>
                                        <li><a href="#"><img src="<?php echo base_url() ?>/assets/images/msg.png"/></a></li>
                                        <li><a href="#"><img src="<?php echo base_url() ?>/assets/images/notification.png"/></a></li>
                                        <li><a href="#"><img src="<?php echo base_url() ?>/assets/images/lock.png"/></a></li>
                                        <li class="down_arrow">
                                        <div class="dropdown keep-open">
                                            <!-- Dropdown Button -->
                                            <button id="dLabel" role="button" href="#" data-toggle="dropdown" data-target="#" class="btn btn-primary">
                                            <a href="#"><img src="<?php echo base_url() ?>/assets/images/down_arrow.png"/></a>
                                            </button>
                                            <!-- Dropdown Menu -->
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                <li><div class="profile_name"><a href="facebook/logout">Logout</a></div></li>
                                            </ul>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outercontent">
                    <div class="container">
                        <div id="PageHeader" class="border3px" style="background-image:url('<?php echo base_url() ?>assets/uploads/timeline/IBM.jpg'); ">
                            
                        </div>
                        <div id="fbTimelineHeadline">
                            <div id="fbCompanytop">
                                <div id="fbCompany">
                                    <span class="fbCompanyName">IBM</span>
                                    <span class="fbCompanyType">Business solutions and Business consulting services</span>
                                    <span class="fbCompanyWork">Product and Services</span>
                                </div>
                                <div id="fbCompanyCredits">
                                    
                                </div>
                            </div>
                            <div id="fbCompanybottom">
                                <a href="" id="fbProfilePhoto" class="border3px"><img class="border3px" src="<?php echo base_url() ?>assets/uploads/profile_photo/ibm_logo.png" /></a>
                                <ul class="fbtimeline_nav">
                                    <li><a>Timeline</a></li>
                                    <li><a>About</a></li>
                                    <li><a>Photos</a></li>
                                    <li><a>Likes</a></li>
                                    <li><a>More</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="content">
                            <div class="leftbox">
                                <div class="leftsidebar border3px">
                                    
                                    <ul class="uiList">
                                        <div class="clearfix">
                                            <div class="profile_image">
                                                <div class="_2fb5 _2fb4">
                                                <img class="img" src="<?php echo base_url() ?>assets/uploads/profile_photo/ibm_logo.png" alt="">
                                                </div>
                                            </div>
                                            <div class="total_likes">
                                                <div>
                                                    <a class="uiLinkSubtle" href="#">
                                                        <div class="like_count">427 likes <span style="color: #43a735;">+5</span> <span style="color: #43a735;">this week</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>

                            </div>
                            <div class="contentbox">
                                <!-- status update-->
                                <div class="post1 border3px">
                                    
                                        <div class="post_row1">
                                            <ul class="nav nav-tabs" id="myTab1">
                                                <li id="firstli"><a href="#"><img src="<?php echo base_url() ?>/assets/images/edit_img.png"/><span>Update Status</span></a></li>
                                                <li><img src="<?php echo base_url() ?>/assets/images/addphoto.png"/>
                                                    <div id="addphs" class="btn">
                                                        <form method="post" action="" id="upload_file">
                                                            <div class="fileUpload">
                                                                <span>Add Photos/Videos</span>
                                                                <input type="file" name="userfile" id='file_upload' onchange="//javascript:this.form.submit();"/>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div id="files"></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="statusimg">
                                            <img src="<?php echo base_url() ?>assets/uploads/profile_photo/ibm_logo.png"/>
                                            <form action="posts/statusUpdate" method="post" id="status_form">
                                            <input type="hidden" name="sku" value="<?php echo rand(1, 1000000); ?>" id="skuid"/>
                                            <textarea type="text" class="status_update" name="status-update" placeholder="What have you been up to?"></textarea>
                                            

                                            </form>
                                            <div class="phs">
                                                <div id="mediaThumb">
                                                    <div class="upload_more uploaded"></div>
                                                </div>
<!--                                                <div class="video_media uploaded">
                                                    <span class='close_media'>x</span>
                                                </div>-->
                                                
                                            </div>
                                        </div>
                                        <div class="update_bottom">
                                            <ul>
                                                <li><a href="#"><img src="<?php echo base_url() ?>/assets/images/camera.png"/></a></li>
                                                <li><a href="#"><img src="<?php echo base_url() ?>/assets/images/addperson.png"/></a></li>
                                                <li><a href="#"><img src="<?php echo base_url() ?>/assets/images/smile.png"/></a></li>
                                                <li><a href="#"><img src="<?php echo base_url() ?>/assets/images/location.png"/></a></li>
                                            </ul>
                                        </div>
                                        <div class="update_right">
                                            <div class="selectfriends">
                                            <div class="dropdown keep-open">
                                                <!-- Dropdown Button -->
                                                <button id="dLabel" role="button" href="#" data-toggle="dropdown" data-target="#" class="btn btn-primary addfriend">
                                                <span>Friends</span><img class="arrowdown" src="<?php echo base_url() ?>/assets/images/arrowdown.png"/>
                                                </button>
                                                <!-- Dropdown Menu -->
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                    <li><a href="#">Public</a></li>
                                                    <li><a href="#">Private</a></li>
                                                    <li><a href="#">Hide</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                            <div class="postbutton"><input type="button" name="" value="post" class="fb_status"/></div>
                                        </div>
                                    
                                </div>
                                <!-- status update-->
                                <!-- post lists-->
                                <div class="outer_post2">
                                    <?php echo $fb_posts_list_html; ?>
                                </div>
                                <!-- post lists-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sectionB" class="tab-pane fade">
            </div>
        </div>
    </div>
</body>
</html>
