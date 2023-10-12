<h3><?php the_field('titulo_interior', 'option'); ?></h3>

<?php if( have_rows('contacto', 'option') ): ?>
    <?php while( have_rows('contacto', 'option') ): the_row(); ?>
    <div class="box">
      <h4><?php the_sub_field('titulo'); ?></h4>
      <p><?php the_sub_field('bajada'); ?></p>
      <a href="<?php the_sub_field('enlace_boton'); ?>">
        <img class="icono" src="<?php the_sub_field('icono') ?>" alt="icono" />
        <?php the_sub_field('texto_boton'); ?>
      </a>
    </div>	
    <?php endwhile; ?>    
<?php endif; ?>