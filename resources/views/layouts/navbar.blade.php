<header class="header bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li{{ Request::routeIs('index') ? ' class=active' : '' }}><a href="{{ route('index') }}">Home</a></li>
                            <li{{ Request::routeIs('about') ? ' class=active' : '' }}><a href="{{ route('about') }}">About</a></li>
                            <li{{ Request::routeIs('portfolio') ? ' class=active' : '' }}><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li{{ Request::routeIs('services') ? ' class=active' : '' }}><a href="{{ route('services') }}">Services</a></li>
                            <li{{ Request::routeIs('contact') ? ' class=active' : '' }}><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
