<?php get_header(); ?>

	<main>

	<?php get_template_part('template-parts/hero-home'); ?>

	<?php get_template_part('template-parts/slider-services'); ?>

	<?php get_template_part('template-parts/two-cols-simple'); ?>	

	<?php get_template_part('template-parts/content-center', "", array("bg" => "" )); ?>

	<?php get_template_part('template-parts/two-cols-list'); ?>
	
	<?php get_template_part('template-parts/two-cols-text'); ?>

	<?php get_template_part('template-parts/contact-box'); ?>

	</main>

<?php get_footer(); ?>
