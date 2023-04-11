<div class="" style="overflow: hidden; height: 100vh">

    <div class="_galena2-background is-clipped">
        <img src="{!!get_field('another_image', 'options')!!}" class="is-full-width is-block" alt="img">
    </div>

    <div class="container is-fullhd is-flex is-full-height">
        <div class="columns is-flex is-align-items-end p-6">
            <div class="_gallery column is-1 is-offset-1">
                <a href="#" class="_gallery is-capitalized has-text-light _hover-transform">
                    {!!get_field('another_image_titulo_de_gallery', 'options')!!}
                </a>
            </div>
        
            {{-- ADRIAN 2023 --}}
            <div class="_simonbolivar-2023 column is-3 is-6-touch is-offset-6 is-offset-4-touch" data-inertia data-inertia-reveal="600">
                <div class="_mini-container mb-6">
                    <p class="_frase has-text-light is-capitalized is-size-3 is-size-6-touch mb-3 p-0">
                        {!!get_field('another_image_frase', 'options')!!}
                    </p>
                    <p class="about is-flex has-text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                        <span class="mx-3">
                            <span class="has-text-light is-capitalized is-size-7 has-text-weight-bold is-block">
                                {!!get_field('another_image_autor', 'options')!!}
                            </span>
                            <span class="has-text-light is-capitalized is-size-7">
                                {!!get_field('another_image_puesto_del_autor', 'options')!!}
                            </span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>