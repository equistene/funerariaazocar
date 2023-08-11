<?php get_header(); ?>

	<main>

	<?php get_template_part('template-parts/hero-simple', '', array('epigrafe' => 'Servicios', 'bajada' => 'El más completo de nuestros servicios')); ?>

	<?php get_template_part('template-parts/services-section'); ?>

	<?php get_template_part('template-parts/two-cols-list'); ?>

	<?php get_template_part('template-parts/service-list'); ?>

	<?php get_template_part('template-parts/gallery'); ?>

	<?php get_template_part('template-parts/contact-box'); ?>

	<?php get_template_part('template-parts/accordion'); ?>

	</main>

<?php get_footer(); ?>
