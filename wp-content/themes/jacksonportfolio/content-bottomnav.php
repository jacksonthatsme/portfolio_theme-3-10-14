<div class="container">
<?php if (is_single()){ ?>
<div class="content-panel">
	<div class="prev"><?php next_post_link('%link','%title', false, '5'); ?></div>
	<div class="index"><a href="<?php bloginfo( 'url' );?>">Index</a></div>
	<div class="next"><?php previous_post_link('%link','%title', false, '5'); ?></div>
</div>
<?php } else { ?>
<?php } ?>
</div>