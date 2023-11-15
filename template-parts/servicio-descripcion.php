<section class="py-10">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 relative">
        <div class="col col-span-1 md:col-span-1">
            <div class="md:sticky md:top-40">
                <h2 class="text-blue text-2xl font-bold"><?php echo $args['name']; ?></h2>
                <h3 class="text-lg"><?php echo $args['description']; ?></h3>
                <h4 class="font-bold"><?php echo $args['price']; ?></h4>

                <!-- <img class="rounded-lg mt-4 w-full h-auto" src="<?php echo $args['image']; ?>" alt="<?php echo $args['name']; ?>"> -->

                <div class="js-gallery-model">
                <?php if( have_rows('modelos') ): ?>
                    <?php while( have_rows('modelos') ): the_row(); ?>
                        <div>
                            <img class="rounded-lg mt-4 w-full h-auto" src="<?php the_sub_field('imagen'); ?>" alt="Imagen">
                            <p><?php the_sub_field('nombre'); ?></p>
                        </div>                        
                    <?php endwhile; ?>          
                <?php endif; ?>    
                </div>
            </div>            
        </div>      
        <div class="col col-span-1 md:col-span-1 md:pt-8">
            <p class="font-bold">Este servicio incluye: </p>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 my-2 list-features">
                <?php if( have_rows('caracteristicas') ): ?>
                    <?php while( have_rows('caracteristicas') ): the_row(); ?>
                        <li><?php the_sub_field('caracteristica'); ?></li>
                    <?php endwhile; ?>          
                <?php endif; ?>                            
            </ul>
        </div>
    </div>
  </div>
</section>