<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto+Mono:wght@300;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

	<link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header class="site-header">
			<div class="container">

				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>

				<nav class="main-navigation">
					<?php wp_nav_menu(['theme_location' => 'menu-1', 'menu_id' => 'main-menu', 'container' => '']); ?>
				</nav>

			</div>
		</header>