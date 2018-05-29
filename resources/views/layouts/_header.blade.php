<nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="top">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <span style="font-size: 22px; color: #0084ff;">View</span> <small style="font-size: 12px;">发现不一样的世界</small>
            </a>

            <form class="navbar-form navbar-left" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索你想看的文章" name="text">
                </div>
                <button type="submit" class="btn btn-default">搜你想看的</button>
            </form>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

            </ul>
             <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">登录</a></li>
                <li><a href="{{ route('register') }}">注册</a></li>
                @else
                <li><a href="{{ url('/articles/create') }}" class="write-btn">写文章</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                            @if(Auth::user() ->avatar)
                            <img src="{{ Auth::user() ->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                            @endif
                        </span>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('helps.index') }}">
                                <i></i><span>个人中心</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('helps.index') }}">
                                <i></i><span>意见反馈</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i></i><span>退出登录</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>
