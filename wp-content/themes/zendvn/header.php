<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Spartan</title>
	<!--[if lt IE 9]>
			<script src="js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<meta name='robots' content='noindex,follow' />
	<link rel='stylesheet' href='http://localhost/wordpress/wp-content/themes/zendvn/css/symple_shortcodes_styles.css' type='text/css' media='all' />
	<link rel='stylesheet' href='http://localhost/wordpress/wp-content/themes/zendvn/css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='http://localhost/wordpress/wp-content/themes/zendvn/css/responsive.css' type='text/css' media='all' />
	<link rel='stylesheet' href='http://localhost/wordpress/wp-content/themes/zendvn/css/site.css' type='text/css' media='all' />
	<script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/zendvn/js/jquery/jquery.js'></script>
	<script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/zendvn/js/jquery/jquery-migrate.min.js'></script>
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen">
	<![endif]-->
</head>

<body class="home fixed-nav">

	<div id="wrap" class="clr">

		<div id="top-wrap" class="clr">
			<?php get_sidebar('top-menu') ?>
			<header id="header" class="site-header clr container" role="banner">
				<div class="site-branding clr">
					<div id="logo" class="clr">
						<div class="site-text-logo clr">
							<h1>
								<a href="#" title="Spartan" rel="home">Spartan</a>
							</h1>
						</div>
					</div>
					<!-- #logo -->
					<div id="blog-description" class="clr">
						Edit your subheading via the theme customizer. <br /> It looks much better when it's 2 lines long.
					</div>
					<!-- #blog-description -->
				</div>
				<!-- .site-branding -->
				<div class="ad-spot header-ad clr">
					<a href="#" title="Ad"><img
						src="http://localhost/wordpress/wp-content/themes/zendvn/images/ad-620x80.png" alt="Ad" /></a>
				</div>
				<!-- .ad-spot -->
			</header>
			<!-- #header -->
                <?php get_sidebar('main-menu')  ?>
		</div>