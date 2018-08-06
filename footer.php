<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jalsan
 */

?>

	</div><!-- #content -->
	<?php 
		$footer_image = get_field('footer_logo','options');
		$footer_text = get_field('footer_text','options');
		$useful_links = get_field('useful_links','options');

		$name = get_field('name','options');
		$address = get_field('address','options');
		$phone = get_field('phone','options');
		$website = get_field('website','options');
		$email_1 = get_field('email_1','options');
		$email_2 = get_field('email_2','options');

		$copyright_text = get_field('copyright_text','options');


	?>
	<div class="footer">
            <div class="container">
                <div class="footer-grids">
                    <div class="col-md-3 footer-grid">
                        <img src="<?php echo $footer_image;?>" alt="abc"/>
                        <p><?php echo $footer_text;?></p>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h3><?php esc_html_e('Quick Links','jalsan');?></h3>
                        <ul>
                        	<?php wp_nav_menu(array('theme_location'=>'quick-links'));?>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h3><?php esc_html_e('Useful Links','jalsan');?></h3>
                        <ul>
                            <?php wp_nav_menu(array('theme_location'=>'useful-links'));?>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h3><?php esc_html_e('Contact Us','jalsan');?></h3>
                        <h4><?php echo $name;?></h4>
                        <div class="footer-grid-address">
                            <p><?php echo $address;?></br>
                          <?php echo $phone;?></br>
                            <?php echo $website;?></br>
                            <?php esc_html_e('Email:','jalsan');?>                            
                             <a class="email-link" href="mailto:<?php echo $email_1;?>"><?php echo $email_1;?></a>,
                             <a class="email-link" href="mailto:<?php echo $email_2;?>"><?php echo $email_2;?></a>
                         
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="clear"> </div>
        <div class="copy-right">
            <p><?php echo $copyright_text;?></p>
        </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
