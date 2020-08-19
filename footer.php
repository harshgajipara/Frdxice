 <!-- Start footer main -->
    <section class="footer-main">
    	<div class="footer-top">
        	<div class="container clear-none">
            	<div class="column footer-logo">
                    <figure>
                        <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/footer-logo.png" alt="" title="" /></a>
                    </figure>
                    <address>
                        <p><i class="fa fa-map-marker"></i><?php the_field('address','option'); ?></p>
                        <p><a href="tel:<?php the_field('fax','option'); ?>"><i class="fa fa-phone"></i>Tel: <?php the_field('tel','option'); ?></a></p>
                        <p><i class="fa fa-fax"></i> Fax: <?php the_field('fax','option'); ?></p>
                        <p><a href="mailto:<?php the_field('email','option'); ?>"><i class="fa fa-envelope"></i> Email: <?php the_field('email','option'); ?></a></p>
                    </address>
                </div>
                <div class="column links">
                	<h2 class="title">Links</h2>
                     <?php echo wp_nav_menu( array(
                            'menu' => 'Footer menu',
                            'container' => false,
                            'menu_id' => '',
                        ) );
                    ?>
                    <!-- <ul>
                    	<li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul> -->
                </div>
                <div class="column services">
                	<h2 class="title">Services</h2>
                    <ul>
                    	<li><a href="#">Water Mitigation</a></li>
                        <li><a href="#">Fire Damage Restoration</a></li>
                        <li><a href="#">Smoke & Odor Removal</a></li>
                        <li><a href="#">Mold Remediation</a></li>
                        <li><a href="#">Report a Claim</a></li>
                    </ul>
                </div>
                <div class="column Opportunities">
                	<h2 class="title">Employment Opportunities</h2>
                    <?php $emp_details = get_field('employment_opportunities','option'); ?>
                    <p><?php echo $emp_details['description']; ?></p>
                    <div class="btn-wrap">
                    	<a href="<?php echo $emp_details['link']; ?>"><?php echo $emp_details['link_text']; ?></a>
                    </div>
                </div>
                <div class="column Information">
                	<h2 class="title">Information</h2>
                    <p><?php the_field('info','option'); ?></p>
                    <div class="footer-social">
                    	<h2 class="title">Connect Us</h2>
                        <?php $social = get_field('social_links','option'); ?>
                        <ul>
                        	<li>
                            	<a href="<?php echo $social['facebook']; ?>"><img src="<?php echo get_theme_file_uri(); ?>/images/fb-logo.png" alt="" title="" /></a>
                            </li>
                            <li>
                            	<a href="<?php echo $social['twitter']; ?>"><img src="<?php echo get_theme_file_uri(); ?>/images/twi-logo.png" alt="" title="" /></a>
                            </li>
                            <li>
                            	<a href="<?php echo $social['linkedin']; ?>"><img src="<?php echo get_theme_file_uri(); ?>/images/lin-logo.png" alt="" title="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
        	<div class="container">
        		<p><?php the_field('footer_text','option'); ?></p>
            </div>
        </div>
    </section>
    <!-- End footer main -->
    
	<?php wp_footer(); ?>
    <script>
		$('.mobile-menu-icon .fa').on('click', function (e) {
		  e.preventDefault();
		  $('body').toggleClass('mobile-menu-open');	  
		});
	</script>
    <!-- Start mavigation script -->
</body>
</html>