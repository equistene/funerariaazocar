<section class="hero-simple bg-image">
  <div class="container mx-auto py-10 pb-5 md:py-14">
    <?php if (isset($args['epigrafe'])): ?>
      <p class="text-sm uppercase font-semibold"><?php echo $args['epigrafe']; ?></p>
    <?php endif; ?>

    <h1 class="text-4xl md:text-5xl text-primary gotham-bold hyphens-auto"><?php the_title(); ?></h1>

    <?php if (isset($args['bajada'])): ?>
    <p class="mt-1 text-xl max-w-[90ch]"><?php echo $args['bajada']; ?></p>
    <?php endif; ?>
  </div>

  <?php if (isset($args['background'])): ?>
    <div class="bg">
      <img src="<?php echo $args['background']; ?>" alt="">
    </div>
  <?php endif; ?>
</section>