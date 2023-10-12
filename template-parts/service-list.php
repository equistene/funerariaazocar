<section class="service-list">
  <div class="container mx-auto py-10">
    <?php if (isset($args['title'])): ?>
      <h2 class="title"><?php echo $args['title']; ?></h2>    
    <?php endif; ?>    

    <?php if (isset($args['content'])): ?>
      <p><?php echo $args['content']; ?></p>          
    <?php endif; ?>    
    

    
    <ul class="list-servicio">      
      <?php if( have_rows('lista') ): ?>
        <?php while( have_rows('lista') ): the_row(); 
          $icono = get_sub_field('icono');
          $servicio = get_sub_field('servicio');          
          ?>
          <li>
            <div class="ico"><?php echo $icono; ?></div>
            <p><?php echo $servicio; ?></p>        
          </li>      
        <?php endwhile; ?>          
      <?php endif; ?>
      
    </ul>
  
  </div>
</section>