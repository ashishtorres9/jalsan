<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jalsan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Ranga:400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">

  

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php 
		$header_logo=get_field('logo','options');
		$call_us=get_field('call_us','options');
		$email=get_field('email','options');
		$social_media=get_field('social_media','options');
        do_action( 'before_header' ); 

	?>
	<header id="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">                                    
                       <?php  the_custom_logo();?>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="top_left">
                                    <h5><i class="fa fa-phone"></i> <?php esc_html_e('Call us','jalsan');?></h5>
                                    <p> <?php echo $call_us;?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="top_left">
                                    <h5><i class="fa fa-map-marker"></i><?php esc_html_e('Email','jalsan');?></h5>
                                    <p><?php echo $email;?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="social_icons">
                                    <ul>
                                    	<?php foreach ($social_media as $social) {
                                        ?>
                                        <li><i class="fa <?php echo $social['icon'];?>"></i></li>  
                                    	<?php }?>                                      
                                    </ul>
                                    <ul>Language: <a href="http://www.jalsan.com.np/newdesign">English</a> | <a href="http://www.jalsan.com.np/newdesign/japanese" target="_blank">日本語</a></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                          <?php 
                          	wp_nav_menu(array(
                                'container'=>'',
                                'menu_class'=>'',
                                'items_wrap'=>'%3$s'
                            ));                          		
                          ?>                              
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

	<div id="content" class="site-content">
