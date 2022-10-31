<header>
    <div class="header">
        <div class="container">
            <div class="header__nav">
                <div class="nav__item-right">
                    <ul class="nav__item-header">
                        <a href="{{ route('home') }}">
                            <li class="nav__link active">
                                Home
                            </li>
                        </a>
                        <a href="{{ route('shop') }}">
                            <li class="nav__link">
                                Shop
                            </li>
                        </a>
                        <a href="{{ route('elements') }}">
                            <li class="nav__link">
                                Elements
                            </li>
                        </a>
                        <a href="">
                            <li class="nav__link">
                                Blog
                            </li>
                        </a>
                        <a href="">
                            <li class="nav__link">
                                Page
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="nav__item-center">
                    <div class="nav__title">
                        <img src="./assets/images/title.png" alt="logo">
                    </div>
                </div>
                <div class="nav__item-left">
                    <div class="nav__link-left">
                        <img class="nav__link-left--img" src="./assets/images/search.svg" alt="search">
                        <a href="{{ route('register') }}">
                            <img class="nav__link-left--img" src="./assets/images/user.svg" alt="account">
                        </a>
                        <div class="nav__link-left--div">
                            <img src="./assets/images/shop.svg" alt="shop" style="width: 18px; height: 18px;">
                            <div class="nav__link-left--shop"
                                style="height: 18px; font-size: 9px; color: #fff;">1333</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo-2" src="./assets/images/title.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('elements') }}">Elements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <div class="nav__item-left">
                                <div class="nav__link-left">
                                    <img class="nav__link-left--img" src="./assets/images/search.svg" alt="search">
                                    <a href="{{ route('register') }}">
                                        <img class="nav__link-left--img" src="./assets/images/user.svg" alt="account">
                                    </a>
                                    <div class="nav__link-left--div">
                                        <img src="./assets/images/shop.svg" alt="shop" style="width: 18px; height: 18px;">
                                        <div class="nav__link-left--shop"
                                            style="height: 18px; font-size: 9px; color: #fff;">1333</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    
      <style>
            .navbar {
                display: none;
            }

        @media (max-width: 1000px) {
            .navbar {
                display: block;
            }

            .header__nav {
                display: none;
            }

            .header {
                display: none;
            }

            .logo-2 {
                width: 80px;
                height: 20px;
            }
        }
      </style>

</header>