<?php
/*
Template Name: Resume Page
*/?>

<?php get_header(); ?>
<div class="container">
  <div class="resume">
    <div class="column left">
      <h1>Work Experience</h1>
      <ul class="work">
        <?php $fields = $cfs->get('work_experience'); foreach ($fields as $field) { ?>
  				<li>
  				  <h2><?php echo $field['job_title']; ?></h2>
  				  <h4><a href="<?php echo $field['job_url']; ?>" target="_blank"><?php echo $field['employer']; ?></a>, <?php echo $field['time']; ?></h4>
  				  <p><?php echo $field['job_description']; ?></p>
  				</li>
  			<?php } ?>
      </ul>
    </div>
    <div class="column right">
      <h1>Education</h1>
      <ul class="education">
        <?php $fields = $cfs->get('education'); foreach ($fields as $field) { ?>
          <li>
            <h2><?php echo $field['school_name']; ?></h2>
            <h4><?php echo $field['school_location']; ?></h4>
            <p><?php echo $field['school_description']; ?></p>
          </li>
        <?php } ?>
      </ul>
      <h1>Leadership</h1>
      <ul class="leadership">
        <?php $fields = $cfs->get('leadership'); foreach ($fields as $field) { ?>
          <li>
            <h2><?php echo $field['leadership_role']; ?></h2>
            <h4><?php echo $field['leadership_employer']; ?>, <?php echo $field['leadership_time']; ?></h4>
            <p><?php echo $field['leadership_description']; ?></p>
          </li>
        <?php } ?>
      </ul>
      <h1>Skills</h1>
      <ul class="skills two-up">
        <?php $fields = $cfs->get('skills'); foreach ($fields as $field) { ?>
          <li><p><?php echo $field['skill']; ?></p></li>
        <?php } ?>
      </ul>
      <h1>Interests</h1>
      <ul class="interests two-up">
        <?php $fields = $cfs->get('interests'); foreach ($fields as $field) { ?>
          <li><p><?php echo $field['interest']; ?></p></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
  <div class="download">
    <a href="<?php echo $cfs->get('pdflink'); ?>">Download Resume as PDF</a>
  </div>
</div>
<?php get_footer(); ?>