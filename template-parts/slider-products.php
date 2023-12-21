<section class="py-10 md:py-10 bg-slate-50 overflow-x-hidden">
  <div class="container mx-auto">
    <div class="intro-section text-center mb-2">
      <h2 class="title"><?php echo $args['title']; ?></h2>
      <p><?php echo $args['bajada']; ?></p>
    </div>

    <div class="slider-services pt-5 md:pt-5">
      <?php if( have_rows('servicios') ): ?>
          <?php while( have_rows('servicios') ): the_row(); 
              $title = get_sub_field('titulo');
              $link = get_sub_field('enlace');
              $description = get_sub_field('descripcion');
              $icon = get_sub_field('icono');
              ?>
              <div class="card border hover:border-blue-950 rounded-md overflow-hidden max-w-md border-slate-200">                
                <a href="<?php echo $link ?>" class="card-service">                  
                  <img src="<?php echo $icon; ?>" alt="<?php echo $title; ?>" class="h-12 w-auto object-contain">
                  <h2><?php echo $title; ?></h2>                  
                </a>
              </div>
          <?php endwhile; ?>          
      <?php endif; ?>
    </div>

    <div class="custom-arrows">
      <div class="arrow arrow-prev">
        <img src="<?php bloginfo('template_url'); ?>/images/caret-left.svg">
      </div>
      <div class="slider-dots"></div>
      <div class="arrow arrow-next">
        <img src="<?php bloginfo('template_url'); ?>/images/caret-right.svg">
      </div>
    </div>

    <div class="intro-section text-center mt-8">
      <?php echo $args['adicional']; ?>
    </div>
  </div>
</section>