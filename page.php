<?php get_header(); ?>

	<main>

	<?php // get_template_part('template-parts/hero-simple', '', array('epigrafe' => 'Servicios', 'bajada' => 'El más completo de nuestros servicios', 'background' => 'si')); ?>

	<?php // get_template_part('template-parts/services-section'); ?>

	<?php // get_template_part('template-parts/two-cols-list'); ?>

	<?php // get_template_part('template-parts/service-list'); ?>

	<?php // get_template_part('template-parts/gallery'); ?>

	<?php // get_template_part('template-parts/content-center', "", array("bg" => "", "video" => "si" )); ?>

	<?php // get_template_part('template-parts/contact-form'); ?>

	<?php // get_template_part('template-parts/accordion'); ?>

	<?php // get_template_part('template-parts/contact-box'); ?>

	<?php
// Check value exists.
if( have_rows('bloques') ):

    // Loop through rows.
    while ( have_rows('bloques') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'hero' ):
            $title = get_sub_field('titulo');
						$epigrafe = get_sub_field('epigrafe');
						$bajada = get_sub_field('bajada');
						$bg = get_sub_field('fondo');
						get_template_part('template-parts/hero-simple', '', array('title' => $title, 'epigrafe' => $epigrafe, 'bajada' => $bajada, 'background' => $bg));            
        
        elseif( get_row_layout() == 'hero_principal' ): 
            $title = get_sub_field('titulo');
						$bajada = get_sub_field('bajada');
						$botonTexto = get_sub_field('boton_texto');
						$botonLink = get_sub_field('boton_enlace');
						$image = get_sub_field('imagen');
						$trackButton = get_sub_field('nombre_evento');
            get_template_part('template-parts/hero-home', '', array('title' => $title, 'bajada' => $bajada, 'botonTexto' => $botonTexto, 'botonLink' => $botonLink, 'imagen' => $image, 'trackButton' => $trackButton));

				elseif( get_row_layout() == 'botonera_servicios'):
						$title = get_sub_field('titulo');
						$bajada = get_sub_field('bajada');
						$servicios = get_sub_field('servicios');
						$adicional = get_sub_field('texto_adicional');
						get_template_part('template-parts/slider-services', '', array('title' => $title, 'bajada' => $bajada, 'servicios' => $servicios, 'adicional' => $adicional));

				elseif( get_row_layout() == 'botonera_productos'):
						$title = get_sub_field('titulo');
						$bajada = get_sub_field('bajada');
						$servicios = get_sub_field('servicios');
						$adicional = get_sub_field('texto_adicional');
						get_template_part('template-parts/slider-products', '', array('title' => $title, 'bajada' => $bajada, 'servicios' => $servicios, 'adicional' => $adicional));
				

				elseif( get_row_layout() == 'contenido_centrado'):
						$title = get_sub_field('titulo');
						$content = get_sub_field('contenido');
						$video = get_sub_field('video');
						$image = get_sub_field('imagen');
						get_template_part('template-parts/content-center', "", array("title" => $title, "content" => $content, "video" => $video, "image" => $image ));
				
				elseif( get_row_layout() == 'acordeon'):
						$title = get_sub_field('titulo');
						$content = get_sub_field('bajada');
						$acordeon = get_sub_field('acordeon');						
						get_template_part('template-parts/accordion', "", array("title" => $title, "content" => $content, "acordeon" => $acordeon ));
				
				elseif( get_row_layout() == 'galeria'):
						$title = get_sub_field('titulo');
						$content = get_sub_field('bajada');
						$gallery = get_sub_field('galeria');						
						get_template_part('template-parts/gallery', "", array("title" => $title, "content" => $content, "gallery" => $gallery ));

				elseif( get_row_layout() == 'listado_servicios'):
					$title = get_sub_field('titulo');
					$content = get_sub_field('bajada');
					$lista = get_sub_field('lista');						
					get_template_part('template-parts/service-list', "", array("title" => $title, "content" => $content, "lista" => $lista ));

				elseif( get_row_layout() == 'contenido_multimedia'):
					$title = get_sub_field('titulo');
					$content = get_sub_field('contenido');
					$video = get_sub_field('video');
					$galeria = get_sub_field('gallery');
					$imagen = get_sub_field('imagen');
					get_template_part('template-parts/service-list', "", array("title" => $title, "content" => $content, "video" => $video, "galeria" => $galeria, "imagen" => $imagen ));

				elseif( get_row_layout() == 'formulario_contacto'):
					$title = get_sub_field('titulo');
					$content = get_sub_field('bajada');
					$form = get_sub_field('formulario');					
					get_template_part('template-parts/contact-form', "", array("title" => $title, "content" => $content, "formulario" => $form ));
				
				elseif( get_row_layout() == 'bloque_contacto'):
						$title = get_sub_field('titulo');
						$content = get_sub_field('contenido');
						$video = get_sub_field('video');
						$galeria = get_sub_field('gallery');
						$imagen = get_sub_field('imagen');
						get_template_part('template-parts/contact-box', "", array("title" => $title, "content" => $content, "video" => $video, "galeria" => $galeria, "imagen" => $imagen ));
						
				elseif( get_row_layout() == 'bloque_logos'):
						$title = get_sub_field('titulo');
						$content = get_sub_field('contenido');
						$logos = get_sub_field('logos');						
						get_template_part('template-parts/content-logos', "", array("title" => $title, "content" => $content, "logos" => $logos ));
				
				elseif( get_row_layout() == 'servicio_descripcion'):
						$name = get_sub_field('nombre');
						$descripion = get_sub_field('descripcion');
						$image = get_sub_field('imagen');		
						$price = get_sub_field('precio');
						$features = get_sub_field('caracteristicas');
						$group = get_sub_field('grupo_caracteristicas');
						get_template_part('template-parts/servicio-descripcion', "", array("name" => $name, "description" => $descripion, "image" => $image, "price" => $price, "features" => $features, "group" => $group));

        endif;

    endwhile;

		// No value.
		else : endif; ?>

	</main>

<?php get_footer(); ?>
