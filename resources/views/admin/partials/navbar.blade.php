<ul class="nav navbar-nav">
    <li><a href="/">博客主页</a></li>
    @if (Auth::check())
        <li @if (Request::is('admin/post*')) class="active" @endif>
            <a href="/admin/post">博客</a>
        </li>
        <li @if (Request::is('admin/tag*')) class="active" @endif>
            <a href="/admin/tag">标签</a>
        </li>
        <li @if (Request::is('admin/upload*')) class="active" @endif>
            <a href="/admin/upload">发布</a>
        </li>
    @endif
</ul>

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li><a href="/auth/login">登录</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
               aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        退出
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul>