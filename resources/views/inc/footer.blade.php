@if (hncore_theme_config('show_powered_by') || hncore_theme_config('developer_link'))
    <div class="text-muted ml-auto mr-auto">
      @if (hncore_theme_config('developer_link') && hncore_theme_config('developer_name'))
      {{ trans('hncore::base.handcrafted_by') }} <a target="_blank" rel="noopener" href="{{ hncore_theme_config('developer_link') }}">{{ hncore_theme_config('developer_name') }}</a>.
      @endif
      @if (hncore_theme_config('show_powered_by'))
      {{ trans('hncore::base.powered_by') }} <a target="_blank" rel="noopener" href="http://hncoreforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>.
      @endif
    </div>
@endif