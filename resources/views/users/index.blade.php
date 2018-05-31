@extends('layouts.app')

@section('content')
<div class="row" id="app">
  <header class="list-header">
    <nav class="list-nav">
      <ul class="nav-list">
        <li class="nav-item active">
          <a href="/users?title=hot">最热</a>
        </li>
        <li class="nav-item">
          <a href="/users?title=new">最新</a>
        </li>
        <li class="nav-item search">
          <form class="search-form" method="get" action="{{ route('users.index') }}">
            <input maxlength="32" placeholder="搜索作者" name="name" class="search-input" />
            <button type="submit" class="btn btn-info" style="font-size: 12px;">搜索</button>
          </form>
        </li>
      </ul>
    </nav>
  </header>

  <ul class="tag-list">
    @foreach($users as $user)
      @if(Auth::check() !== $user ->id)
      <li class="tag-item">
        <div class="tag">
          <div class="info-box">
            <a href="" target="_blank">
              <div class="lazy thumb thumb loaded">
                <a href="/users/{{ $user -> id }}"><img src="/images/homescreen.jpeg" alt="{{ $user ->name }}" /></a>
              </div>
              <div class="title"><a href="/users/{{ $user -> id }}">{{ $user ->name }}</a></div>
            </a>
            <p><small>email:</small> {{ $user ->email }}</p>
            <div class="meta-box">
              <div class="meta subscribe">249787 关注 </div>
              <div class="meta article">16508 文章 </div>
            </div>
            <hr>
            <div class="new-text clearfix">
              <h5 class="text-center"><i class="glyphicon glyphicon-pencil"></i> 最近更新文章：</h5>
              <div class="recent-update">
               
                <a class="new" target="_blank" href="javascript:;">asdasdasdas</a>
              </div>
            </div>
          </div>
          <div class="action-box">
            @if(Auth::check())
              @if (Auth::user()->isFollowing($user->id))
                <form action="{{ route('followers.destroy', $user->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-heart"></span> 取消关注</button>
                </form>
              @else
                <form action="{{ route('followers.store', $user->id) }}" method="post">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-heart"></span> 点击关注作者</button>
                </form>
              @endif
            @endif
          </div>
        </div>
      </li>
      @endif
    @endforeach
  </ul>
</div>
@endsection