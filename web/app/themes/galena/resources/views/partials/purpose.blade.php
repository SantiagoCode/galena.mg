<div id="porpuse" class="container _porpuse-container is-flex">

    <div class="columns is-multiline _ancester">

        {{-- columna de la izquierda - galena y Movidagrafica --}}
        <div class="column is-5 is-10-touch is-offset-1-touch">
            <div class="_mini-container" data-inertia data-inertia-reveal data-inertia-delay="400">
                <div class="titulo">
                    <span class="has-text-danger is-capitalized is-size-7">
                        {!!get_field('purpose_titulo_izq', 'options')!!}
                    </span>
                </div>
                <p class="has-text-light is-capitalized is-size-4 is-size-6-touch my-4">
                    {!!get_field('purpose_contenido_izq', 'options')!!}
                </p>
                <div>
                    @set($btn_link_left, get_field('purpose_btn_izq', 'options'))
                    <a href="{{$btn_link_left['url']}}" class="about is-flex is-align-items-center has-text-light" data-cursor-stick>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                        <span class="has-text-light is-capitalized is-size-7 mx-4">
                            {{$btn_link_left['title']}}
                        </span>
                    </a>
                </div>
            </div>
        </div>

        {{-- columna de la derecha - propositos y motivaciones --}}
        <div class="column is-5 is-10-touch is-offset-2 is-offset-1-touch is-flex is-align-items-end">
            <div class="_mini-container" data-inertia data-inertia-reveal data-inertia-delay="700">
                <div class="titulo">
                    <span class="has-text-danger is-capitalized is-size-7">
                        {!!get_field('purpose_titulo_derecha', 'options')!!}
                    </span>
                </div>
                <p class="has-text-light is-capitalized is-size-4 is-size-6-touch my-4">
                    <span class="_parrafo-B is-block">
                        {!!get_field('purpose_contenido_derecha_parrafo_1', 'options')!!}
                    </span>
                    <br>
                    <span class="_parrafo-B is-block">
                        {!!get_field('purpose_contenido_derecha_parrafo_2', 'options')!!}
                    </span>
                </p>
                @set($btn_link_right, get_field('purpose_btn_izq', 'options'))
                <a href="{{$btn_link_right['url']}}" class="about is-flex is-align-items-center has-text-light" data-cursor-stick>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                    <span class="has-text-light is-capitalized is-size-7 mx-4">
                        {{$btn_link_right['title']}}
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>