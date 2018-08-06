<?php 
/**
*Template Name: Team Template
**/
get_header();

$page_title = get_field('page_title');
$team_members = get_field('team_members');
?>
<div class="fl_team_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fl_team_title">
                    <h3><?php echo $page_title;?></h3>
                </div>
            </div>
        </div>
        <div class="row">
        	<?php 
        		foreach($team_members as $member){
        	?>
            <div class="col-md-3">
                <div class="fl_team_inner">
                    <figure>
                        <img src="<?php echo $member['image'];?>">
                    </figure>
                    <div class="fl_team_info">
                        <h5><?php echo $member['name'];?></h5>
                        <p><?php echo $member['position'];?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
<?php get_footer();