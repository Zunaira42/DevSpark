<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">DevSpark</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Request::is('/home') ? 'active' : '' }}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Feedback</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ route('products') }}" class="{{ Request::is('products') ? 'active' : '' }}">Products</a>
                </li>
                <li><a href="{{ route('cart.index') }}"class="{{ Request::is('cart') ? 'active' : '' }}">Cart</a></li>
                <li><a href="{{ route('checkout') }}"class="{{ Request::is('checkout') ? 'active' : '' }}">Checkout</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="cta-btn" href="{{ route('profile.edit') }}">Profile</a>
    </div>
</header>
