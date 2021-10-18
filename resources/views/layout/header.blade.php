<header style="direction: ltr;">
    <div class="container">
        <div class="logo"><a href="/">GoAmaz</a></div>
        @if (request()->route()->uri == 'ar/login' || (request()->route()->uri == 'en/login' || request()->route()->uri == 'ar/register') || request()->route()->uri == 'en/register')

        @else
            <div class="search search-desk">
                <input type="text" placeholder="Search..." />
                <div class="icon">
                    <img src="/icons/search.svg" />
                </div>
            </div>
        @endif
        <div class="lang">
            <div class="current-lang">EN</div>
            <div class="lang-dropdown">
                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                    <div class="lang-choice @if (LaravelLocalization::getCurrentLocale() == 'en') active @endif">EN</div>
                </a>
                <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                    <div class="lang-choice @if (LaravelLocalization::getCurrentLocale() == 'ar') active @endif">AR</div>
                </a>
            </div>
        </div>
        @if (Session::has('email'))
            <a href="/profile" class="profile">
                <div class="profile-image">
                    <img src="/images/2.jpg" alt="Face mask">
                </div>
            </a>
            <a href="/logout" style="margin-right: 1%">
                <img src="/icons/logout_white.svg">
            </a>
        @else
            <div class="links">
                <a href="/login">Sign in</a>
            </div>
        @endif
        <a href="/favorite" class="cart"><img src="/icons/favorite.svg" style="width: 25px;" /></a>
    </div>
    <div class="search-responsive-con">
        <div class="container">
            <div class="search search-responsive">
                <input type="text" placeholder="Search..." />
                <div class="icon">
                    <img src="/icons/search.svg" />
                </div>
            </div>
        </div>
    </div>

</header>
