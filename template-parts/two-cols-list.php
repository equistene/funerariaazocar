<section class="py-10">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">
      <div class="col">

        <?php if (isset($args['gallery'])): ?>
          <div class="gallery-small js-gallery-small">
            <?php for ($gallerySmall = 0; $gallerySmall < 3; $gallerySmall++): ?>
              <div class="item">
                <img src="http://unsplash.it/800/400?gravity=center" alt="Imagen" loading="lazy">
              </div>
            <?php endfor; ?>
          </div>
        <?php else: ?>
          <img src="http://unsplash.it/800/400?gravity=center" class="max-w-full h-auto rounded-lg" alt="">
        <?php endif; ?>        
        
      </div>
      <div class="col">
        <?php if (isset($args['title'])): ?>
          <h2 class="title"><?php echo $args['title']; ?></h2>
        <?php else: ?>
          <h2 class="title">Título de la sección</h2>
        <?php endif; ?>

        <?php if (isset($args['bajada'])): ?>
          <p><?php echo $args['bajada']; ?></p>
        <?php else: ?>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dicta ipsa magni.</p>

          <ul class="py-10 [&>li]:mb-2 [&>li]:list-disc ml-4">
            <li>Lorem ipsum dolor sit.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li>Lorem ipsum dolor sit amet consectetur.</li>
            <li>Accusantium nobis molestiae temporibus fuga natus saepe consectetur praesentium</li>
          </ul>
        <?php endif; ?>            
      </div>
    </div>
  </div>
</section>