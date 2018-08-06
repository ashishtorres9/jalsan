<?php
get_header();
?>
<div class="fl-about-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<?php 
            		if(have_posts()): while(have_posts()): the_post();
            	?>
                <div class="about-page-content">
                    <h3><?php the_title();?></h3>
                    <div class="col-md-7">
                		<?php the_post_thumbnail(array(600,600));?>
               		</div>
               		<div class="col-md-5">
                    	<p><?php the_content();?></p>
                	</div>
                </div>
            <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();