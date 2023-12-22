<section class="py-10">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6 place-items-center">
      <div class="box">
        <h2 class="title gotham-bold"><?php the_field('titulo', 'option'); ?></h2>
        <p><?php the_field('bajada', 'option'); ?></p>
      </div>

      <?php if( have_rows('bloques_contacto', 'option') ): ?>        
        <?php while( have_rows('bloques_contacto', 'option') ): the_row(); ?>
            <div class="box box-content">
              <div class="icon">
                <img src="<?php the_sub_field('icono') ; ?>" alt="Icono">
              </div>
              <p><?php the_sub_field('titulo'); ?></p>

              <a 
                href="<?php the_sub_field('boton_enlace') ;?>" 
                class="button-fa-primary <?php the_sub_field('track-link'); ?>" 
                onclick="ga('send', 'event', 'Enlaces', 'Click', '<?php the_sub_field('nombre_evento') ?>'); return true;">
                  <?php the_sub_field('boton_texto') ;?>
                </a>
            </div>
        <?php endwhile; ?>        
    <?php endif; ?>
    </div>
  </div>
</section>