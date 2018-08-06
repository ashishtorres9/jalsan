<?php 
/**
* Template Name: About Template
**/
get_header();

$page_title = get_field('page_title');
$page_content = get_field('page_content');
?>

<div class="fl-about-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-page-content">
                    <h3><?php echo $page_title;?></h3>
                    <p><?php echo wpautop($page_content);?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();

