<header class="header">
    <div class="header__content">
        <img src="{{URL::to('/');}}/assets/menu.png" class="header__content__menu" tabindex="1" alt="Menu" />

        <div class="header__content__logo">
            <div class="header__logo__icon-box">
                <img src="{{URL::to('/');}}/assets/logo_icon.png" class="header__logo--small" alt="Logo Icon" />
                <img src="{{URL::to('/');}}/assets/big-logo-icon.png" class="header__logo--big" alt="Logo Icon" />
            </div>
            <div class="header__logo">
                <img src="{{URL::to('/');}}/assets/logo.png" class="header__logo--small" alt="Logo" />
                <img src="{{URL::to('/');}}/assets/big-logo.png" class="header__logo--big" alt="Logo" />
            </div>
        </div>

        <nav class="header__desktop-navlist">
            <ul>
                <li class="header__navlist__item"><a href="{{URL::to('/');}}/about">About Us</a></li>
                <li class="header__navlist__item"><a href="{{URL::to('/');}}/rooms">Rooms</a></li>
                <li class="header__navlist__item"><a href="{{URL::to('/');}}/offers">Offers</a></li>
                <li class="header__navlist__item"><a href="{{URL::to('/');}}/contact">Contact</a></li>
            </ul>
        </nav>

        <div class="header__content__actions">
            <div class="header__content__actions__item"><a href='{{URL::to('/');}}/login'><img src="{{URL::to('/');}}/assets/account.png" alt="Account" /></a></div>
            <div class="header__content__actions__item"><img src="{{URL::to('/');}}/assets/search.png" alt="Search" /></div>
        </div>
    </div>

    <nav class="header__navlist">
        <ul>
            <li class="header__navlist__item"><a href="{{URL::to('/');}}/about">About Us</a></li>
            <li class="header__navlist__item"><a href="{{URL::to('/');}}/rooms">Rooms</a></li>
            <li class="header__navlist__item"><a href="{{URL::to('/');}}/offers">Offers</a></li>
            <li class="header__navlist__item"><a href="{{URL::to('/');}}/contact">Contact</a></li>
        </ul>
    </nav>
</header>

<header class="information-header">
    <div class="information-header__container">
        <p class="information-header__subtitle">the ultimate luxury</p>
        <p class="information-header__title">{{$title}}</p>
        <div class="information-header__navigation">
            <a href="{{URL::to('/');}}/index">Home</a>
            <span id="separator">|</span>
            <span>{{$subtitle}}</span>
        </div>
    </div>
</header>
