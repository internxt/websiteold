@if(Route::currentRouteName() != "home")
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark {{ Route::currentRouteName() }}">

            <a class="navbar-brand" href="{{ route('home') }}">
                @if(
                    Route::currentRouteName() == "xcore.overview" || 
                    Route::currentRouteName() == "inxt.overview" || 
                    Route::currentRouteName() == "inxt.buy" || 
                    Route::currentRouteName() == "xcore.get-started"
                )
                    @include('_includes.navbar.logo-white')
                    @php $textColor = '#FFF'; @endphp
                @else 
                    @include('_includes.navbar.logo')
                    @php $textColor = '#000'; @endphp
                @endif
            </a>
        

        <button class="navbar-toggler " type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="justify-content: space-between !important;">
            <div></div>
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('xcloud.overview') }}" style="color: {{ $textColor }} !important">DRIVE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/inxt" style="color: {{ $textColor }} !important">TOKEN</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://send.internxt.com/" style="color: {{ $textColor }} !important">SEND</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('more.about') }}" style="color: {{ $textColor }} !important">ABOUT</a>
                </li>
            </ul>
            <div class="__link-login"><a class="nav-link" href="https://drive.internxt.com/login" style="color: {{ $textColor }} !important">SIGN IN</a></div>
        </div>
    </nav>

    <script>
        $(document).ready(function() {
            if ('{{ $textColor }}' == '#000') {
				$('.navbar').removeClass('navbar-dark')
			    $('.navbar').addClass('navbar-light')
			} else {
				$('.navbar').addClass('navbar-dark')
			    $('.navbar').removeClass('navbar-light')
			}
        });
        
    </script>
@endif



<!-- OLD NAV -->

<!-- <nav
    class="
        navbar
        @unless(Route::currentRouteName() == 'home')
            hidden
        @endunless
        @yield('navbar-classes')
    "
    id="navbar"
    data-id="main"
>
    <a class="navbar__logo-container" href="{{ route('home') }}">
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
        <a class="navbar__link" href="{{ route('xcloud.overview') }}">
            Drive
        </a>
        <a class="navbar__link" href="https://send.internxt.com/">
            Send
        </a>
		<a class="navbar__link" href="{{ route('inxt.overview') }}">
            Token
        </a>
        <a class="navbar__link" href="{{ route('more.about') }}">
            About
        </a>       
        <a class="navbar__link" href="{{ config('services.medium.url') }}" rel="nofollow" target="_blank">
			News
		</a>
    </div>
</nav>	

@include('_includes.navbar.xcloud')

@include('_includes.navbar.xcore')

@include('_includes.navbar.inxt')

@include('_includes.navbar.more') -->

