
<?php do_action( 'tailpress_content_end' ); ?>
<?php do_action( 'tailpress_content_after' ); ?>

<dialog id="dialogo">
	<?php get_template_part('template-parts/modal-content'); ?>
  <button id="cerrar">Cerrar</button>
</dialog>

<a href="https://wa.me/+56993304778" target="_blank" class="fixed bottom-4 right-4 bg-[#25D366] w-12 h-12 rounded-full grid place-content-center shadow-md hover:bg-[#075E54] transition-all border-white border-2">
	<img src="<?php bloginfo('template_url'); ?>/images/whatsapp.svg" alt="whatsapp" class="w-6 h-6">
</a>

<footer class="text-[#444]">
	<div class="bg-gray-100">
		<div class="container mx-auto flex flex-col justify-between items-center gap-4 py-6">
			<div class="logo">
				<img src="<?php the_field('logo', 'option'); ?>" alt="Funeraria Azócar" class="w-auto max-h-12 md:max-h-20">
			</div>
			<div class="data flex-1 flex justify-between gap-4 items-start">
				<p class="font-semibold gotham-bold text-primary text-center"><?php the_field('direccion', 'option'); ?></p>
			</div>
		</div>
	</div>
	<div class="footer-bottom container mx-auto flex flex-wrap justify-center md:justify-between items-center gap-4 py-4 flex-col md:flex-row">		
		<div class="data flex-1 pb-1">
			<nav class="nav-footer">
				<?php wp_nav_menu( array( 'theme_location'=> 'footer' ) ); ?>
			</nav>
			<p class="pt-4 md:pt-2 text-xs font-semibold text-center md:text-left"><?php the_field('copyright', 'option'); ?></p>
		</div>
		<div class="sociales max-w-full md:max-w-max">
			<a target="_blank" href="<?php the_field('instagram', 'option'); ?>">
				<svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path fill="#FFFFFF" d="M13.028 2.001a78.82 78.82 0 0 1 2.189.022l.194.007c.224.008.445.018.712.03c1.064.05 1.79.218 2.427.465c.66.254 1.216.598 1.772 1.154a4.908 4.908 0 0 1 1.153 1.771c.247.637.415 1.364.465 2.428c.012.266.022.488.03.712l.006.194a79 79 0 0 1 .023 2.188l.001.746v1.31a78.836 78.836 0 0 1-.023 2.189l-.006.194c-.008.224-.018.445-.03.712c-.05 1.064-.22 1.79-.466 2.427a4.884 4.884 0 0 1-1.153 1.772a4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465c-.267.012-.488.022-.712.03l-.194.006a79 79 0 0 1-2.189.023l-.746.001h-1.309a78.836 78.836 0 0 1-2.189-.023l-.194-.006a60.64 60.64 0 0 1-.712-.03c-1.064-.05-1.79-.22-2.428-.466a4.89 4.89 0 0 1-1.771-1.153a4.904 4.904 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.427a74.367 74.367 0 0 1-.03-.712l-.005-.194A79.053 79.053 0 0 1 2 13.028v-2.056a78.82 78.82 0 0 1 .022-2.188l.007-.194c.008-.224.018-.446.03-.712c.05-1.065.218-1.79.465-2.428A4.88 4.88 0 0 1 3.68 3.68a4.897 4.897 0 0 1 1.77-1.155c.638-.247 1.363-.415 2.428-.465l.712-.03l.194-.005A79.053 79.053 0 0 1 10.972 2h2.056Zm-1.028 5A5 5 0 1 0 12 17a5 5 0 0 0 0-10Zm0 2A3 3 0 1 1 12.001 15a3 3 0 0 1 0-6Zm5.25-3.5a1.25 1.25 0 0 0 0 2.498a1.25 1.25 0 0 0 0-2.5Z"/>
				</svg>
			</a>

			<a target="_blank" href="<?php the_field('facebook', 'option'); ?>">
				<svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path fill="#FFFFFF" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/>
				</svg>
			</a>			
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
