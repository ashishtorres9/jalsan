<?php 
get_header();
?>

<?php 
	if(have_posts()): while(have_posts()): the_post();?>
		<div class="container">
	        <div class="row">
	            <div class="col-md-12">
	            	<div class="event-title">
	            		<h4><?php esc_html_e('Upcoming Events','jalsan');?></h4>
	            	</div>
					<div class="">
						<div class=""><?php the_title();?></div>
						<div class=""><?php the_content();?></div>
						<div class=""><?php the_field('pick_a_date');?></div>				  
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; endif;

?>
<?php get_footer();