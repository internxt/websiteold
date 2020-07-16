@component('_includes.navbar._template')

	@slot('id', 'xcloud')

	@slot('menu')
		<a href="{{ route('xcloud.overview') }}" class="navbar__link @activeIfCurrentRouteIs('xcloud.overview')">
		    Overview
		</a>
		<a href="{{ $xcloudDownloadLink }}" class="navbar__link">
		    Download
		</a>
		<a href="{{ route('xcloud.technology') }}" class="navbar__link @activeIfCurrentRouteIs('xcloud.technology')">
		    Security
		</a>
		<a href="{{ route('xcloud.interface') }}" class="navbar__link @activeIfCurrentRouteIs('xcloud.interface')">
		    Interface
		</a>
		<a href="{{ route('xcloud.eco') }}" class="navbar__link @activeIfCurrentRouteIs('xcloud.eco')">
		    Eco
		</a>
		<a href="{{ route('xcloud.individuals') }}" class="navbar__link @activeIfCurrentRouteIs('xcloud.individuals')">
		    Individuals
		</a>
		<a href="{{ route('xcloud.teams') }}" class="navbar__link @activeIfCurrentRouteIs('xcloud.teams')">
		    Teams
		</a>
		<a href="https://drive.internxt.com/login" target="_blank" rel="nofollow" class="navbar__link navbar__link--sign-in">
		    Sign In
		</a>
	@endslot

@endcomponent
