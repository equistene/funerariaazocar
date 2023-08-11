<section class="hero-simple">
  <div class="container mx-auto py-10 pb-5 md:py-10">
    <?php if (isset($args['epigrafe'])): ?>
      <p class="text-sm uppercase font-semibold"><?php echo $args['epigrafe']; ?></p>
    <?php endif; ?>

    <h1 class="text-4xl md:text-5xl text-primary gotham-bold hyphens-auto"><?php the_title(); ?></h1>

    <p class="mt-1 text-xl"><?php echo $args['bajada']; ?></p>
  </div>
</section>