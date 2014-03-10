<?php get_header(); ?>
<div class="blog post">
    <?php 
  			
  			$args = array(
  				'post_type' => 'hats',
  			);
  			
  			$the_query = new WP_Query( $args );
  		?>
  		
  		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <hgroup>
    <?php
      global $post;
      $categories = get_the_category($post->ID);
    ?>
    <h4><?php echo $categories[0]->cat_name ?></h4>
    <h2><?php the_title() ;?></h2>
    <?php the_date('m.d.Y', '<h4>', '</h4>'); ?>
  </hgroup>
  <div class="content">
    <?php the_content(); ?>
  </div>
  <?php endwhile; else: ?>
  			
    <h3> There is no post here </h3>
  		
  <?php endif; ?>
</div>
<?php get_footer(); ?>


  			
  		