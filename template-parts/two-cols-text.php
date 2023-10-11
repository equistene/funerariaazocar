<section class="py-20">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">
      <div>
        <?php if (isset($args['title'])): ?>
          <h2 class="title"><?php echo $args['title']; ?></h2>        
        <?php endif; ?>        
      </div>
      <div>
        <?php if (isset($args['bajada'])): ?> 
          <p><?php echo $args['bajada']; ?></p>        
        <?php endif; ?>                
      </div>
    </div>
  </div>
</section>