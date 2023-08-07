<section class="my-10 py-10 md:py-20 bg-slate-100 overflow-x-hidden">
  <div class="container mx-auto">
    <h2 class="title mb-4 text-center">¿En qué podemos ayudarte?</h2>

    <div class="slider-services pt-5 md:pt-10">
      <?php for ($i= 0 ;  $i < 9; $i++) : ?>
        <div class="card border border-blue-950 rounded-md overflow-hidden max-w-md border-slate-200">
          <a href="#" class="card-service">
            <div class="icon">
              <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="aspect-auto h-10 w-auto">
                  <path fill="#000000" d="M10.5 2h3v6H19v3h-5.5v11h-3V11H5V8h5.5V2Z"/>
              </svg>
            </div>
            <p class="text-center leading-5">Necesito saber donde será el entierro</p>								
          </a>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>