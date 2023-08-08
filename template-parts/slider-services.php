<section class="my-10 py-10 md:py-10 bg-slate-50 overflow-x-hidden">
  <div class="container mx-auto">
    <div class="intro-section text-center mb-2">
      <h2 class="title">¿En qué podemos ayudarte?</h2>
      <p>Contamos con una serie de Lorem ipsum dolor sit.</p>
    </div>

    <div class="slider-services pt-5 md:pt-5">
      <?php for ($i= 0 ;  $i < 2; $i++) : ?>
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

        <div class="card border border-blue-950 rounded-md overflow-hidden max-w-md border-slate-200">
          <a href="#" class="card-service">
            <div class="icon">
              <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#000000" d="M3 13a9 9 0 0 0 9 9a9 9 0 0 0-9-9m2.44 2.44c1.91.71 3.41 2.21 4.12 4.12a6.986 6.986 0 0 1-4.12-4.12M12 22a9 9 0 0 0 9-9a9 9 0 0 0-9 9m2.42-2.43a6.876 6.876 0 0 1 4.15-4.15a7.03 7.03 0 0 1-4.15 4.15M12 14a6 6 0 0 0 6-6V3a5.9 5.9 0 0 0-2.16.39c-.55.23-1.04.57-1.45 1L12 2L9.61 4.39c-.41-.43-.9-.77-1.45-1A5.9 5.9 0 0 0 6 3v5a6 6 0 0 0 6 6M8 5.61l1.57 1.65L12 4.83l2.43 2.43L16 5.61V8a4 4 0 0 1-4 4a4 4 0 0 1-4-4V5.61Z"/>
              </svg>
            </div>
            <p class="text-center leading-5">
              Quiero enviar unas flores
            </p>								
          </a>
        </div>

        <div class="card border border-blue-950 rounded-md overflow-hidden max-w-md border-slate-200">
          <a href="#" class="card-service">
            <div class="icon">
            <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 21v-2a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v2H5zm5-5v-5H6V7h4V3h4v4h4v4h-4v5"/>
            </svg>
            </div>
            <p class="text-center leading-5">
              Necesito contratar un funeral
            </p>								
          </a>
        </div>

        <div class="card border border-blue-950 rounded-md overflow-hidden max-w-md border-slate-200">
          <a href="#" class="card-service">
            <div class="icon">
            <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                      <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2c-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                      <path d="M12 5L9.04 7.96a2.17 2.17 0 0 0 0 3.08v0c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66M18 15l-2-2m-1 5l-2-2"/>
                  </g>
              </svg>
            </div>
            <p class="text-center leading-5">
              Busco apoyo para superar una pérdida
            </p>								
          </a>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>