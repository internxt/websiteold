<header id="__header">

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">

            <a class="navbar-brand" href="#">
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

        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style=" justify-content: space-between !important;">
            
            <div></div>
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('xcloud.overview') }}">DRIVE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/inxt">TOKEN</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://send.internxt.com/">SEND</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('more.about') }}">ABOUT</a>
                </li>
                
            </ul>
            <div><a class="nav-link __link-login" href="https://drive.internxt.com/login" style="color:#FFFF">SIGN IN</a></div>
        </div>
    </nav>
</header>