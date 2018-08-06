<?php 
/**
*Template Name: Home Template
**/
get_header();
?>

<!--slider portion starts-->
<?php 

	$slider=get_field('slider');
?>
<section class="ob_slider">
    <div id="custom-bootstrap-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner" role="listbox">
        	<?php 
        		$sn=1;
        		
        		foreach($slider as $slider){
        			$class="";
        			if($sn==1){
        				$class="active";
        			}
        			$slider_image=$slider['slider_image'];        		
        	?>
            <div class="item <?php echo $class;?>">
                <img src="<?php echo $slider_image;?>" alt=""/>
               <!--  <div class="carousel-caption">The is a new first slide</div> -->
            </div>  
            <?php $sn++; } ?>          
        </div><a class="left carousel-control" href="#custom-bootstrap-carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control">
        </a><a class="right carousel-control" href="#custom-bootstrap-carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="right carousel-control">
        </a>
    </div>
</section>
<!--slider portion ends-->

<!--about portion starts-->
<?php 
	$about_section_data=get_field('about_section_data');
?>
<div class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab">
                <?php foreach($about_section_data as $datas){ ?>
                    <button class="tablinks" onClick="openCity(event, '<?php echo $datas['left_menu_name'];?>')" id="defaultOpen"><?php echo $datas['left_menu_name'];?></button>
                <?php } ?>                           
                </div>
                <?php foreach($about_section_data as $data){ ?>
                <div id="<?php echo $data['left_menu_name'];?>" class="tabcontent">
                    <h3><?php echo $data['left_menu_name'];?></h3>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ob_tabcontent_left">
                                <img src="<?php echo $data['image'];?> " alt=""/>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="ob_tabcontent_right">
                                <p><?php echo $data['content'];?></p>
                                <a href="/jalsan/about"><?php esc_html_e('Read More','jalsan');?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!--about portion ends-->

<!--banner section start-->
<?php 
	$main_text = get_field('main_text');
	$normal_text = get_field('normal_text');
	$button_text = get_field('button_text');
	$button_link = get_field('button_link');
?>
<div class="or_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row or_banner_wrap">
                    <div class="col-md-8">
                        <div class="or_banner_left">
                            <h4><?php echo $main_text;?></h4>
                            <h3><?php echo $normal_text;?></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="or_banner_right">
                            <h3><a href="<?php echo $button_link;?>"><?php echo $button_text;?></a></h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--banner section end-->

<!--completed events section start-->
<?php 
	$title = get_field('title');
	$subtitle = get_field('sub-title');
	$events = get_field('events');
?>
<div class="ob_feature_study">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ob_feature_study_heading">
                    <h4><?php echo $title;?></h4>
                    <h5><?php echo $subtitle;?></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="ob_feature_study_slider">
                    <div class="owl-carousel owl-theme" id="feature_slider">
                    	<?php
                    		$args = array('post_type'=>'event');
                            $query = new WP_Query($args);

                            if($query->have_posts()): while($query->have_posts()): $query->the_post();
                    	?>
                        <div class="item">
                            <div class="ob_feature_study_image">
                                <img src="<?php the_post_thumbnail_url();?>" alt=""/>
                            </div>
                            <div class="ob_feature_study_detail">
                                <h3><?php the_title();?></h3>
                                <p><?php the_content();?></p>
                                <a href="<?php the_permalink();?>"><?php esc_html_e('Detail','jalsan');?></a>
                            </div>
                        </div>
                    <?php endwhile; endif;?>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--completed events section end-->

<!--President word, Upcoming events and Student Stories Section Start-->
<div class="ob_mix">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php 
                if(have_posts()):while(have_posts()): the_post();
                   /** $section_title  = get_field('title');
                    $name = get_field('name');
                    $content = get_field('content');**/
                ?>
                <div class="ob_mix_wrap">
                    <div class="ob_mix_heading">
                        <h4><?php the_field('section_title');?></h4>
                        <h5><?php the_field('name');?></h5>
                        <p><?php the_field('content');?></p>
                        <a href="#"><?php esc_html_e('Read More','jalsan');?></a>
                    </div>
                </div>
                <?php  endwhile; endif;?>
            </div>
            <div class="col-md-4">
                <div class="ob_mix_wrap">                    
                    <div class="ob_mix_heading">
                        <h4><?php echo get_field('upcoming_events_section_title');?></h4>
                    </div>
                    <div class="ticker1">
                        <div class="innerWrap">
                            <?php 
                                $args = array('post_type'=>'upcoming_event');
                                $query = new WP_Query($args);

                                if($query->have_posts()): while($query->have_posts()): $query->the_post();
                            ?>
                            <div class="list">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="ob_event_date">
                                            <h3>&nbsp</h3>
                                            <p><?php the_field('pick_a_date');?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="ob_event_detail">
                                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                            <p><?php the_content();?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="ob_event_more">
                        <a href="<?php echo get_post_type_archive_link('upcoming_event');?>"><?php esc_html_e('See All Events','jalsan');?> >></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ob_mix_wrap">
                    <?php 
                        $student_stories_title = get_field('student_stories_title');                        
                    ?>
                    <div class="ob_mix_heading">
                        <h4>Students Stories</h4>
                        <div class="owl-carousel owl-theme" id="top_story_slider">
                            <?php 
                               $args = array('post_type'=>'story');
                               $query = new WP_Query($args);

                               if($query->have_posts()): while($query->have_posts()): $query->the_post();
                            ?>
                            <div class="item">
                                <div class="ob_top_story_image">
                                    <img src="<?php the_post_thumbnail_url();?>" style="height:360px; width: 570px;"/>
                                </div>
                                <div class="ob_top_story_detail">
                                    <div class="ob_top_story_height">
                                        <h3><?php the_title();?></h3>
                                    </div>
                                    <a href="<?php the_permalink();?>"><?php esc_html_e('Read More','jalsan');?></a>
                                </div>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--President word, Upcoming events and Student Stories Section End-->

<!--Clients Section Start-->
<div class="client_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                          <div class="ob_mix_heading">
                                <h4><?php esc_html_e('Member Schools','jalsan');?></h4>
                          </div>
                          <?php 
                           $param = array(
                            'post_type'=>'member_school',
                            );

                           $school_query = new WP_Query($param);
                          ?>
                        <div class="owl-carousel owl-theme" id="clients_slider">
                            <?php
                                if($school_query->have_posts()): while($school_query->have_posts()): $school_query->the_post();
                            ?>
                            <div class="item1">
                                <img src="<?php echo get_field('image')?>" alt=""/>
                                <h5><a href="<?php echo get_field('link');?>" target="_blank"><?php the_title();?></a></h5>
                            </div>
                        <?php endwhile; endif;?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--Clients Section End-->

<script>
jQuery('#feature_slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    navigation: true,
    navText: [
        "<i class='icon-chevron-left icon-white'><</i>",
        "<i class='icon-chevron-right icon-white'>></i>"
    ],
    responsive: {
        0: {
    items: 1
    },
    600: {
        items: 3
    },
    1000: {
        items: 3
        }
    }
});
</script>
<script>
jQuery('#top_story_slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    nav: false,
    navText: [
        "<i class='icon-chevron-left icon-white'><</i>",
        "<i class='icon-chevron-right icon-white'>></i>"
    ],
    responsive: {
        0: {
    items: 1
    },
    600: {
        items: 2
    },
    1000: {
        items: 1
        }
    }
});
</script>
<script>
    jQuery('#clients_slider').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        stopOnHover: true,
        nav: true,
        navText: [
            "<i class='icon-chevron-left icon-white'><</i>",
            "<i class='icon-chevron-right icon-white'>></i>"
        ],
        responsive: {
            0: {
        items: 2
        },
            600: {
        items: 3
                },
            1000: {
        items: 5
                }
            }
        });
</script>
<script>
    jQuery(function () {
        jQuery(".dropdown").hover(
            function () {
                jQuery('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                jQuery(this).toggleClass('open');
                jQuery('b', this).toggleClass("caret caret-up");
            },
            function () {
                jQuery('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                jQuery(this).toggleClass('open');
                jQuery('b', this).toggleClass("caret caret-up");
            });
        });
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<script>
    jQuery('.ticker1, .ticker2').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'slow',
        interval: 2000,
        height: 'auto',
        visible: 3,
        mousePause: 1,
        controls: {
            up: '',
            down: '',
            toggle: '',
            playText: 'Play',
            stopText: 'Stop'
            }
        });
</script>
<?php get_footer();