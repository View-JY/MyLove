@extends('layouts.app')

@section('content')
<div class="row" id="app">
	<div class="col-xs-8">
		<div class="main-area">
			<!-- 文章详情 -->
			<div class="article">
				<div class="author-info-block">
					<a href="" target="_blank" class="avatar-link">
						<div class="lazy avatar avatar loaded" title="" style="background-image: url();"></div>
					</a>
					<div class="author-info-box">
						<a href="" target="_blank" rel="" class="username ellipsis">{{$data ->user ->name}}</a>
						<a class="article-auth-follower" style="padding: 0 7px 0 5px; font-size: 12px;border-radius: 40px; color: #fff;background-color: #42c02e;font-weight: 400;line-height: normal;display: inline-block; text-decoration: none; cursor: pointer; margin-left: 10px;"><i class="glyphicon glyphicon-plus"></i> <span>关注</span></a>
						<div class="meta-box">
							<time title="Sun May 27 2018 15:01:56 GMT+0800 (中国标准时间)" class="time">{{ $data -> updated_at }}</time>
							<span class="views-count">阅读 568</span>
							<span class="comments-count">评论 6</span>
							<span class="likes-count">喜欢 31</span>
						</div>
						<h3>{{ $data -> name }}</h3>
						<div>{!! $data -> body !!}</div>
					</div>
				</div>

				<!-- 用户操作 -->
				<div class="clearfix">
					<!-- 文章作者可以操作 -->
					<a href="javascript:;" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-trash"></i> 删除</a>
					<a href="javascript:;" class="btn btn-default pull-right" style="margin-right: 10px;"><i class="glyphicon glyphicon-pencil"></i> 修改</a>

					<!-- 游客可以操作 -->
					<a href="javascript:;" class="btn btn-success pull-right" style="margin-right: 10px;"><i class="glyphicon glyphicon-heart"></i> 喜欢</a>
					<a href="javascript:;" class="btn btn-danger pull-right" style="margin-right: 10px;"><i class="glyphicon glyphicon-warning-sign"></i> 举报</a>
				</div>
			</div>

			<!-- 评论 -->
			<div class="note">
				<div class="post">
					<div class="comment-list">

						<!-- 发表评论 -->
						<form class="new-comment">
							<a class="avatar">
								<img src="http://upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/114/h/114">
							</a>
							<textarea placeholder="写下你的评论..."></textarea>
							<div class="write-function-block clearfix">
								<button type="submit" class="btn btn-info pull-right" style="margin-left: 15px;">发送</button>
								<button type="reset" class="btn btn-default pull-right">取消</button>
							</div>
						</form>

					</div>
				</div>
			</div>

			<!-- 评论列表 -->
			<div class="normal-comment-list" style="padding-top: 10px;">
				<div>
					<div class="top-title" style="padding-bottom: 10px; font-size: 17px;font-weight: 700; border-bottom: 1px solid #f0f0f0;">
						<span style="vertical-align: middle;">6条评论</span>
						<a class="author-only" style="margin-left: 10px;padding: 4px 8px; font-size: 12px; color: #969696;border: 1px solid #e1e1e1;border-radius: 12px;">只看作者</a>
						<a class="close-btn" style="margin-left: 10px; font-size: 12px;color: #969696; cursor: pointer; text-decoration: none;">关闭评论</a>
						<div class="pull-right">
							<a class="active" style="margin-left: 10px;font-size: 12px; font-weight: 400; color: #969696; display: inline-block; cursor: pointer; text-decoration: none;">按时间正序</a>
							<a class="" style="margin-left: 10px;font-size: 12px; font-weight: 400; color: #969696; display: inline-block; cursor: pointer; text-decoration: none;">按时间倒序</a>
						</div>
					</div>
				</div>
				<!-- 单条评论 start -->
				<div class="comment" style="padding: 10px 0 20px;border-bottom: 1px solid #f0f0f0;">
					<div>
						<div class="author" style="margin-bottom: 15px;">
							<div class="v-tooltip-container" style="z-index: 0; position: relative; display: inline-block;">
								<div class="v-tooltip-content" style="-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none; display: inline-block;">
									<a href="/u/a378bb91321b" target="_blank" class="avatar" style="margin-right: 5px; width: 38px; height: 38px;vertical-align: middle;display: inline-block;">
										<img src="http://upload.jianshu.io/users/upload_avatars/6018646/5fa5ea67-8a90-4d3c-8d6d-5da296ac2033.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/114/h/114" style=" width: 100%;eight: 100%;border: 1px solid #ddd;border-radius: 50%;">
									</a>
								</div>
							</div>
							<div class="info" style="display: inline-block; vertical-align: middle;">
								<a href="/u/a378bb91321b" target="_blank" class="name" style="font-size: 15px;color: #333;">caoxia</a>
								<div class="meta" style="font-size: 12px;color: #969696;">
									<span style="margin-right: 6px;"	>{{ $data -> created_at }}</span>
								</div>
							</div>
						</div>
						<div class="comment-wrap">
							<p style="font-size: 16px;margin: 5px 0;line-height: 1.5;word-break: break-word!important;word-break: break-all;position: relative;padding-left: 23px;">123</p>
							<div class="tool-group">
								<a class="like-button" style="margin-right: 10px;color: #969696;display: inline-block;cursor:pointer; text-decoration:none;">
									<i class="glyphicon glyphicon-thumbs-up"></i> 赞
								</a>
								<a class="" style="margin-right: 10px; color: #969696;display: inline-block;cursor:pointer; text-decoration:none;">
									<i class="glyphicon glyphicon-comment"></i> 回复
								</a>
								<a class="report" style="margin-right: 10px;color: #969696; display: inline-block;cursor:pointer; text-decoration:none;">
									<i class="glyphicon glyphicon-remove"></i> 举报
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- 单条评论 end -->
			</div>
		</div>
	</div>
	<div class="col-xs-4">
		<!-- 作者信息 -->
		<div class="Sticky">
			<div class="Card AnswerAuthor" style="margin-bottom: 10px;background: #fff;overflow: hidden;border-radius: 2px; box-shadow: 0 1px 3px rgba(26,26,26,.1);box-sizing: border-box;">
				<div class="Card-header AnswerAuthor-title"><div class="Card-headerText">关于作者</div></div>
				<div class="Card-section">
					<div class="AnswerAuthor-user">
						<div class="AnswerAuthor-user-avatar">
							<span class="UserLink">
								<a class="UserLink-link" target="_blank" href="//www.zhihu.com/people/feng-bu-xi-96">
									<img class="Avatar--large UserLink-avatar" width="60" height="60" src="http://upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/114/h/114">
								</a>
							</span>
						</div>
						<div class="AnswerAuthor-user-content">
							<div class="AnswerAuthor-user-name">
								<span class="UserLink">
									<a class="UserLink-link" target="_blank" href="//www.zhihu.com/people/feng-bu-xi-96">风不息</a>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="Card-section">
					<div class="AnswerAuthor-counts">
						<div class="NumberBoard">
							<a type="button" class="Button NumberBoard-item Button--plain" href="" style="text-decoration:none;">
								<div class="NumberBoard-itemInner">
									<div class="NumberBoard-itemName">评论</div>
									<strong class="NumberBoard-itemValue" title="100">100</strong>
								</div>
							</a>
							<a type="button" class="Button NumberBoard-item Button--plain" href="" style="text-decoration:none;">
								<div class="NumberBoard-itemInner">
									<div class="NumberBoard-itemName">文章</div>
									<strong class="NumberBoard-itemValue" title="5">5</strong>
								</div>
							</a>
							<a type="button" class="Button NumberBoard-item Button--plain" href="" style="text-decoration:none;">
								<div class="NumberBoard-itemInner">
									<div class="NumberBoard-itemName">关注者</div>
									<strong class="NumberBoard-itemValue" title="827">827</strong>
								</div>
							</a>
						</div>
					</div>
					<div class="MemberButtonGroup AnswerAuthor-buttons">
						<a class="btn btn-info" style="-webkit-box-flex: 1;-ms-flex: 1;flex: 1; margin: 0 10px;">加关注</a>
						<a class="btn btn-default" style="-webkit-box-flex: 1;-ms-flex: 1;flex: 1; margin: 0 10px;">个人主页</a>
					</div>
				</div>
			</div>
		</div>

		<!-- 写过的文章 -->
		<div class="sidebar-block related-entry-sidebar-block shadow" style="position: relative; margin-bottom: 1.5rem;border-radius: 2px; background-color: #FFF;">
			<div class="block-title" style="padding: 1rem 1.3rem; font-size: 1.16rem;color: #333;border-bottom: 1px solid hsla(0,0%,59%,.1);">他写过的文章</div>
			<div class="block-body">
				<div class="entry-list">

					<a href="/post/5a54cc75518825734107cd73" target="_blank" class="item" style="display: block; padding: .8rem 1.3rem; text-decoration: none;">
						<div class="entry-title" style="font-size: 1.16rem;color: #333;">每个前端工程师都应该了解的HTML5.2</div>
						<div class="entry-meta-box" style="margin-top: .4rem;">
							<div class="entry-meta" style="display: inline-block; margin-right: 1.5rem;font-size: 1.1rem;color: #c2c2c2;">
								<i class="icon ion-heart"></i>
								<span class="count" style="margin-left: .4rem;">282</span>
							</div>
							<div class="entry-meta" style="display: inline-block; margin-right: 1.5rem;font-size: 1.1rem;color: #c2c2c2;">
								<i class="icon ion-chatbox"></i>
								<span class="count" style="margin-left: .4rem;">26</span>
							</div>
						</div>
					</a>

				</div>
			</div>
		</div>

		<!-- 相关推荐 -->
		<div class="sidebar-block related-entry-sidebar-block shadow" style="position: relative; margin-bottom: 1.5rem;border-radius: 2px; background-color: #FFF;">
			<div class="block-title" style="padding: 1rem 1.3rem; font-size: 1.16rem;color: #333;border-bottom: 1px solid hsla(0,0%,59%,.1);">相关推荐</div>
			<div class="block-body">
				<div class="entry-list">

					<a href="/post/5a54cc75518825734107cd73" target="_blank" class="item" style="display: block; padding: .8rem 1.3rem; text-decoration: none;">
						<div class="entry-title" style="font-size: 1.16rem;color: #333;">每个前端工程师都应该了解的HTML5.2</div>
						<div class="entry-meta-box" style="margin-top: .4rem;">
							<div class="entry-meta" style="display: inline-block; margin-right: 1.5rem;font-size: 1.1rem;color: #c2c2c2;">
								<i class="icon ion-heart"></i>
								<span class="count" style="margin-left: .4rem;">282</span>
							</div>
							<div class="entry-meta" style="display: inline-block; margin-right: 1.5rem;font-size: 1.1rem;color: #c2c2c2;">
								<i class="icon ion-chatbox"></i>
								<span class="count" style="margin-left: .4rem;">26</span>
							</div>
						</div>
					</a>

				</div>
			</div>
		</div>

		<!-- 感兴趣的人 -->
		<div class="sidebar-block user-block" style="background-color: #fff;box-shadow: 0 1px 2px 0 rgba(0,0,0,.05);border-radius: 2px;margin-bottom: 1.3rem;font-size: 1.16rem;line-height: 1.29;color: #333;">
			<header class="user-block-header" style="padding: 1rem 1.3rem;border-bottom: 1px solid hsla(0,0%,59%,.1)">你可能感兴趣的人</header>
			<ul style="padding: 0; margin: 0;">
				<li style="list-style: none;">
					<a href="" target="_blank" class="link" style="padding: 1rem 1.3rem;display: -webkit-box;display: -ms-flexbox;display: flex; -webkit-box-align: center;-ms-flex-align: center; align-items: center;cursor: pointer;">
						<div class="lazy avatar avatar loaded" title="" style="background-image: url(&quot;https://avatars.githubusercontent.com/u/20717877?v=3&quot;); -webkit-box-flex: 0;-ms-flex: 0 0 auto;flex: 0 0 auto;width: 3rem;height: 3rem;border-radius: 50%; margin-right: .8rem;display: inline-block;position: relative; background-position: 50%;background-size: cover;background-repeat: no-repeat;background-color: #eee;"></div>
						<div class="user-info" style="verflow: hidden;">
							<div class="username" style="color: #333; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">chenhongdong</div>
							<div class="position" style="color: #909090;font-size: 1rem;white-space: nowrapoverflow: hidden; text-overflow: ellipsis;">前端开发 @ 360</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection

