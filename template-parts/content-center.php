<section class="py-10 md:py-20">
  <div class="container mx-auto">
    <div class="intro-section text-left md:text-center max-w-[90ch] mx-auto">
      <h2 class="title"><?php echo $args['title']; ?></h2>
      <?php echo $args['content']; ?>

      <?php if (isset($args['video'])): ?>
      <div class="video-frame empty:hidden"><?php echo $args['video']; ?></div>
      <?php endif; ?>

      <?php if (isset($args['image'])): ?>
        <div class="video-frame empty:hidden"><div class="shadow-yellow rounded-lg"><img src="<?php echo $args['image']; ?>" class="rounded-lg" /></div></div>
      <?php endif; ?>
    </div>    
  </div>
</section>