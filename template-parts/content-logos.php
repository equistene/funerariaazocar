<section class="py-10 md:py-20">
  <div class="container mx-auto">
    <div class="intro-section text-center max-w-[90ch] mx-auto">
      <h2 class="title"><?php echo $args['title']; ?></h2>
      <?php echo $args['content']; ?>
      
      <?php if( have_rows('logos') ): ?>
          <ul class="logos flex justify-center gap-8 flex-wrap">
          <?php while( have_rows('logos') ): the_row(); 
              $image = get_sub_field('imagen');
              ?>
              <li class="min-w-[200px]">
                  <img src="<?php echo $image; ?>" />
              </li>
          <?php endwhile; ?>
          </ul>
      <?php endif; ?>
    </div>    
  </div>
</section>