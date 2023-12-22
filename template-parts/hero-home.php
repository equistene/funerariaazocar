<section class="hero-home my-5 md:my-10">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 items-center">
      <div class="col shadow-yellow">
        <img class="rounded-lg" src="<?php echo $args['imagen']; ?>" alt="">
      </div>
      <div class="col text-center">
        <h2 class="text-3xl md:text-5xl mb-1 md:mb-2 text-primary gotham-bold"><?php echo $args['title']; ?></h2>
        <div class="text-xl leading-5 md:max-w-[40ch] mx-auto"><?php echo $args['bajada']; ?></div>
        <a class="<?php echo $trackButton; ?>button-fa-primary max-w-[400px] mx-auto" href="<?php echo $args['botonLink']; ?>"><?php echo $args['botonTexto']; ?> →</a>
      </div>
    </div>
  </div>
</section>