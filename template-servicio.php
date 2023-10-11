<?php /* Template Name: Servicio */ ?>

<?php get_header(); ?>

	<main>

	<?php get_template_part('template-parts/hero-simple', '', array('epigrafe' => 'Servicio', 'bajada' => 'Descripción breve del servicio', 'background' => 'si')); ?>

	<?php get_template_part('template-parts/two-cols-list', '', array('title' => '¿En qué consiste?', 'bajada' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut et cum itaque repellendus unde, pariatur alias deserunt consequatur provident sapiente porro ipsa molestiae corrupti earum placeat quos culpa harum in quaerat odit, recusandae ipsam magnam. Neque quae rem consequuntur ad.', 'gallery' => '')); ?>

	<?php get_template_part('template-parts/service-list'); ?>

	<?php get_template_part('template-parts/gallery'); ?>	

	<?php get_template_part('template-parts/contact-box'); ?>

  <?php get_template_part('template-parts/accordion'); ?>

	</main>

<?php get_footer(); ?>