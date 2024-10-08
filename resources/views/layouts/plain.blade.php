<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ hncore_theme_config('html_direction') }}">
<head>
    @include(hncore_view('inc.head'))
</head>
<body class="app flex-row align-items-center">

  @yield('header')

  <div class="container">
  @yield('content')
  </div>

  <footer class="app-footer sticky-footer">
    @include(hncore_view('inc.footer'))
  </footer>

  @yield('before_scripts')
  @stack('before_scripts')

  @include(hncore_view('inc.scripts'))
  @include(hncore_view('inc.theme_scripts'))

  @yield('after_scripts')
  @stack('after_scripts')

</body>
</html>
