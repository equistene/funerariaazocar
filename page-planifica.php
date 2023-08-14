<?php get_header(); ?>

	<main>

	<?php get_template_part('template-parts/hero-simple', '', array('epigrafe' => '', 'bajada' => 'Planificar tu funeral es un regalo para tu familia y para ti.', 'background' => 'si')); ?>
	
	<?php get_template_part('template-parts/service-list'); ?>	

  <?php get_template_part('template-parts/accordion'); ?>

	<?php get_template_part('template-parts/contact-box'); ?>

	</main>

<?php get_footer(); ?>
