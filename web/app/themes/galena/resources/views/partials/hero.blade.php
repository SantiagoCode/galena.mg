<div data-cursor="-inverse" class="hero is-parallax-video is-fullheight">

    {{-- CONTAINER PARA GALENA E IMG DE GALENA --}}
    <div style="
      position: absolute;
      display: block;
      width: 100vw;
      height: 100vh;
      min-width: 768px;">
    
      <img src="@asset('images/galena_img.png')" alt="Galena AI" style="
        position: relative;
        display: block;
        margin: 0 auto;
        height: 100vh;">
    
    </div>

    {{-- EFECTO DE SOMBRA INFERIOR PARA COMPLEMENTAR LA SECCION 2 --}}
    <div class="sombra_inferior" style="
        width: 100vw;
        height: 60px;
        position: absolute;
        bottom: 0;
        background: linear-gradient(0deg, #0e0f13 10%, rgba(0,0,0,0) 98%);">
    </div>

    {{-- FONDO EN GRADIENTE --}}
    <div class="_galena-gradient hero-body columns mb-0">

      <div class="column columns is-vcentered is-full" style="
        margin-top: auto;
        margin-bottom: 5%;">

        {{-- aqui va un z-index: 9; para pantallas touch --}}
        <div class="column is-5">

          {{-- MEET GALENA --}}
          {{-- debo aumentar el tamaño al el doble al menos --}}
          <p class="_is-size-extra-large has-text-right has-text-left-touch is-capitalized has-text-weight-bold">
            <span class="_texto-degradado is-block">meet</span>
            <span class="_texto-degradado is-block">galena</span>
          </p>
          <a href="#porpuse" class="_btn" style="
            color: #ffffff;
            float: right;
            position: relative;">
            <svg xmlns="http://www.w3.org/2000/svg" width="90px" height="90px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5px" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle">
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="8 12 12 16 16 12"></polyline>
              <line x1="12" y1="8" x2="12" y2="16"></line>
            </svg>
          </a>
        </div>

        {{-- QUIEN ES GALENA? --}}
        <div class="column is-2 is-offset-3 has-text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
          <span class="is-size-7 has-text-left is-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex facere sapiente.</span>
        </div>
      </div>








          {{-- <div class="columns">
            <div class="column is-4">
              <h1 class="title is-1">
                <div data-inertia data-inertia-reveal data-inertia-delay="600">Bienvenido a</div>
                <div data-inertia data-inertia-reveal data-inertia-delay="900">Movidagrafica</div></span>
              </h1>
              <p data-inertia data-inertia-reveal data-inertia-delay="1200" class="subtitle has-margin-top-20 has-margin-bottom-20">
                Aquí es donde las cosas magnificas empiezan a pasar. <b>¡Acompañanos en el viaje!</b>
              </p>
              <div class="buttons">
                <a href="" data-gravity data-cursor-stick data-cursor="-menu" class="button is-primary is-large has-padding-20"><span class="icon is-large"><i data-feather="user"></i></span></a>
                <a href="" data-gravity data-cursor-text="😈" class="button is-primary is-large has-padding-20">Inicia ahora</a>
                <a href="" data-gravity data-cursor-video="@asset('images/3263666610.mp4')" data-cursor-text="Esto es un Video" class="button is-large has-padding-20 is-white is-outlined">Quiero ver más</a>
                <a href="" data-gravity data-cursor-img="@asset('images/2471234.jpg')" data-cursor-text="Esto es una Imágen" class="button is-large has-padding-20 is-primary is-inverted">¿Quienes son ustedes?</a>
              </div>
            </div> --}}
          
    </div>
</div>
