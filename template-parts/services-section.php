<section class="services-section">
  <div class="container mx-auto py-10">
    <h2 class="title">Lorem ipsum dolor sit.</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis optio quasi quis repellendus, eum ipsum libero magnam quo et mollitia ratione reiciendis veritatis ducimus.</p>

    <div class="services-list-wrapper grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-8">
      <?php for ($services=0; $services < 5; $services++): ?>
        <div class="service-row">
          <div class="thumb">
            <img class="rounded-md" src="http://unsplash.it/400/250?gravity=center" alt="">
          </div>
          <div class="data py-4">
            <h3 class="font-bold text-lg text-primary">Memorial</h3>
            <p>Nuestra versión Lorem ipsum dolor sit amet.</p>
            <a href="#" class="button-fa-primary mx-auto max-w-[400px]">Ver detalles</a>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>