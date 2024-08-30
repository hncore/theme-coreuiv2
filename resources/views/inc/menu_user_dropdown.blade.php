<li class="nav-item dropdown pr-4">
  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="position: relative;width: 35px;height: 35px;margin: 0 10px;">
    <img class="img-avatar" src="{{ hncore_avatar_url(hncore_auth()->user()) }}" alt="{{ hncore_auth()->user()->name }}" onerror="this.style.display='none'" style="margin: 0;position: absolute;left: 0;z-index: 1;">
    <span class="hncore-avatar-menu-container" style="position: absolute;left: 0;width: 100%;background-color: #00a65a;border-radius: 50%;color: #FFF;line-height: 35px;font-size: 85%;font-weight: 300;">
      {{hncore_user()->getAttribute('name') ? mb_substr(hncore_user()->name, 0, 1, 'UTF-8') : 'A'}}
    </span>
  </a>
  <div class="dropdown-menu {{ hncore_theme_config('html_direction') == 'rtl' ? 'dropdown-menu-left' : 'dropdown-menu-right' }} mr-4 pb-1 pt-1">
    @if(config('hncore.base.setup_my_account_routes'))
      <a class="dropdown-item" href="{{ route('hncore.account.info') }}"><i class="la la-user"></i> {{ trans('hncore::base.my_account') }}</a>
      <div class="dropdown-divider"></div>
    @endif
    <a class="dropdown-item" href="{{ hncore_url('logout') }}"><i class="la la-lock"></i> {{ trans('hncore::base.logout') }}</a>
  </div>
</li>
