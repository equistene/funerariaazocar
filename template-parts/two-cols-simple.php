<section class="py-10">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 items-center relative ">
      <div class="col lg:sticky top-1">
        <img src="http://unsplash.it/800/600?gravity=center" class="rounded-lg alt="">
        
      </div>
      <div class="col text-center">
        <h2 class="title"><?php echo $args['title']; ?></h2>

        <?php echo $args['content']; ?>

        <a href="#" class="button-fa-primary mx-auto max-w-[400px]">Ver más</a>
      </div>
    </div>
  </div>
</section>