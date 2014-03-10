<?php
/*
Template Name: About Page
*/?>

<?php get_header(); ?>
<main>
  <div class="container"><!-- Container Start -->
    <div class="about">
      <section class="img">
        <img src="<?php echo $cfs->get('bio_img'); ?>"/>
        <p class="caption">Photo by <a href="http://www.micahewood.com/">Micah E. Wood</a></p>
      </section>
      <section class="bio">
        <h2><?php echo $cfs->get('bio'); ?></h2>
      </section>
      <section class="contact">
        <h2>Contact</h2>
        <p><?php echo $cfs->get('contact'); ?></p>
      </section>
      <section class="friends">
        <h2>Friends</h2>
        <ul class="friends">
          <?php $fields = $cfs->get('friends'); foreach ($fields as $field) { ?>
  				  <li><a href="<?php echo $field['friend_url']; ?>"><?php echo $field['friend_name']; ?></a></li>
  				<?php } ?>
        </ul>
      </section>
    </div>
  </div><!-- Container End -->
</main>
<div class="clear"></div>
<?php get_footer(); ?>