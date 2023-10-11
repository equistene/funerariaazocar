<section class="contact-form">
  <div class="container mx-auto py-5 md:py-20 grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 relative">
    <div class="col md:sticky md:top-32 md:h-max">
      <h2 class="title"><?php echo $args['title']; ?></h2>
      <p><?php echo $args['content']; ?></p>
    </div>
    <div class="col">
      <?php echo do_shortcode($args['formulario']); ?>
    </div>
  </div>
</section>