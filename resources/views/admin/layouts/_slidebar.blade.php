<nav class="navbar-default navbar-side" id="main-menu">
	<div class="sidebar-collapse">
		<ul class="nav">
            {{-- 权限管理 --}}
			<li>
                <a class="active-menu" href="index.html">
                	<i class="glyphicon glyphicon-th"></i> 权限管理
                </a>
            </li>
            {{-- 用户管理 --}}
            <li>
                <a href="#">
                	<i class="glyphicon glyphicon-user"></i>
                	用户管理<span class="fa arrow"></span>
                </a>
            </li>
            {{-- 文章管理 --}}
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-align-left"></i>
                    文章管理 <i class="glyphicon glyphicon-triangle-bottom pull-right" style="top: 5px;"></i>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#">分类管理</a>
                    </li>
                    <li>
                        <a href="#">审核文章</a>
                    </li>
                    <li>
                        <a href="#">处理举报</a>
                    </li>
                </ul>
            </li>
            {{-- 评论管理 --}}
             <li>
                <a href="#">
                    <i class="glyphicon glyphicon-comment"></i>
                    评论管理
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('comments.index') }}">处理举报</a>
                    </li>
                </ul>
            </li>
            {{-- 动态管理 --}}
             <li>
                <a href="#">
                    <i class="glyphicon glyphicon-star"></i>
                    动态管理
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                </ul>
            </li>
            {{-- 广告位管理 --}}
             <li>
                <a href="{{ route('adverts.index') }}">
                    <i class="glyphicon glyphicon-yen"></i>
                    广告位管理
                </a>
            </li>
            {{-- 友情链接管理 --}}
             <li>
                <a href="#">
                    <i class="glyphicon glyphicon-tags"></i>
                    友情链接管理<span class="fa arrow"></span>
                </a>
            </li>
		</ul>
	</div>
</nav>