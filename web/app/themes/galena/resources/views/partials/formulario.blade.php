<div class="is-flex is-align-items-center" data-newsletter>
    <div style="background: radial-gradient(circle, #382515 -70%, transparent 40%); opacity: 0.9; width: 100%; height: 100%; position: absolute;"></div>
    
    <form id="newsletterForm" class="formularie">  
        <h2 class="subtitle is-uppercase has-text-centered">Subscribe!!</h2>
        
        
        {{-- campo nombre --}}
        <div class="field has-padding-left-60 has-padding-right-60">
            <label class="label has-text-light" for="name">Name</label>
            <div class="control has-icons-left">
                <input id="name" class="input" type="text" name="name" placeholder="Text input" value="Tiago">
                <span class="icon is-small is-left">
                    <i class="icon has-text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </i>
                </span>
            </div>
        </div>
        
        {{-- campo email --}}
        <div class="field has-padding-left-60 has-padding-right-60">
            <label class="label has-text-light" for="email">Email</label>
            <div class="control has-icons-left">
                <input id="email" class="input" type="email" name="email" placeholder="Email input" value="santiago@gmail.com">
                <span class="icon is-small is-left">
                    <i class="icon has-text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </i>
                </span>
            </div>
        </div>
    
        {{-- action --}}
        <input type="hidden" name="action" value="procesar_formulario">
    
    
        <div class="field is-grouped _boton-group justify-center has-margin-top-20">
            {{-- btn registrar --}}
            <div class="control" data-gravity data-cursor-stick>
                <button class="button btnSubmit is-primary is-hovered" type="submit" data-post_id="">Register</button>
            </div>
            
            {{-- btn cancelar registro --}}
            <div class="control" data-gravity data-cursor-stick>
                <button class="button is-danger is-light is-hovered" data-newsletter-desappear>Cancel</button>
            </div>
        </div>
    </form>
</div>