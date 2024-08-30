<header class="{{ hncore_theme_config('classes.header') }}">
  {{-- Logo --}}
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show" aria-label="{{ trans('hncore::base.toggle_navigation')}}">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{ url(hncore_theme_config('home_link')) }}" title="{{ hncore_theme_config('project_name') }}">
    {!! hncore_theme_config('project_logo') !!}
  </a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show" aria-label="{{ trans('hncore::base.toggle_navigation')}}">
    <span class="navbar-toggler-icon"></span>
  </button>

  @include(hncore_view('inc.menu'))
</header>
