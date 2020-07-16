@component('_includes.navbar._template')

	@slot('id', 'more')

	@slot('menu')
        <a class="navbar__link" href="{{ route('xcloud.overview') }}">
            Drive
        </a>
        <a class="navbar__link" href="https://send.internxt.com/">
            Send
        </a>
        <a class="navbar__link" href="{{ route('more.about') }}">
            About
        </a>       
        <a class="navbar__link" href="{{ config('services.medium.url') }}" rel="nofollow" target="_blank">
			News
		</a>
	@endslot

@endcomponent
