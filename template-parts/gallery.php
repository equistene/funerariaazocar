<section class="gallery">
  <div class="container mx-auto py-10">
    <h2 class="title">Galería</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa saepe consequuntur architecto?</p>
  </div>

  <div class="gallery-slider js-gallery">
    <?php for ($imagen=0; $imagen < 10; $imagen++): ?>
      <div class="item">
        <img class="rounded-md w-screen md:w-full h-auto" src="http://unsplash.it/800/600" alt="">
      </div>
    <?php endfor; ?>
  </div>
</section>