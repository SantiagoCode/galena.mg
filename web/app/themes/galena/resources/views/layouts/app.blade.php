@include('partials.loader')
@include('partials.header')
@include('partials.menu')
<div data-inertia-container class="has-background-dark">
  <main data-inertia-section class="main">
    <div data-solar="container">
      @yield('content')
    </div>
  </main>
</div>