<style>
	.Card {
    margin-bottom: 10px;
    background: #fff;
    overflow: hidden;
    border-radius: 2px;
    box-shadow: 0 1px 3px rgba(26,26,26,.1);
    box-sizing: border-box;
}
.Card-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 50px;
    padding: 0 20px;
    border-bottom: 1px solid #f6f6f6;
    box-sizing: border-box;
}
.Card-headerText {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-weight: 600;
    font-synthesis: style;
}
.Card-section {
    padding: 16px 20px;
    position: relative;
}
.AnswerAuthor-user {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.AnswerAuthor-user-avatar {
    margin-right: 12px;
}
.AnswerAuthor-user-avatar span {
	display: block;
}
.AnswerAuthor-user-content {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    overflow: hidden;
}
.AnswerAuthor-user-name {
    font-size: 20px;
    font-weight: 600;
    font-synthesis: style;
    line-height: 30px;
    color: #1a1a1a;
}
.AnswerAuthor-counts {
    font-size: 14px;
    text-align: center;
}
.NumberBoard {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.NumberBoard-item.Button {
    border: 0;
    line-height: unset;
    font-size: unset;
}

.NumberBoard-item {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.Button--link, .Button--plain {
    height: auto;
    padding: 0;
    line-height: inherit;
    background-color: transparent;
    border: none;
    border-radius: 0;
}
.NumberBoard-itemInner {
    text-align: center;
    line-height: 1.6;
}
.NumberBoard-itemName {
    font-size: 14px;
    color: #8590a6;
}
.NumberBoard-itemValue {
    display: inline-block;
    font-size: 18px;
    color: #1a1a1a;
    font-weight: 600;
    font-synthesis: style;
}
.AnswerAuthor-buttons {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 16px;
}



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