<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Coding Bird</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">

    <link href="<?php echo base_url(); ?>css/icon-moon.css" rel="stylesheet" media="screen">
    <!--Animations-->
    <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" media="screen">

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/custom2.css">

    <link class="color-scheme" href="<?php echo base_url(); ?>css/colors/color-default.css" rel="stylesheet" media="screen">
    
    <!--Modernizr-->
    <script src="<?php echo base_url(); ?>js/libs/modernizr.custom.js"></script>

</head>
<body class="space-top">

    

 <div id="preloader"><div id="spinner"></div></div>

<header>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      <div class="sub-nav" style="width: 100%; height: 40px; border-bottom: 1px solid #fff;">
          <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="nav-email">
                    <i class="fa fa-envelope-o"></i><a href="#" style="margin-left: 5px; margin-top: 2px;">info@codingbird.com</a>
                  </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                <?php 
                //echo @$user_id;
                if(!empty($user_id)){ ?>
                  <a href="<?php echo base_url()."my_account" ?>">My Account</a>  
               <?php }
                $security_msg = $this->session->userdata('my_account');

                //if($security_msg!==null){ echo $my_account;} ?>

              </div>
              <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                  <!-- <span>Welcome to</span>
                  <a href="">Tasfir Hossain</a> -->
                  <ul class="nav navbar-nav navbar-right login-button hidden-xs-12">
                    <?php
                        $logout=$this->session->userdata('user_id');
                     if($logout!==null){ ?>
                            <li><a href="<?php echo base_url()."user_login/logout"; ?>" class="btn btn-primary btn-sm">Log out</a></li>
                       <?php } else{?>
                            <li><a href="<?php echo base_url()."user_sign_up"; ?>" class="btn btn-primary btn-sm">Sign Up</a></li>
                            <li><a href="<?php echo base_url()."user_login"; ?>" class="btn btn-primary btn-sm">Login</a></li>
                            <?php } ?>
                    </ul>
              </div>
          </div>
      </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <div class="logo-section">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/CODING BIRD PSD 098cc9.png" alt="logo"></a>
            </div>
        </div>

        <div class="visible-xs-12">
            <!-- <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url()."user_sign_up"; ?>" class="btn btn-primary">Sign Up</a></li>
                <li><a href="<?php echo base_url()."user_login"; ?>" class="btn btn-primary">Login</a></li>
            </ul> -->
            <ul class="nav navbar-nav">
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shopping Cart<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    
                  </ul>
                </li>
            </ul>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav main-menu">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>#">Service</a></li>
            <li><a href="<?php echo base_url(); ?>#">Portfolio</a></li>
            <li><a href="<?php echo base_url(); ?>">About Us</a></li>
            <li><a href="<?php echo base_url(); ?>">Contact Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Order Now <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>products/facebook_cover">Facebook Cover</a></li>
                <li><a href="<?php echo base_url(); ?>products/twitter_cover">Twitter Cover</a></li>
                <li><a href="<?php echo base_url(); ?>products/logo_design">Logo Design</a></li>
                <li><a href="<?php echo base_url(); ?>products/web_design">Web design</a></li>
                <li><a href="<?php echo base_url(); ?>products/banner_design">Banner Design</a></li>
                <li><a href="<?php echo base_url(); ?>products/online_vote">Online Vote</a></li>
                <li><a href="<?php echo base_url(); ?>products/others">Others</a></li>
              </ul>
            </li>
          </ul>
          

            <!-- <ul class="nav navbar-nav navbar-right login-button hidden-xs-12">
                    <li><a href="<?php echo base_url()."user_sign_up"; ?>" class="btn btn-primary">Sign Up</a></li>
                    <li><a href="<?php echo base_url()."user_login"; ?>" class="btn btn-primary">Login</a></li>
            </ul> -->

            <ul class="nav navbar-nav navbar-right  hidden-xs-12">
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shopping Cart <span style="margin-left: 5px; background: #000; color: #fff; padding: 5px 7px; border-radius: 10px;">10</span></a>
                  <ul class="dropdown-menu">

                  </ul>
                </li>
            </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    </header>

    <div style="height: 95px; margin-bottom: 40px;"></div>
    <div class="container alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      <strong>Warning!</strong> Better check yourself, you're not looking too good.
    </div>
    