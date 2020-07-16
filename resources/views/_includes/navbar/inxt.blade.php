@component('_includes.navbar._template')

	@slot('id', 'inxt')

	@slot('menu')
		<a href="{{ route('inxt.overview') }}" class="navbar__link @activeIfCurrentRouteIs('inxt.overview')">
		    Overview
		</a>
		<a href="{{ route('inxt.metrics') }}" class="navbar__link @activeIfCurrentRouteIs('inxt.metrics')">
		    Token Metrics
		</a>
		<a href="{{ route('inxt.buy') }}" class="navbar__link @activeIfCurrentRouteIs('inxt.buy')">
		    Buy INXT
		</a>
	@endslot

@endcomponent
