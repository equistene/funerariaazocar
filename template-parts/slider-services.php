<section class="my-10 py-10 md:py-10 bg-slate-50 overflow-x-hidden">
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
              ?>
              <div class="card border hover:border-blue-950 rounded-md overflow-hidden max-w-md border-slate-200">                
                <a href="<?php echo $link ?>" class="card-service">
                  <div class="icon">
                    <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="aspect-auto h-10 w-auto">
                        <path fill="#000000" d="M10.5 2h3v6H19v3h-5.5v11h-3V11H5V8h5.5V2Z"/>
                    </svg>
                  </div>
                  <p class="text-center leading-5"><?php echo $title ?></p>								
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
  </div>
</section>