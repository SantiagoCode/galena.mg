<footer class="hero is-dark is-medium">
  <div class="is-flex is-align-items-center" data-newsletter>
  
    <div style="background: radial-gradient(circle, #382515 -70%, transparent 40%); opacity: 0.9; width: 100%; height: 100%; position: absolute;"></div>
    
    <form id="newsletterForm" class="formularie p-6" action="">
      <div class="field">
        <h2 class="subtitle is-uppercase has-text-centered">Subscribe!!</h2>

        <label class="label has-text-light" for="name">Name</label>
        <div class="control has-icons-left">
          <input id="name" class="input" type="text" name="name" placeholder="Text input" value="">
          <span class="icon is-small is-left">
            <i class="icon has-text-black">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            </i>
          </span>
        </div>
      </div>
      
      <div class="field">
        <label class="label has-text-light" for="email">Email</label>
        <div class="control has-icons-left">
          <input id="email" class="input" type="email" name="email" placeholder="Email input" value="">
          <span class="icon is-small is-left">
            <i class="icon has-text-black">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </i>
          </span>
        </div>
      </div>
      
      <input type="hidden" name="action" value="procesar_formulario">

      <div class="field is-grouped justify-center mt-5">
        <div class="control">
          <button class="button btnSubmit is-primary is-hovered" type="submit" data-post_id="" data-gravity data-cursor-stick>Register</button>
        </div>
        <div class="control">
          <button class="button is-danger is-light is-hovered" data-gravity data-cursor-stick data-newsletter-desappear>Cancel</button>
        </div>
      </div>
    </form>
  </div>
  <div class="hero-body">
    <div class="container is-fullhd">
      <div class="_header-footer columns align-items-center is-centered mx-auto pb-6 mb-6">

        @set($btn_mg_company, get_field('mg_company_link', 'options'))
        <a href="{{$btn_mg_company['url']}}" class="column p-0 has-text-centered" data-gravity data-cursor-stick>
          <img src="{!!get_field('mg_company', 'options')!!}" alt="MG_Company">
        </a>
        <div class="column is-3 is-offset-1">
          @set($newsletter_link, get_field('newsletter_link', 'options'))
          <div href="" class="about is-flex is-align-items-center has-text-light justify-center" data-gravity data-cursor-text="Subscribe" data-newsletter-appear>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                  <circle cx="12" cy="12" r="10"></circle>
              </svg>
              <span class="has-text-light is-size-6 mx-4">
                {{$newsletter_link['title']}}
              </span>
            </div>
        </div>


        <div class="columns column is-5 is-offset-1">
          <div class="column hast-text-light">
            @set($terms_and_conditions, get_field('terms_and_conditions', 'options'))
            <a href="{{$terms_and_conditions['url']}}" class="is-flex justify-right justify-center-touch" data-gravity data-cursor-text="Terms and Conditions">
              {{$terms_and_conditions['title']}}
            </a>
          </div>
          <div class="column hast-text-light">
            @set($privacy_policy, get_field('privacy_policy', 'options'))
            <a href="{{$privacy_policy['url']}}" class="is-flex justify-right justify-center-touch" data-gravity data-cursor-text="Privacy Policy">
              {{$privacy_policy['title']}}
            </a>
          </div>
          <div class="column hast-text-light">
            <span href="" class="is-flex justify-right justify-center-touch" data-gravity>
              {!!get_field('year', 'options')!!}
            </span>
          </div>
        </div>
      </div>
  
      {{-- premios --}}
      <div class="columns is-multiline is-mobile is-centered px-6 mx-6">
        @fields('footer_premios', 'options')
        <a href="" class="column is-6 is-2-widescreen _premios p-0">
          <img src="@sub('img')" class="is-block m-auto" alt="guru">
        </a>
        @endfields
      </div>
    </div>
  </div>
</footer>
