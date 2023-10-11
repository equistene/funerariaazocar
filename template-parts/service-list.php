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
            <div class="ico">
              <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#000000" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4L9.55 18Z"/>
              </svg>
            </div>
            <p><?php echo $servicio; ?></p>        
          </li>      
        <?php endwhile; ?>          
      <?php endif; ?>
      
    </ul>
  
  </div>
</section>