<header id="site-header" class="site-header" role="banner">
    <div class="container">
        <div class="site-logo-wrap">
            <hgroup>
                <h1 class='site-title site-title-no-desc'> <a  style="color:#FFFFFF;font-size:smaller;" href='{{ route('home') }}' title='{{ config('app.name', 'Laravel Shops') }}' rel='home'>{{ config('app.name', 'Laravel Shops') }}</a></h1>
            </hgroup>
        </div>
        <nav id="primary-nav" class="primary-nav" role="navigation">
            <ul id="menu-gd-menu" class="menu">
                @guest
                    <li class="gd-menu-item menu-item menu-item-type-post_type_archive"><a href="{{ route('login') }}">登入</a></li>
                    <li class="gd-menu-item menu-item menu-item-type-post_type_archive"><a href="{{ route('register') }}">註冊</a></li>
                @else
                    <li class="gd-menu-item menu-item menu-item-type-post_type_archive"><a href="{{ route('admin.shops.index') }}">管理販售據點</a></li>
                    <li class="gd-menu-item menu-item menu-item-type-post_type_archive"><a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">登出</a></li>
                    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </ul>
        </nav>
        <div class="dt-nav-toggle  dt-mobile-nav-button-wrap"><a href="#primary-nav"><i class="fas fa-bars"></i></a></div>
    </div>
</header>