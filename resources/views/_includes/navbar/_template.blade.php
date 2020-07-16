<nav
	data-id="{{ $id }}"
    class="
    	navbar
	    @yield('navbar-classes')
        @unless(starts_with(Route::currentRouteName(), $id))
            hidden
        @endunless
    "
>
    <a class="navbar__logo-container navbar__link--more-hide">
        @if(
            Route::currentRouteName() == "xcloud.overview" || 
            Route::currentRouteName() == "home" ||
            Route::currentRouteName() == "more.terms" || 
            Route::currentRouteName() == "more.privacy" ||
            Route::currentRouteName() == "more.vision" ||
            Route::currentRouteName() == "xcloud.get-started"
        )
            @include('_includes.navbar.logo')
        @else
            @include('_includes.navbar.logo')
        @endif
    </a>
    <button class="navbar__menu-button">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 12h20v2H0v-2z"/></svg>
    </button>
    <div class="navbar__menu relative">
		{{ $menu }}
    </div>
</nav>
