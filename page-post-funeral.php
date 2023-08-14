<?php get_header(); ?>

	<main>

	<?php get_template_part('template-parts/hero-simple', '', array('epigrafe' => 'Servicios', 'bajada' => '¿Qué tengo que hacer después del funeral?', 'background' => 'si')); ?>

	<?php get_template_part('template-parts/two-cols-simple'); ?>

	<?php get_template_part('template-parts/service-list', '', array('title' => '¿Qué debo hacer después del funeral?', 'bajada' => 'Te asesoramos en todos los trámites necesarios después del funeral.')); ?>

	<?php get_template_part('template-parts/accordion'); ?>

  <?php get_template_part('template-parts/section-articles'); ?>

	<?php get_template_part('template-parts/contact-box'); ?>

	</main>

<?php get_footer(); ?>
