<?php get_header(); ?>

	<main>

		<section class="my-10">
			<div class="container mx-auto">
				<div class="grid grid-cols-2 gap-10 items-center">
					<div class="col">
						<img class="rounded-md" src="https://funerariaazocar.cl/wp-content/uploads/2017/12/banner-2.jpg" alt="">
					</div>
					<div class="col">
						<h2 class="text-5xl mb-4">Estamos para <strong>ayudarte</strong></h2>
						<p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, corporis alias. Corrupti.</p>
						<a class="border rounded-xl p-4 table mt-4" href="#">Conoce nuestros servicios</a>
					</div>
				</div>
			</div>
		</section>

		<section class="my-10 py-10 bg-slate-100">
			<div class="container mx-auto">
				<h2 class="text-2xl font-semibold mb-4">¿En qué podemos ayudarte?</h2>

				<div class="grid grid-cols-5 gap-4">
					<?php for ($i= 0 ;  $i < 5; $i++) : ?>
						<div class="card border border-blue-950 rounded-md overflow-hidden">
							<a href="#" class="flex flex-col p-4 justify-center items-center gap-4 bg-white hover:bg-slate-200 transition-all">
								<div class="icon">
									<svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="aspect-auto h-10 w-auto">
											<path fill="#000000" d="M10.5 2h3v6H19v3h-5.5v11h-3V11H5V8h5.5V2Z"/>
									</svg>
								</div>
								<p class="text-center">Necesito saber donde será el entierro</p>								
							</a>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</section>

		

	</main>

<?php get_footer(); ?>
