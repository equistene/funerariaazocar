<section class="py-5">
  <div class="container mx-auto">    
    <h2 class="title"><?php echo $args['title']; ?></h2>
    <div class="bajada">
      <?php echo $args['content']; ?>
    </div>

    <div id="accordion" class="accordion">
    <?php if( have_rows('acordeon') ): ?>
        <?php while( have_rows('acordeon') ): the_row(); 
          $title = get_sub_field('titulo');
          $content = get_sub_field('contenido');
          ?>
          <h3 class="title-accordion"><?php echo $title; ?></h3>
          <div class="content-accordion">
            <p><?php echo $content; ?> </p>
          </div>            
        <?php endwhile; ?>          
      <?php endif; ?>                  
    </div>

  </div>
</section>