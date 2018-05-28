@extends('layouts.app')

@section('content')
<div class="row" id="app">
  <header class="list-header">
    <nav class="list-nav">
      <ul class="nav-list">
        <li class="nav-item active">
          <a href="javascript:;">最热</a>
        </li>
        <li class="nav-item">
          <a href="javascript::">最新</a>
        </li>
        <li class="nav-item search">
          <form class="search-form">
            <input maxlength="32" placeholder="搜索作者" name="name" class="search-input" />
            <button type="submit" class="btn btn-info btn-lg">搜索</button>
          </form>
        </li>
      </ul>
    </nav>
  </header>

  <ul class="tag-list">
    @foreach($users as $user)
    <li class="tag-item">
      <div class="tag">
        <div class="info-box">
          <a href="" target="_blank">
            <div class="lazy thumb thumb loaded">
              <img src="/images/homescreen.jpeg" alt="{{ $user ->name }}" />
            </div>
            <div class="title">{{ $user ->name }}</div>
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
              <a class="new" target="_blank" href="javascript:;">宵夜</a>
            </div>
          </div>
        </div>
        <div class="action-box">
          <a href="javascript:;" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> 关注</a>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
</div>
@endsection