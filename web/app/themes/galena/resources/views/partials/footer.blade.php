<footer class="hero is-dark is-medium">
  <div class="hero-body">
    <div class="container is-fullhd">
      <div class="_header-footer columns align-items-center is-centered px-6 mx-auto pb-6 mb-6">

        @set($btn_mg_company, get_field('mg_company_link', 'options'))
        <a href="{{$btn_mg_company['url']}}" class="column is-2 p-0" data-gravity data-cursor-stick>
          <img src="{!!get_field('mg_company', 'options')!!}" alt="MG_Company">
        </a>
        <div class="column is-3 is-offset-1 p-0">
          @set($newsletter_link, get_field('newsletter_link', 'options'))
          <a href="{{$newsletter_link['url']}}" class="about is-flex is-align-items-center has-text-light justify-center" data-gravity data-cursor-stick>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                  <circle cx="12" cy="12" r="10"></circle>
              </svg>
              <span class="has-text-light is-capitalized is-size-6 mx-4">
                {{$newsletter_link['title']}}
              </span>
          </a>
        </div>
        <div class="columns column is-5 is-offset-1 p-0">
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
            <span href="" class="is-flex justify-right justify-center-touch" data-gravity data-cursor-text="@2023">
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
