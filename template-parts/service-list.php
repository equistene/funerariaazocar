<section class="service-list">
  <div class="container mx-auto py-10">
    <?php if (isset($args['title'])): ?>
      <h2 class="title"><?php echo $args['title']; ?></h2>
    <?php else: ?>
      <h2 class="title">Nuestro servicio incluye</h2> 
    <?php endif; ?>    

    <?php if (isset($args['title'])): ?>
      <p><?php echo $args['bajada']; ?></p>          
    <?php endif; ?>    
    

    
    <ul class="list-servicio">
      <?php for ($list=0; $list < 10; $list++): ?>
        <li>
        <div class="ico">
          <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#000000" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4L9.55 18Z"/>
          </svg>
        </div>
        <p>Servicio de traslado</p>        
      </li>      
      <?php endfor; ?>
      
    </ul>
  
  </div>
</section>