<?php get_header(); ?>
<main>
  <div class="container">
  	<ul class="thumbnails">
  		<?php 
  			
  			$args = array(
  				'post_type' => 'work',
  				'order' => 'asc',
  				'orderby' => 'menu_order',
  				'cat' => '-5'
  			);
  			
  			$the_query = new WP_Query( $args );
  		?>
  		
  		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  			
  		  <li <?php if ($cfs->get('is_new') == 1){?>class="new"<?php }?>>
    		  <a href="<?php  the_permalink() ;?>">
  				  <img src="<?php echo $cfs->get('thumbnail'); ?>">
  				  <h2><?php the_title() ;?></h2>
  				  <?php $fields = $cfs->get('tags'); foreach ($fields as $field) { ?>
  						<h4><?php echo $field['tag']; ?></h4>
  						<?php } ?>
  				</a>
  		  </li>
  		
  		<?php endwhile; else: ?>
  			
  			<h3> There is no work here </h3>
  		
  		<?php endif; ?>
  	</ul>
  </div>
</main>
<?php get_footer(); ?>