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
		<button id="mostrar" class="flex justify-center items-center gap-2 bg-primary text-white w-full p-2">
			<svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-auto">
					<path fill="#ffffff" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2z"/>
			</svg>
			<p class="text-white text-sm font-semibold uppercase gotham-bold">¿Cómo podemos ayudarte? Llámanos</p>
		</button>
		<div class="container mx-auto flex justify-between items-center">
			<div class="logo py-2">
				<a href="<?php echo home_url(); ?>" class="block hover:opacity-60 transition-all">
					<img src="<?php bloginfo('template_url'); ?>/images/logo-horizontal.png" alt="Funeraria Azócar" class="w-auto max-h-12 md:max-h-20">
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
					<ul>
						<li><a href="<?php echo home_url(); ?>/nosotros">Conócenos</a></li>
						<li><a href="<?php echo home_url(); ?>/repatriaciones">Repatriaciones</a></li>
						<li><a href="<?php echo home_url(); ?>/convenios">Convenios</a></li>
						<li><a href="<?php echo home_url(); ?>/beneficios">Beneficios</a></li>						
						<li><a href="<?php echo home_url(); ?>/encuentranos">Encuéntranos</a></li>						
					</ul>
				</nav>

				<nav class="main-menu">
					<ul>
						<li>
							<a href="<?php echo home_url(); ?>/servicios">Necesito un servicio</a>
							<ul>
								<li><a href="<?php echo home_url(); ?>/servicios/memorial">Memorial</a></li>
								<li><a href="<?php echo home_url(); ?>/servicios/eternal">Eternal</a></li>
								<li><a href="<?php echo home_url(); ?>/servicios/clasico">Clásico</a></li>
								<li><a href="<?php echo home_url(); ?>/servicios/tradicional">Tradicional</a></li>
								<li><a href="<?php echo home_url(); ?>/servicios/estandar">Estándar</a></li>
							</ul>
						</li>
						<li><a href="<?php echo home_url(); ?>/planifica">Planificar en vida</a></li>
						<li>
							<a href="<?php echo home_url(); ?>/post-funeral">Qué hacer después</a>
							<ul>
								<li><a href="#">Trámites post-funeral</a></li>
								<li><a href="#">Apoyo en el duelo</a></li>
							</ul>
						</li>
						<li><a href="<?php echo home_url(); ?>/contacto">Contáctanos</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<nav class="menu-mobile">
			<ul>
				<li>
					<a href="<?php echo home_url(); ?>/servicios/">Necesito un servicio</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/planifica">Planificar en vida</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/post-funeral">Qué hacer después</a>
				</li>			
				<li>
					<a href="<?php echo home_url(); ?>/repatriaciones">Repatriaciones</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/beneficios">Beneficios</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/convenios">Convenios</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/nosotros">Conócenos</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/contacto">Contacto</a>
				</li>
			</ul>
		</nav>
	</header>
