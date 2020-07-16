<nav
    class="
        navbar-mobile
    "
    id="navbar-mobile"
    data-id="main"
>
    <div class="navbar-mobile__container">
        <a class="navbar-mobile__logo-container" href="{{ route('home') }}">
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
        <button class="navbar-mobile__menu-button">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 12h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="navbar-mobile__menu relative">
        <ul>
            <li class="pageFooter__heading">Drive</li>
            <li class="pageFooter__link"><a href="{{ route('xcloud.overview') }}">Overview</a></li>
            <li class="pageFooter__link"><a href="{{ route('xcloud.technology') }}">Security</a></li>
            <li class="pageFooter__link"><a href="{{ route('xcloud.interface') }}">User Interface</a></li>
            <li class="pageFooter__link"><a href="{{ route('xcloud.eco') }}">Eco-friendly</a></li>
            <li class="pageFooter__link"><a href="{{ route('xcloud.individuals') }}">For Individuals</a></li>
            <li class="pageFooter__link"><a href="{{ route('xcloud.teams') }}">For Teams</a></li>
        </ul>
        <ul>
            <li class="pageFooter__heading">More</li>
            <li class="pageFooter__link"><a href="{{ route('more.about') }}">About</a></li>
            <li class="pageFooter__link"><a href="{{ route('xcore.overview') }}">Core</a></li>
            <li class="pageFooter__link"><a href="{{ route('inxt.overview') }}">Token</a></li>
            <li class="pageFooter__link"><a href="https://medium.com/internxt" rel="nofollow" target="_blank">News</a></li>
        </ul>
        <ul>
            <li class="pageFooter__heading pageFooter__heading--legal">Legal</li>
            <li class="pageFooter__link"><a href="{{ route('more.terms') }}">Terms &amp; Conditions</a></li>
            <li class="pageFooter__link"><a href="{{ route('more.privacy') }}">Privacy Policy</a></li>
        </ul>
    </div>
</nav>

