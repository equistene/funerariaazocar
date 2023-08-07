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


	<header class="bg-gray-50 border-b-1 border-blue-950 shadow-md sticky top-0 z-50">
		<div class="container mx-auto flex justify-between align-top">
			<div class="logo py-2">
				<a href="#" class="block hover:opacity-60 transition-all">
					<img src="<?php bloginfo('template_url'); ?>/images/logo-horizontal.png" alt="Funeraria Azócar" class="w-auto max-h-16 md:max-h-20">
				</a>
			</div>
			
			<div class="row hidden md:block">
				<nav class="secondary-menu">
					<ul>
						<li><a href="#">Conócenos</a></li>
						<li><a href="#">Repatriaciones</a></li>
						<li><a href="#">Convenios</a></li>
						<li><a href="#">Beneficios</a></li>						
						<li><a href="#">Encuentrános</a></li>						
					</ul>
				</nav>

				<nav class="main-menu">
					<ul>
						<li>
							<a href="#">Necesito un servicio</a>
							<ul>
								<li><a href="#">Memorial</a></li>
								<li><a href="#">Eternal</a></li>
								<li><a href="#">Clásico</a></li>
								<li><a href="#">Tradicional</a></li>
								<li><a href="#">Estándar</a></li>
							</ul>
						</li>
						<li><a href="#">Planificar en vida</a></li>
						<li><a href="#">Qué hacer después</a></li>
						<li><a href="#">Contáctanos</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
