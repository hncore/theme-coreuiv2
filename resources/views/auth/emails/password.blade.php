{{ trans('hncore::base.click_here_to_reset') }}: <a href="{{ $link = hncore_url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
