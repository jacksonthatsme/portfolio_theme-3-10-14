<?php get_header(); ?>
	<ul id="category-filter">
		<li class="filter" data-filter="all">Show All</li>
		<?php
			$args = array(
			  'orderby' => 'count',
			  );
			$categories = get_categories( $args );
			foreach ( $categories as $category ) {
				echo '<li class="filter" data-filter="' . $category->slug . '">' . $category->name . '</li>';
			}
		?>
	</ul>
	<ul id="Grid">
		<?php 
			
			$args = array(
				'post_type' => 'work',
				'order' => 'asc',
				'orderby' => 'menu_order'
			);
			
			$the_query = new WP_Query( $args );
		?>
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<li class="project-link mix <?php foreach(get_the_category() as $category) {
echo $category->slug; } ?>">
				<a href="<?php  the_permalink() ;?>"><img src="<?php the_field( 'thumbnail' );?>"></a>
				<h3><a href="<?php  the_permalink() ;?>"><?php the_title() ;?></a></h3>
				<h4><?php the_field( 'type' );?></h4>
			</li>
		<?php endwhile; else: ?>
			
			<h3> There is no work here </h3>
		
		<?php endif; ?>
			<div class="clear"></div>
	</ul>

<?php get_footer(); ?>