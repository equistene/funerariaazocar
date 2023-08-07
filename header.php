<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/GothamPro.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/GothamPro-Bold.woff2" as="font" type="font/woff2" crossorigin>


	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="py-4">
		<div class="container mx-auto flex justify-between align-top">
			<div class="logo">
				<a href="#">
					<img src="<?php bloginfo('template_url'); ?>/images/logo-horizontal.png" alt="Funeraria Azócar" class="w-auto max-h-20">
				</a>
			</div>
			
			<div class="row hidden md:block">
				<nav>
					<ul class="flex justify-end gap-4">
						<li><a href="#">Conócenos</a></li>
						<li><a href="#">Repatriaciones</a></li>
						<li><a href="#">Convenios</a></li>
						<li><a href="#">Beneficios</a></li>
						<li><a href="#">Contáctanos</a></li>
					</ul>
				</nav>

				<nav>
					<ul class="flex justify-end gap-4">
						<li><a href="#">Necesito un servicio</a></li>
						<li><a href="#">Planificar en vida</a></li>
						<li><a href="#">Qué hacer después</a></li>						
					</ul>
				</nav>
			</div>
		</div>
	</header>

	
		<main>
