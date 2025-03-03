<header class="header header-transparent header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo/logo-main.webp') }}" class="logo-light" alt="PowerX Systems Logo">
                <img src="{{ asset('images/logo/logo-main.webp') }}" class="logo-dark" alt="PowerX Systems Logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav__item">
                        <a href="{{ url('/') }}" class="nav__item-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/services') }}" class="nav__item-link {{ request()->is('services') ? 'active' : '' }}">Services</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/products') }}" class="nav__item-link {{ request()->is('products') ? 'active' : '' }}">Products</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/about-us') }}" class="nav__item-link {{ request()->is('about-us') ? 'active' : '' }}">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/contact') }}" class="nav__item-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div>
            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li>
                    <a href="{{ url('/contact') }}" class="btn btn__white action__btn action__btn-contact">Get A Quote</a>
                </li>
                <li>
                    <div class="phone__number">
                        <div class="phone__icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div>
                            <a class="phone__link d-block" href="tel:+919447553075">+91 9447 55 3075</a>
                            <a class="email__link d-block" href="mailto:contact@powerxsystem.in">contact@powerxsystem.in</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
