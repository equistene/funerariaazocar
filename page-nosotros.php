<?php get_header(); ?>

	<main>

	<?php get_template_part('template-parts/hero-simple', '', array('epigrafe' => '', 'bajada' => 'Nuestro compromiso de servicio y excelencia se ha mantenido a través de los años, lo que nos enorgullece y además nos convierte en la más importante Industria Funeraria del país.', 'background' => "si")); ?>

  <?php get_template_part('template-parts/two-cols-list', '', array('title' => 'Nuestra historia', 'bajada' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex velit quisquam magni? Harum, quae veritatis alias dolore hic repellendus velit fuga at aliquam doloremque porro commodi veniam. Sunt necessitatibus eveniet at, dolore iste illo nisi.
', 'gallery' => 'si')); ?>

	<?php get_template_part('template-parts/contact-box'); ?>

	</main>

<?php get_footer(); ?>