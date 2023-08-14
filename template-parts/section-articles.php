<section class="services-section">
  <div class="container mx-auto py-10">
    <h2 class="title">Artículos</h2>
    <p>Sabemos lo díficil que es Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, sint? Commodi voluptatem, voluptas aliquam velit odit dolor officiis ipsam eum earum perferendis delectus.</p>

    <div class="services-list-wrapper grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-8">
      <?php for ($services=0; $services < 5; $services++): ?>
        <div class="service-row">
          <div class="thumb">
            <img class="rounded-md" src="http://unsplash.it/400/250?gravity=center" alt="">
          </div>
          <div class="data py-4 px-1">
            <h3 class="font-bold text-lg text-primary">¿Qué hacer en el duelo?</h3>
            <p>Nuestra versión Lorem ipsum dolor sit amet.</p>
            <a href="#" class="button-fa-primary mx-auto max-w-[400px]">Leer más</a>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>