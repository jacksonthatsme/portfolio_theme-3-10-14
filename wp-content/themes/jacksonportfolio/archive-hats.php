<?php
/*
Template Name: Hats Archive
*/?>
<?php get_header() ?>
<div class="blog">
  <ul class="blog-archive">
  <?php 
  			
  			$args = array(
  				'post_type' => 'hats',
  				'order' => 'asc',
  				'orderby' => 'menu_order',
  			);
  			
  			$the_query = new WP_Query( $args );
  		?>
  		
  		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  			
  			<a href="<?php  the_permalink() ;?>"><li class="blog-link">
  			   <hgroup>
    				<?php
    				global $post;
    				$categories = get_the_category($post->ID);
    				?>
    				<h4><?php echo $categories[0]->cat_name ?></h4>
    				<h2><?php the_title() ;?></h2>
    				<?php the_date('m.d.Y', '<h4>', '</h4>'); ?>
    				</hgroup>
    				<p><?php echo get_the_excerpt(); ?></p>
  			</li></a>
  		
  		<?php endwhile; else: ?>
  			
  			<h3> There is no work here </h3>
  		
  		<?php endif; ?>
  </ul>
<?php get_footer(); ?>
</div>