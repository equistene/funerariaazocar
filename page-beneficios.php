<?php get_header(); ?>

	<main>

	<?php get_template_part('template-parts/hero-simple', '', array('epigrafe' => '', 'bajada' => '', 'background' => "si")); ?>

  <?php get_template_part('template-parts/two-cols-text', '', array('title' => '¿Qué es y para qué sirve la Cuota Mortuoria?', 'bajada' => 'Es una asignación en dinero por fallecimiento de personas afiliadas a IPS, AFP, SEGUROS, DIPRECA, CAPREDENA, que sirve para ser utilizada en el pago total o parcial en la compra de un servicio funerario. Debe ser afiliado, pasivo o activo, en las instituciones antes mencionadas.')); ?>

  <?php get_template_part('template-parts/two-cols-text', '', array('title' => '¿Cómo obtener el beneficio?', 'bajada' => 'Funeraria Azocar realiza la tramitación integral del beneficio. Requisitos para realizar el cobro de este beneficio :  Deber estar afiliado pasivo o activo, en las instituciones antes mencionadas.')); ?>

	<?php get_template_part('template-parts/service-list'); ?>

	<?php get_template_part('template-parts/contact-box'); ?>

	</main>

<?php get_footer(); ?>