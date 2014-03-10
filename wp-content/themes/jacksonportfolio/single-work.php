<?php get_header(); ?>
<main class="project">
  <div class="container"><!--Container Start-->
    <div class="information"><!--Information Start-->
      <div class="overview">
        <h2><?php the_title() ;?></h2>
          <?php $fields = $cfs->get('tags'); foreach ($fields as $field) { ?>
						<h4><?php echo $field['tag']; ?></h4>
					<?php } ?>
        <p><strong>Completed: </strong><?php echo $cfs->get('year'); ?></p>
				<p><?php echo $cfs->get('client'); ?></p>
				<p><?php echo $cfs->get('art_director'); ?></p>
				<?php if ($cfs->get('is_web') == 1){?>
				  <a href="<?php echo $cfs ->get('url')?>" class="button">Visit this site</a>
				<?php } ?>
      </div>
      <div class="description line-width">
      <p><?php echo $cfs->get('description'); ?></p>
      </div>
    </div><!--Information End-->
  </div><!--Container End-->
    <?php $fields = $cfs->get('images'); foreach ($fields as $field) { ?>
      <?php if ($field['has_browser'] == 1){?>
        <div class="img-w-browser" style="background-color: <?php echo $field['background_color']; ?>;">
          <div class="container">
            <div class="browser">
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
          </div>
        </div>
      <?php } elseif ($field['full_width'] == 1){ ?>
        <div class="img-full"><!--img-full Start-->
          <img src="<?php echo $field['image']; ?>">
          <div class="container"><!--Container Start-->
            <p class="caption"><?php echo $field['caption']; ?></p>
          </div><!--Container End-->
        </div><!--img-full End-->
      <?php } else { ?>
        <div class="image-contained" style="background-color: <?php echo $field['background_color']; ?>;">
          <div class="container"><!--Container Start-->
            <img src="<?php echo $field['image']; ?>">
            <p class="caption"><?php echo $field['caption']; ?></p>
          </div><!--Container End-->
        </div>
      <?php } ?>
		<?php } ?>
</main>
<?php get_footer(); ?>