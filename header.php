<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
   <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<!-- Start header -->
    <header class="header-main">
    	<div class="container clear-none">
        	<div class="header-logo">
                <?php if(has_custom_logo()){
                            the_custom_logo();
                        }else{
                            echo `<figure>
                                    <a href="#"><img src="<?php the_field('header_logo'); ?>" alt="" title="" /></a>
                                  </figure>`;
                        } ?>
            	
            </div>
            <div class="header-right">
            	<div class="header-top">
                	<p><?php the_field('header_top_text','option'); ?></p>
                </div>
                <div class="header-info">
                	<div class="column Emergency">
                    	<figure>
                        	<img src="<?php echo get_theme_file_uri(); ?>/images/logo-24.svg" alt="" title="" />
                        </figure>
                        <div class="box">
                        	<h3 class="title">Emergency Services</h3>
                            <p class="sub-title"><?php the_field('emergency_services','option'); ?></p>
                        </div>
                    </div>
                    <div class="column Call">
                    	<figure>
                        	<img src="<?php echo get_theme_file_uri(); ?>/images/logo-call.svg" alt="" title="" />
                        </figure>
                        <div class="box">
                        	<h3 class="title">Call us on <?php the_field('contact','option'); ?></h3>
                            <p class="sub-title"><?php the_field('contact_text','option'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->

     <!-- Start navigation -->
    <nav class="navigation">
        <div class="container">
            <div class="my-menu">

                 <?php echo wp_nav_menu( array(
                            'menu' => 'Header menu',
                            'container' => false,
                            'menu_class' => 'header-menu',
                            'menu_id' => '',
                        ) ); 
                    ?>
               <!--  <ul>
                    <li class="current-menu-item">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">what’s next</a>
                    </li>
                    <li>
                        <a href="#">Client center</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>
    <!-- End navigation --> 