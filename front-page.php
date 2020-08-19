<?php get_header(); ?>

 <!-- Start banner-main -->
 <?php $banner = get_field('banner_section'); ?>
    <section class="home-banner" style="background-image:url(<?php echo $banner['banner_image']; ?>)">
    	<div class="container clear-none">
        	<div class="contant-box">
            	<h1 class="title"><?php echo $banner['banner_text']; ?></h1>
            </div>
            <div class="form-box">
                <?php echo do_shortcode('[contact-form-7 id="31" title="My form"]'); ?>
            </div>
        </div>
    </section>
    <!-- End banner-main -->  
    
    <!-- Start home-order-out -->
    <section class="home-order-out">
    	<div class="container">
        	<div class="heading-wrap">
                <?php $order = get_field('order_out_section'); ?>
            	<h2 class="title"><?php echo $order['title']; ?></h2>
                <p><?php echo $order['description']; ?></p>
            </div>
            <div class="custom-row">

                <?php if( have_rows('featured_services') ): ?>
                    
                    <?php while( have_rows('featured_services') ): the_row(); 
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $about_service = get_sub_field('about_service');
                        $link = get_sub_field('link');
                        ?>
                        <div class="column">
                            <figure><img src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" title="" /></figure>
                            <div class="contant-box">
                                <h2 class="title"><?php echo $title; ?></h2>
                                <p><?php echo $about_service;  ?></p>
                                <div class="btn-wrap">
                                    <a href="<?php echo $link; ?>">view our services</a>
                                </div>
                            </div>
                        </div>
                       
                    <?php endwhile; ?>
                    
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- End home-order-out --> 
    
    <!-- Start Home services main -->
    <section class="home-services-main" style="background-image:url('http://devtest.icecubedev.com/wp-content/uploads/2020/08/home-services-main-bg.png');">
    	<div class="container">
        	<div class="heading-wrap">
                <?php $service = get_field('services_section'); ?>
            	<h3 class="title"><?php echo $service['service_title']; ?></h3>
            </div>
            <div class="custom-row">
            	<div class="col-left">
                	<figure>
                    	<img src="<?php echo $service['image']; ?>" alt="" title="" />
                    </figure>
                </div>
                <div class="col-right">
                	<p><?php echo $service['service_description']; ?></p>
                    <ul>

                        <?php

                    if( have_rows('services_section') ): while ( have_rows('services_section') ) : the_row(); 
                        if( have_rows('list_of_service') ): ?>
                            
                            <?php while( have_rows('list_of_service') ): the_row(); 
                                $name_of_service = get_sub_field('name_of_service');
                                ?>

                                <li><?php echo $name_of_service; ?></li>

                            <?php endwhile; endif; ?>                            
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home services main -->  
    
    <!-- Start home restoration services -->
    <section class="home-restoration-services">
    	<div class="home-restoration-services-top">
            <div class="container clear-none">
                <div class="column">
                    <?php $home_res = get_field('home_restoration'); ?>
                    <h3 class="title"><?php echo $home_res['title']; ?></h3>
                    <p><?php echo $home_res['about']; ?></p>
                </div>
            </div>
        </div>
        <div class="home-restoration-services-bottom">
        	<div class="container">
            	<div class="custom-row">

                    <?php if( have_rows('restoration_services') ): ?>
                        
                        <?php while( have_rows('restoration_services') ): the_row(); 
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');
                            ?>

                            <div class="column">
                                <h2 class="title"><?php echo $title; ?></h2>
                                <p><?php echo $description; ?></p>
                            </div>
                            
                        <?php endwhile; ?>
                        
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <!-- End home restoration services -->
    
    <!-- Start home-why-choose -->
    <section class="home-why-choose">
    	<div class="home-why-choose-top">
            <div class="container">
				<div class="heading-wrap">
                    <?php $why_choose = get_field('why_choose_us'); ?>
                	<h2 class="title"><?php echo $why_choose['title']; ?></h2>
                    <p><?php echo $why_choose['description']; ?></p>
                </div>
                <div class="custom-row">
                	<div class="column">
                    	<h2 class="title">Emergency Service</h2>
                        <div class="box">
                            <ul>
                            <?php
                            if( have_rows('why_choose_us') ): while ( have_rows('why_choose_us') ) : the_row();
                                 if( have_rows('emergency_services') ): ?>
                                    
                                    <?php while( have_rows('emergency_services') ): the_row(); 
                                        $service_name = get_sub_field('service_name');
                                        ?>

                                        <li>
                                            <img src="<?php echo get_theme_file_uri(); ?>/images/check-icon.svg" alt="" title="" /> <?php echo $service_name; ?>
                                        </li>
                                        
                                    <?php endwhile; endif; ?>
                                    
                                <?php endwhile; endif; ?>

                            </ul>
                        </div>
                    </div>
                    <div class="column">
                    	<h2 class="title"><?php echo $why_choose['service_restoration_title']; ?></h2>
                        <div class="box">
                        	<p><?php echo $why_choose['about_service_restoration']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-why-choose-bottom">
            <div class="container">
                <?php $que = get_field('have_question_section'); ?>
            	<h2 class="title"><?php echo $que['title']; ?></h2>
                <p><?php echo $que['tagline']; ?></p>
                <div class="btn-wrap">
                    <a href="<?php echo $que['button_link']; ?>"><?php echo $que['button_text']; ?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-why-choose -->
    
    <!-- Start home-map-->
    <section class="home-map">
    	<?php the_field('map_iframe'); ?>
    </section>
    <!-- End home-map-->

    <?php get_footer(); ?>