<?php get_header(); ?>

	<main>

	<?php get_template_part('template-parts/hero-simple', '', array('epigrafe' => '', 'bajada' => '', 'background' => 'si')); ?>

	<?php get_template_part('template-parts/content-center', "", array("bg" => "" )); ?>

	<?php get_template_part('template-parts/contact-form'); ?>

	<?php get_template_part('template-parts/contact-box'); ?>

	</main>

<?php get_footer(); ?>
