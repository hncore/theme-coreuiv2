{{-- =================================================== --}}
{{-- ========== Top menu items (ordered left) ========== --}}
{{-- =================================================== --}}
<ul class="nav navbar-nav d-md-down-none">

    @if (hncore_auth()->check())
        {{-- Topbar. Contains the left part --}}
        @include(hncore_view('inc.topbar_left_content'))
    @endif

</ul>
{{-- ========== End of top menu left items ========== --}}



{{-- ========================================================= --}}
{{-- ========= Top menu right items (ordered right) ========== --}}
{{-- ========================================================= --}}
<ul class="nav navbar-nav ml-auto @if(hncore_theme_config('html_direction') == 'rtl') mr-0 @endif">
    @if (hncore_auth()->guest())
        <li class="nav-item"><a class="nav-link" href="{{ route('hncore.auth.login') }}">{{ trans('hncore::base.login') }}</a>
        </li>
        @if (config('hncore.base.registration_open'))
            <li class="nav-item"><a class="nav-link" href="{{ route('hncore.auth.register') }}">{{ trans('hncore::base.register') }}</a></li>
        @endif
    @else
        {{-- Topbar. Contains the right part --}}
        @include(hncore_view('inc.topbar_right_content'))
        @include(hncore_view('inc.menu_user_dropdown'))
    @endif
</ul>
{{-- ========== End of top menu right items ========== --}}
