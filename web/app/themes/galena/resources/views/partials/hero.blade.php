<div data-cursor="-inverse" class="hero is-fullheight is-clipped is-relative">
    {{-- CONTAINER PARA GALENA E IMG DE GALENA --}}
    <div class="_container-galena" data-inertia data-inertia-speed="-4">
      <img src="{!!get_field('foto_de_galena', 'options')!!}" alt="Galena AI" data-inertia data-inertia-reveal="1200" data-cursor="-flare"> 
    </div>
    
    {{-- EFECTO DE SOMBRA INFERIOR PARA COMPLEMENTAR LA SECCION 2 --}}
    <div class="_sombra-inferior"></div>

    {{-- FONDO EN GRADIENTE --}}
    <div class="_galena-gradient hero-body">



      <div class="_sobre-galena is-vcentered is-full has-margin-bottom-60">
        <div class="_caja-1">
          <div class="has-padding-right-60" data-inertia  data-inertia-speed="-3">
  
            {{-- MEET GALENA --}}
            <p class="_is-size-extra-large has-text-right has-text-left-touch is-capitalized has-text-weight-bold has-margin-right-50" data-inertia data-inertia-reveal="600">
              <span class="_texto-degradado is-block">
                {!!get_field('conoce_a_galena_a', 'options')!!}
              </span>
              <span class="_texto-degradado is-block _reduccion-entre-lineas">
                {!!get_field('conoce_a_galena_b', 'options')!!}
              </span>
            </p>
          </div>
        </div>

        {{-- BOTON DE SALTO HACIA PURPOSE --}}
        <a href="#purpose" class="_boton-purpose is-hidden-touch sr-only sr-only-focusable" data-gravity data-cursor-stick data-inertia-to>
          <svg class="_hover-transform" xmlns="http://www.w3.org/2000/svg" width="10vh" height="10vh" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="0.5px" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle">
            <circle cx="12" cy="12" r="10"></circle>
            <polyline points="8 12 12 16 16 12"></polyline>
            <line x1="12" y1="8" x2="12" y2="16"></line>
          </svg>
        </a>
        
        {{-- QUIEN ES GALENA? --}} 
        <div class="_caja-2"  data-inertia  data-inertia-speed="-3">
          <p class="has-text-white" data-inertia data-inertia-reveal="900">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
            <span class="is-size-5-fullhd has-text-left is-block">
              {!!get_field('quien_es_galena', 'options')!!}
            </span>
          </p>
        </div>
      </div>
    </div>
</div>
