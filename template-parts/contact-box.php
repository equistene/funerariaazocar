<section class="py-20">
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
                <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#000000" d="M19.95 21q-3.125 0-6.175-1.363t-5.55-3.862q-2.5-2.5-3.862-5.55T3 4.05q0-.45.3-.75t.75-.3H8.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T9.4 8.45L6.975 10.9q.5.925 1.187 1.787t1.513 1.663q.775.775 1.625 1.438T13.1 17l2.35-2.35q.225-.225.588-.338t.712-.062l3.45.7q.35.1.575.363T21 15.9v4.05q0 .45-.3.75t-.75.3Z"/>
                </svg>
              </div>
              <p><?php the_sub_field('titulo'); ?></p>

              <a href="<?php the_sub_field('boton_enlace') ;?>" class="button-fa-primary"><?php the_sub_field('boton_texto') ;?></a>
            </div>
        <?php endwhile; ?>        
    <?php endif; ?>
    </div>
  </div>
</section>