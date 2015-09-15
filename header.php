<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<title><?php bloginfo('name') ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
		<link href="<?php bloginfo('template_directory'); ?>/css/lightbox.css" rel="stylesheet" />
		<meta name="keywords" content="Cardiff, Creative, Film, Graphic, ID, Media, Motion, South, Wales, design, graphics, identity, production">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

		<?php wp_head(); ?>
	</head>	
	<body>
		<div class="container">
			<div class="head-wrap">
				<header>
					<div class="header">
						<div class="logo">
							<img src="<?php bloginfo('template_directory'); ?>/images/id-icon.jpg" alt="ID Creative Media logo">
							<div class="text">
								ID CREATIVE MEDIA <br>
								<span>Graphic Design &amp; Film Production</span>
							</div>
						</div>

						<nav>					
								<?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>					
						</nav>					

						<ul class="social"> 
					        <li>
					        	<a href="https://twitter.com/idcreativemedia" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="ID Twitter"></a>
					        </li>
					        <li>
					        	<a href="https://www.facebook.com/idcreativemedia" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="ID Facebook"></a>
					        </li>
					        <li>
					        	<a href="https://vimeo.com/idcreativemedia" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/vimeo.png" alt="ID Vimeo"></a>
					        </li>
					        <li>
					        	<a href="https://plus.google.com/u/0/105932136078296496718/posts" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/google.jpg" alt="ID Google"></a>
					        </li>
	  					</ul>
					</div>
				</header>				
			</div>