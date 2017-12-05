<!DOCTYPE HTML>
<html>
<head>
	<title>
		<?php wp_title(' | ', true, 'right'); echo SITE_NAME;?>
	</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="<?php echo THEME_URL; ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>assets/css/custom-theme.css">
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<?php wp_head();?>
</head>
<body>
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">

				<!-- Logo -->
				<a href="<?php echo SITE_URL;?>" class="logo">
					<span class="symbol"><img src="<?php echo THEME_URL; ?>images/logo.svg" alt="" /></span><span class="title"><?php echo SITE_NAME;?></span>
				</a>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<?php wp_nav_menu(array('location'=>'menu_header','container'=>null));?>
		</nav>