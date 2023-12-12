<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/GothamPro.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/GothamPro-Bold.woff2" as="font" type="font/woff2" crossorigin>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png">
	<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z8MN4D3PV0"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-Z8MN4D3PV0');
	</script>


	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="bg-gray-50 border-b-1 border-blue-950 shadow-md sticky top-0 z-50" id="header">		
		<div class="bg-primary text-white">
			<div class="header-bar flex justify-center items-center text-white">
				<p class="hidden md:block"><?php the_field('top_horarios', 'option'); ?></p>
				<p><?php the_field('top_emergencias', 'option'); ?></p>
				<p class="hidden md:block"><?php the_field('top_telefono', 'option'); ?></p>				
			</div>
		</div>
		<div class="container mx-auto flex justify-between items-center py-2">
			<div class="logo py-2">
				<a href="<?php echo home_url(); ?>" class="block hover:opacity-60 transition-all">
					<img src="<?php bloginfo('template_url'); ?>/images/logo-horizontal.png" alt="Funeraria Azócar" class="logo w-auto max-h-10 md:max-h-24 transition-all">
				</a>
			</div>

			<div class="block sm:hidden">
				<button id="menu">					
					<svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-8 w-auto">
							<path fill="#001d51" d="M3 18v-2h18v2H3Zm0-5v-2h18v2H3Zm0-5V6h18v2H3Z"/>
					</svg>
				</button>
			</div>
			
			<div class="row hidden md:block">
				<nav class="secondary-menu">
					<?php wp_nav_menu( array( 'theme_location'=>'secondary' ) ); ?>
				</nav>

				<nav class="main-menu">
					<?php wp_nav_menu( array( 'theme_location'=>'primary' ) ); ?>
				</nav>
			</div>
		</div>
		<nav class="menu-mobile">
			<?php wp_nav_menu( array( 'theme_location'=>'mobile' ) ); ?>
		</nav>
	</header>
