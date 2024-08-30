<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ hncore_theme_config('html_direction') }}">

<head>
  @include(hncore_view('inc.head'))

</head>

<body class="{{ hncore_theme_config('classes.body') }}">

  @include(hncore_view('inc.main_header'))

  <div class="app-body">

    @include(hncore_view('inc.sidebar'))

    <main class="main pt-2">

       @yield('before_breadcrumbs_widgets')

       @includeWhen(isset($breadcrumbs), hncore_view('inc.breadcrumbs'))

       @yield('after_breadcrumbs_widgets')

       @yield('header')

        <div class="container-fluid animated fadeIn">

          @yield('before_content_widgets')

          @yield('content')
          
          @yield('after_content_widgets')

        </div>

    </main>

  </div>{{-- ./app-body --}}

  <footer class="{{ hncore_theme_config('classes.footer') }}">
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