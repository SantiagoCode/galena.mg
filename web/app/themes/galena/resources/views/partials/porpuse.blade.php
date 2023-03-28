<body>
    <div id="porpuse" class="container _porpuse-container is-flex">

        {{-- hay que hacerle un @mediaquery para el touch y poner height: 100vh; display: flex; align-items: center; --}}
        <div class="columns is-multiline _ancester">

            {{-- columna de la izquierda - galena y Movidagrafica --}}
            <div class="column is-5 is-10-touch is-offset-1-touch">
                <div class="_mini-container" data-inertia data-inertia-reveal data-inertia-delay="600">
                    <div class="titulo">
                        <span class="has-text-danger is-capitalized is-size-7">
                            galena
                        </span>
                    </div>
                    <p class="has-text-light is-capitalized is-size-4 is-size-6-touch my-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem error id voluptatem consequuntur blanditiis odio minus eos.
                    </p>
                    <a class="about is-flex is-align-items-center has-text-light" data-gravity data-cursor-stick>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                        <span class="has-text-light is-capitalized is-size-7 mx-4">about the company</span>
                    </a>
                </div>
            </div>

            {{-- columna de la derecha - propositos y motivaciones --}}
            <div class="column is-5 is-10-touch is-offset-2 is-offset-1-touch is-flex is-align-items-end">
                <div class="_mini-container" data-inertia data-inertia-reveal data-inertia-delay="900">
                    <div class="titulo">
                        <span class="has-text-danger is-capitalized is-size-7">
                            galena
                        </span>
                    </div>
                    <p class="has-text-light is-capitalized is-size-4 is-size-6-touch my-4">
                        <span class="_parrafo-B is-block">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem error id voluptatem consequuntur blanditiis odio minus eos commodi.
                        </span>
                        <br>
                        <span class="_parrafo-B is-block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat et totam pariatur, dolorem explicabo sit ducimus? Deleniti, perspiciatis quasi earum quidem eum nobis.
                        </span>
                    </p>
                    <a class="about is-flex is-align-items-center has-text-light" data-gravity data-cursor-stick>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                        <span class="has-text-light is-capitalized is-size-7 mx-4">about the company</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>