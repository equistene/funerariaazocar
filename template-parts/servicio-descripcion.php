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
                            <p class="bg-primary text-white px-4 py-2 rounded-full -translate-y-4 ml-2 table w-max"><?php the_sub_field('nombre'); ?></p>
                        </div>                        
                    <?php endwhile; ?>          
                <?php endif; ?>    
                </div>
                <div class="js-gallery-model-thumbnails mt-4">
                <?php if( have_rows('modelos') ): ?>
                    <?php while( have_rows('modelos') ): the_row(); ?>
                        <img class="rounded-lg aspect-square object-cover mt-4 w-12 h-auto" src="<?php the_sub_field('imagen'); ?>" alt="Imagen">                            
                    <?php endwhile; ?>          
                <?php endif; ?>    
                </div>
            </div>            
        </div>      
        <div class="col col-span-1 md:col-span-1 md:pt-8">
            <p class="font-bold"><?php the_sub_field('titulo_caracteristica'); ?></p>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2 list-features">
                <?php if( have_rows('caracteristicas') ): ?>
                    <?php while( have_rows('caracteristicas') ): the_row(); ?>
                        <li><?php the_sub_field('caracteristica'); ?></li>
                    <?php endwhile; ?>          
                <?php endif; ?>                            
            </ul>

            <?php if( have_rows('grupo_caracteristicas') ): ?>
                <?php while( have_rows('grupo_caracteristicas') ): the_row(); ?>
                    <div class="block mb-8">
                        <p class="font-bold"><?php the_sub_field('titulo'); ?></p>
                        <?php if( have_rows('caracteristicas') ): ?>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2 list-features">
                            <?php while( have_rows('caracteristicas') ): the_row(); ?>
                                <li><?php the_sub_field('caracteristica'); ?></li>
                            <?php endwhile; ?>          
                            </ul>
                        <?php endif; ?>
                    </div>                    
                <?php endwhile; ?>          
            <?php endif; ?>

        </div>
    </div>
  </div>
</section>