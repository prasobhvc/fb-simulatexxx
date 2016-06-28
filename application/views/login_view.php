<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Social Simulator</title>
        <link href="<?php echo base_url() ?>/assets/css/homestyle.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo base_url() ?>/assets/js/index.js"></script>
    </head>

    <body>
        <div class="header">
            <?php echo md5('password123');?>
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><a href="">Social Simulator</a></h1>
                    </div>
                    <div class="links span8">
                        <a class="home" href="" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                        <div class="blog" href="" rel="tooltip" data-placement="bottom" data-original-title="Blog">
                            <ul>
                                <li><img src="<?php echo base_url() ?>/assets/social_icons/facebook.png"/></li>
                                <li><img src="<?php echo base_url() ?>/assets/social_icons/twitter.png"/></li>
                                <li><img src="<?php echo base_url() ?>/assets/social_icons/g+.png"/></li>
                                <li><img src="<?php echo base_url() ?>/assets/social_icons/tumblr.png"/></li>
                                <li><img src="<?php echo base_url() ?>/assets/social_icons/pinterest.png"/></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                    <h1>Welcome</h1>

<!--                    <form class="form">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" id="login-button">Login</button>
                    </form>-->
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('verifylogin'); ?>
                        <input type="text" size="20" id="username" name="username"  placeholder="Username"/>
                        <input type="password" size="20" id="passowrd" name="password"  placeholder="Password"/>
                        <button type="submit" id="login-button">Login</button>
                    </form>
                    <div class="copy">
                        <p>&copy; Copyright 2015 SocialSimulator, All Rights Reserved.</p>
                    </div>
                    
            </div>
            <ul class="bg-bubbles">
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/facebook.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/twitter.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/g+.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/tumblr.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/pinterest.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/facebook.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/twitter.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/g+.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/tumblr.png"/></li>
                    <li><img src="<?php echo base_url() ?>/assets/social_icons/pinterest.png"/></li>
            </ul>
            
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </body>
</html>
