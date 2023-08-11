<section class="py-10 md:py-20 <?php echo $args['bg'] ?>">
  <div class="container mx-auto">
    <div class="intro-section text-center max-w-[90ch] mx-auto">
      <h2 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex hic quisquam explicabo in aliquam nesciunt culpa corporis harum delectus fugiat eveniet tempora commodi veritatis assumenda nemo aperiam a quaerat, officia consequuntur accusantium?</p>

      <?php if (isset($args['video'])): ?>
      <div class="video-frame">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Z_ZdVCXcW_o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <?php endif; ?>
    </div>    
  </div>
</section>