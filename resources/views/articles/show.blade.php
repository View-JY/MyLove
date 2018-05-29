@extends('layouts.app')

@section('content')
<div class="row" id="app">
	<div class="col-xs-10">
		<div class="main-area">
			<!-- 文章详情 -->
			<div class="article">
				<div class="author-info-block">
					<a href="" target="_blank" class="avatar-link">
						<div class="lazy avatar avatar loaded" title="" style="background-image: url();"></div>
					</a>
					<div data-v-13f76525="" class="author-info-box">
						<a href="" target="_blank" rel="" class="username ellipsis">玉鸯</a>
						<div class="meta-box">
							<time title="Sun May 27 2018 15:01:56 GMT+0800 (中国标准时间)" class="time">2018 年 05 月 27 日</time>
						</div>
					</div>
				</div>
			</div>
			<!-- 评论 -->
			<div class="note">
				<div class="post">
					<div class="comment-list">

						<!-- 发表评论 -->
						<form class="new-comment">
							<a class="avatar">
								<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/114/h/114">
							</a>
							<textarea placeholder="写下你的评论..."></textarea>
							<div class="write-function-block clearfix">
								<button type="submit" class="btn btn-info btn-lg pull-right" style="margin-left: 15px;">发送</button>
								<button type="reset" class="btn btn-default btn-lg pull-right">取消</button>
							</div>
						</form>

					</div>
				</div>
			</div>

			<!-- 评论列表 -->
			<div class="normal-comment-list">
				<!-- 单条评论 start -->
				<div class="comment">
					<div>
						<div class="author">
							<div class="v-tooltip-container" style="z-index: 0;">
								<div class="v-tooltip-content">
									<a href="/u/a378bb91321b" target="_blank" class="avatar">
										<img src="http://upload.jianshu.io/users/upload_avatars/6018646/5fa5ea67-8a90-4d3c-8d6d-5da296ac2033.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/114/h/114">
									</a>
								</div>
							</div>
							<div class="info">
								<a href="/u/a378bb91321b" target="_blank" class="name">caoxia</a>
								<div class="meta">
									<span>10楼 · 2018.05.03 16:34</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 单条评论 end -->
			</div>
		</div>
	</div>
	<div class="col-xs-2">

	</div>
</div>
@endsection

<style>
	body {
		background-color: #f9f9f9 !important;
	}
	.main-area {
	    position: relative;
	    width: 700px;
	    max-width: 100%;
	    background-color: #fff;
	    border-radius: 2px;
	    box-sizing: border-box;
	    background-color: #FFF;
	    padding: 10px 15px 20px;
	}
	.article {
	    margin-bottom: 3rem;
	    padding: 2rem 0 0;
	}
	.comment {
		margin-top: 15px;
	}
	.note .post .comment-list {
	    padding-top: 20px;
	}
	.note .post .comment-list .new-comment {
	    position: relative;
	    margin-left: 48px;
	}
	.note .post .comment-list .new-comment .avatar {
	    position: absolute;
	    left: -48px;
	}
	.note .post .comment-list .avatar {
	    margin-right: 5px;
	    width: 38px;
	    height: 38px;
	    vertical-align: middle;
	    display: inline-block;
	}
	.avatar {
	    width: 24px;
	    height: 24px;
	    display: block;
	    cursor: pointer;
	}
	.avatar img {
	    width: 100%;
	    height: 100%;
	    border: 1px solid #ddd;
	    border-radius: 50%;
	}
	.note .post .comment-list .new-comment textarea {
	    padding: 10px 15px;
	    width: 100%;
	    height: 80px;
	    font-size: 13px;
	    border: 1px solid #dcdcdc;
	    border-radius: 4px;
	    background-color: hsla(0,0%,71%,.1);
	    resize: none;
	    display: inline-block;
	    vertical-align: top;
	    outline-style: none;
	}
	.note .post .comment-list .new-comment .write-function-block {
	    height: 50px;
	    margin-top: 10px;
	}
	.note .post .comment-list .normal-comment-list {
	    margin-top: 30px;
	}
	.note .post .comment-list .comment {
	    padding: 20px 0 30px;
	    border-bottom: 1px solid #f0f0f0;
	}
	.note .post .comment-list .author {
	    margin-bottom: 15px;
	}
	.v-tooltip-container .v-tooltip-content {
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	}
	.v-tooltip-container, .v-tooltip-content {
	    display: inline-block;
	}
	.note .post .comment-list .avatar {
	    margin-right: 5px;
	    width: 38px;
	    height: 38px;
	    vertical-align: middle;
	    display: inline-block;
	}
	.avatar {
	    width: 24px;
	    height: 24px;
	    display: block;
	    cursor: pointer;
	}
	.avatar img {
	    width: 100%;
	    height: 100%;
	    border: 1px solid #ddd;
	    border-radius: 50%;
	}
	.note .post .comment-list .info {
	    display: inline-block;
	    vertical-align: middle;
	}
	.note .post .comment-list .name {
	    font-size: 15px;
	    color: #333;
	}
	.note .post .comment-list .meta {
	    font-size: 12px;
	    color: #969696;
	}
	.note .post .comment-list .meta span {
	    margin-right: 6px;
	}
	.note .post .comment-list .comment p {
	    font-size: 16px;
	}
	.note .post .comment-list p {
	    margin: 10px 0;
	    line-height: 1.5;
	    font-size: 16px;
	    word-break: break-word!important;
	    word-break: break-all;
	}
	.note .post .comment-list .tool-group a {
	    margin-right: 10px;
	    font-size: 0;
	    color: #969696;
	    display: inline-block;
	}
	.like-button {
	    position: relative;
	    padding-left: 23px;
	}
	.note .post .comment-list .tool-group a span {
	    vertical-align: middle;
	    font-size: 14px;
	}
</style>