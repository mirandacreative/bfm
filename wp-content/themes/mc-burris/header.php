<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
		
		<?php wp_head(); ?>
		

		<!-- Drop Google Analytics here -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-72848129-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<!-- end analytics -->
		<!-- Pixel for target Onstart ReachCode -->
		<script type="text/javascript">var rl_siteid = "2f5e6c63-cc75-4f91-a383-2be056cbf125";</script><script type="text/javascript" src="//cdn.rlets.com/capture_static/mms/mms.js" async="async"></script>
		<!-- 	End Pixel 	 -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					<header class="header" role="banner">
						<div class="burris-logistics-backlink">
							<div class="row">
								<div class="large-12 columns">
									<a href="http://burrislogistics.com">BurrisLogistics.com <sup><i class="fa fa-external-link"></i></sup></a>
								</div>
							</div>
							
						</div>
						<!-- This navs will be applied to the topbar, above all content 
							 To see additional nav styles, visit the /parts directory -->
						<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
		 				
		 				<?php if (is_front_page()): ?>
		 					<?php get_template_part( 'parts/content', 'slider' ); ?>
		 					<div class="hero-contact">
		 						<h2><img class="telephone-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fi-telephone.svg" alt="Telephone Icon"> Call us 24/7/365</h2>
				            <br><a class="button phone-number" href="tel:844.236.7253">(844) 236-7253</a>
					    </div>
		 				<?php else : ?>
		 					<?php
		 						$hero_image_obj = get_field('hero_image');
	 							$hero_image = $hero_image_obj['url'];
	 							$hero_image_focus_x = get_field('hero_image_focus_x');
	 							$hero_image_focus_y = get_field('hero_image_focus_y');
		 					?>
							<div class="hero" style="background-image: url(<?php echo $hero_image; ?>); background-position: <?php echo $hero_image_focus_x; ?>% <?php echo $hero_image_focus_y; ?>%;">
								<div class="hero-contact">
									<h2>Call us 24/7/365</h2>
									<a href="tel:844.236.7253" class="button">(844) 236-7253</a>
								</div>
							</div>
		 				<?php endif; ?>

					</header> <!-- end .header -->