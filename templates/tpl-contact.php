<?php 
/**
* Template Name: Contact Template
**/
	get_header();
	$page_title = get_field('page_title');
	$section_title = get_field('section_title');
	$address = get_field('address');
	$phone = get_field('phone');
	$website = get_field('website');
	$email = get_field('email');
	$map_section_title = get_field('map_section_title');
	$map_frame = get_field('map_frame');
?>

<section class="fl_contact_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact_title">
                    <h3><?php echo $page_title;?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 c_right">
                <div class="c_title">
                    <h4><?php echo $section_title;?></h4>
                </div>
                <div class="contact_list">
                    <ul>
                        <li><i class="fa fa-map-marker"></i> <?php echo $address;?></li>
                        <li><i class="fa fa-phone"></i><?php echo $phone;?></li>
                        <li><i class="fa fa-globe"></i> <?php echo $website;?></li>
                        <li><i class="fa fa-envelope"></i> <?php echo $email;?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 m_left">
                <div class="m_title">
                    <h4><?php echo $map_section_title;?></h4>
                </div>
                <div class="map">
                    <iframe src=<?php echo $map_frame;?> width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<?php get_footer();