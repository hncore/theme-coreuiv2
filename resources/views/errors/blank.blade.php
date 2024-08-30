<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ trans('hncore::base.error_page.title', ['error' => $error_number]) }}</title>

        @include(hncore_view('inc.theme_styles'))
        @include(hncore_view('inc.styles'))
    </head>
    <body>
      @yield('content')
    </body>
</html>
