<?php
/*
Template Name Posts: Motion Project
*/
?>

<?php get_header(); ?>
		<div class="jumbo-video">
			<?php echo $cfs->get('video'); ?>		
		</div>
		<div class="description-container">
			<div class="overview">
					<h2><?php the_title() ;?></h2>
					<?php $fields = $cfs->get('tags'); foreach ($fields as $field) { ?>
						<h3><?php echo $field['tag']; ?></h3>
					<?php } ?>
					<h4><strong>Completed: </strong><?php echo $cfs->get('year'); ?></h4>
					<h4><?php echo $cfs->get('client'); ?></h4>
					<h4><?php echo $cfs->get('art_director'); ?></h4>
			</div>
			<div class="description">
				<p><?php echo $cfs->get('description'); ?></p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="project-images">
			<?php $fields = $cfs->get('images'); foreach ($fields as $field) { ?>
				<img src="<?php echo $field['image']; ?>">
			<?php } ?>
		</div>
<?php get_footer(); ?>