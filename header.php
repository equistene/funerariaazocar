<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

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
					<img src="https://funerariaazocar.cl/wp-content/uploads/2017/12/logo-funeraria.png" alt="">
				</a>
			</div>
			
			<div class="row">
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
