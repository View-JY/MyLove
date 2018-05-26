@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-xs-16 main">
	     <!-- Banner -->
	     <div class="recommend-collection">
	      <a class="collection" target="_blank" href="/c/8c92f845cd4d?utm_medium=index-collections&amp;utm_source=desktop"> <img src="picture/漫画专题.jpg" alt="64" />
	       <div class="name">
	        手绘
	       </div> </a>

	      <a class="more-hot-collection" target="_blank" href="/recommendations/collections?utm_medium=index-collections&amp;utm_source=desktop"> 更多热门专题 <i class="iconfont ic-link"></i> </a>
	     </div>
	     <div class="split-line"></div>
	     <div id="list-container">
	      <!-- 文章列表模块 -->
	      <ul class="note-list" infinite-scroll-url="/">
		       <li class="have-img">
		       		<a class="wrap-img" href="" target="_blank">
		       			<img src=/images/homescreen.jpeg" alt="120" />
		       		</a>
			        <div class="content">
			        	<a class="title" target="_blank" href="">从全职妈妈到简书签约作者，说说我的写作故事</a>
			         	<p class="abstract"> 文／叶听雨 2015年，一一来到我的生命当中。婆婆在照顾完月子的第二天便回了老家，而我也从此正式开始了全职妈妈的旅程。 犹记得在月子的时候，每次... </p>
			         	<div class="meta">
				          <a class="nickname" target="_blank" href="">叶听雨</a>
				          <a target="_blank" href="/p/11046c89367d#comments"> <i class="iconfont ic-list-comments"></i>559</a>
				          <span><i class="iconfont ic-list-like"></i> 902</span>
				          <span><i class="iconfont ic-list-money"></i> 26</span>
			         	</div>
			        </div>
		    	</li>
	      </ul>
	      <!-- 文章列表模块 -->
	     </div>
	    </div>
	    <div class="col-xs-7 col-xs-offset-1 aside">
	     <div class="board">

	     </div>

	     <!-- 推荐作者 -->
	     <div data-vcomp="recommended-author-list"></div>
	    </div>
	   </div>
	  </div>
@endsection
