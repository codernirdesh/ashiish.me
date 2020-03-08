<?php 
/**
 * The header file
 *
 * @package ashiishme
 *
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116740721-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-116740721-2');
        </script>
</head>
<!-- body starts -->
<body <?php body_class(); ?>>
	<!-- background animation -->
	<canvas id="ashiish-canvas"></canvas>
	<!-- background animation ends -->
	<div class="site-branding-mobile-container">
		<p><a href="javascript:void(0)" id="ashiishme-menu-btn" data-clicked="0"><i class="fas fa-bars"></i></a></p>
		<div class="site-branding-container mobile-menu">
			<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
		</div>
	</div>
	<!-- page starts -->
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ashiishme' ); ?></a>
		<!-- container starts -->
		<div class="container ashiish-page">
			<!-- row starts -->
			<div class="row">
				<!-- site header starts -->
				<header id="masthead" class="site-header col-md-3">
					<div class="site-branding-container">
						<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
					</div>
				</header>
				<!-- site header ends -->
				<!-- content starts -->
				<div id="content" class="site-content col-md-8">