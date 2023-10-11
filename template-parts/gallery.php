<section class="gallery">
  <div class="container mx-auto py-10">
    <h2 class="title"><?php echo $args['title']; ?></h2>
    <p><?php echo $args['content']; ?></p>
  </div>

  <div class="gallery-slider js-gallery">    
    <?php if( have_rows('galeria') ): ?>
        <?php while( have_rows('galeria') ): the_row(); 
          $imagen = get_sub_field('imagen');          
          ?>
          <div class="item">
            <img class="rounded-md w-screen md:w-auto h-auto md:max-h-96 max-w-xl aspect-video object-cover" src="<?php echo $imagen; ?>" alt="">
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
</section>