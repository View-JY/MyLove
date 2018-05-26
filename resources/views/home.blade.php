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
	       <li id="note-27876999" data-note-id="27876999" class="have-img"> <a class="wrap-img" href="/p/11046c89367d" target="_blank"> <img data-echo="//upload-images.jianshu.io/upload_images/3253882-9af55724e1571da3.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" class="img-blur" src="picture/3253882-9af55724e1571da3.jpg" alt="120" /> </a>
	        <div class="content">
	         <a class="title" target="_blank" href="/p/11046c89367d">从全职妈妈到简书签约作者，说说我的写作故事</a>
	         <p class="abstract"> 文／叶听雨 2015年，一一来到我的生命当中。婆婆在照顾完月子的第二天便回了老家，而我也从此正式开始了全职妈妈的旅程。 犹记得在月子的时候，每次... </p>
	         <div class="meta">
	          <a class="nickname" target="_blank" href="/u/1442dc220652">叶听雨</a>
	          <a target="_blank" href="/p/11046c89367d#comments"> <i class="iconfont ic-list-comments"></i> 559 </a>
	          <span><i class="iconfont ic-list-like"></i> 902</span>
	          <span><i class="iconfont ic-list-money"></i> 26</span>
	         </div>
	        </div> </li>

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
	  <div data-vcomp="side-tool"></div>
	  <footer class="container">
	   <div class="row">
	    <div class="col-xs-17 main">
	     <a target="_blank" href="http://www.jianshu.com/c/jppzD2">关于简书</a>
	     <em> &middot; </em>
	     <a target="_blank" href="http://www.jianshu.com/contact">联系我们</a>
	     <em> &middot; </em>
	     <a target="_blank" href="http://www.jianshu.com/c/bfeec2e13990">加入我们</a>
	     <em> &middot; </em>
	     <a target="_blank" href="http://www.jianshu.com/p/fc1c113e5b6b">简书出版</a>
	     <em> &middot; </em>
	     <a target="_blank" href="http://www.jianshu.com/press">品牌与徽标</a>
	     <em> &middot; </em>
	     <a target="_blank" href="http://www.jianshu.com/faqs">帮助中心</a>
	     <em> &middot; </em>
	     <a target="_blank" href="http://www.jianshu.com/p/cabc8fa39830">合作伙伴</a>
	     <div class="icp">
	       &copy;2012-2018 上海佰集信息科技有限公司 / 简书 / 沪ICP备11018329号-5 /
	      <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010402002252"> <img src="picture/smrz-557fa318122c99a66523209bf9753a27.png" alt="Smrz" /> </a>
	      <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010402002252">沪公网安备31010402002252号 / </a>
	      <a target="_blank" href="http://www.shjbzx.cn/"> <img src="picture/wxb-a216456895eb66c17497dbd3da443cf8.png" alt="Wxb" /> </a> 举报电话：021-34770013 /
	      <a target="_blank" href="http://218.242.124.22:8081/businessCheck/verifKey.do?showType=extShow&amp;serial=9031000020171107081457000002158769-SAIC_SHOW_310000-20171115131223587837&amp;signData=MEQCIADWZ5aTcBeER5SOVp0ly+ElvKnwtjczum6Gi6wZ7/wWAiB9MAPM22hp947ZaBobux5PDkd0lfqoCOkVV7zjCYME6g=="> <img src="picture/zggsrz-5695587dccf490ca3e651f4228f7479e.png" alt="Zggsrz" /> </a>
	     </div>
    </div>
</div>
@endsection
