@component('_includes.navbar._template')

	@slot('id', 'xcore')

	@slot('menu')
		<a href="{{ route('xcore.overview') }}" class="navbar__link @activeIfCurrentRouteIs('xcore.overview')">
		    Overview
		</a>
		<a href="{{ route('xcore.get-started') }}" class="navbar__link @activeIfCurrentRouteIs('xcore.get-started')">
		    Setup &amp; Tips
		</a>
	@endslot

@endcomponent
