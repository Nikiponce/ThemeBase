<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>
	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- jQuery -->
	<script src="<?= get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Bootstrap CSS -->
	<link href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="wrapper">
		<header>
			<nav class="navbar navbar-default" role="navigation" id="myScrollspy">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo get_option('home'); ?>">
						<img src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png" width="110" alt="<?php bloginfo('name'); ?>" class="img-responsive"/>
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<!--<?= __('texto', 'plantilla'); ?>-->
					<?php 
					wp_nav_menu( array(
						'menu' => 'Main',
						'depth' => 2,
						'container' => false,
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'wp_page_menu',
						'walker' => new wp_bootstrap_navwalker())
					);
					?>
				</div><!-- /.navbar-collapse --> 
			</nav>
		</header>