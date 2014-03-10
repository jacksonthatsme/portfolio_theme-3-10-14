<?php
/*
Template Name Posts: Web Project
*/
?>

<?php get_header(); ?>
		<div class="jumbo-image">
			<img src="<?php echo $cfs->get('jumbo'); ?>" alt="">
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
					<a href="<?php echo $cfs ->get('url')?>" class="visit-btn">Visit this website</a>
			</div>
			<div class="description">
				<p><?php echo $cfs->get('description'); ?></p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="project-images">
			<?php $fields = $cfs->get('images'); foreach ($fields as $field) { ?>
				<div class="image-wrap">
				  <div class="header">
				    <ul class="buttons">
				      <li></li>
				      <li></li>
				      <li></li>
				    </ul>
				    <div class="input">
				      <?php echo $cfs ->get('url')?>
				      <a class ="link" href="<?php echo $cfs ->get('url')?>">&rarr;</a>
				    </div>
				  </div>
				  <img src="<?php echo $field['image']; ?>">
				</div>
			<?php } ?>
		</div>
<?php get_footer(); ?>