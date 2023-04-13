<nav class="navbar has-padding-60 has-margin-top-30 has-margin-left-30 has-margin-right-30 ">
  @set($btn_home, get_field('mg_galenaai_link', 'options'))
  <a href="{{$btn_home['url']}}" class="navbar-item" data-gravity data-cursor-stick>
    <img src="@asset('images/mg.png')" alt="mg">
  </a>
  <div class="navbar-menu">
    <div class="navbar-end">
      @set($btn_follow_her, get_field('follow_her_instagram', 'options'))
      <a href="{{$btn_follow_her['url']}}" class="navbar-item" data-gravity data-cursor-stick>
        <span class="has-margin-left-20 has-margin-right-20">
          {{$btn_follow_her['title']}}
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
      </a>
    </div>
  </div>
</nav>