<!DOCTYPE html>
<!-- HTML STARTS -->
<html>
<!-- HEAD STARTS -->
<head>
	<title><?php wp_title('-', true, 'right'); bloginfo( 'name' );?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
	<?php wp_head(); ?>
</head>
<!-- HEAD ENDS -->
	<!-- BODY STARTS -->
	<body>
		  <header>
  			<div class="container">
    			<a href="<?php bloginfo( 'url' );?>"><h1>Jackson Lynch</h1></a>
    			<nav>
    			  <?php if ( is_page_template('template-resume.php') ) { ?>
              <ul>
                <li><a href="<?php bloginfo( 'url' );?>">jacksonthatsme.com</a></li>
                <li><a href="mailto:jacksonthatsme@gmail.com" target="_blank">jacksonthatsme@gmail.com</a></li>
                <li>617 640 1117</li>
              </ul>
            <?php } else {?>
              <?php
                $args = array (
                  'menu' => 'main-menu'
                  );
  					
                wp_nav_menu( $args );
              ?>
            <?php } ?>
          </nav>
  			</div>
  		</header> 
		