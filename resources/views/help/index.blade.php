<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>View-意见反馈</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="padding-top: 56px; min-width: 768px;">


  <a href="{{ url('/') }}">
    <h1 class="feedback-page-logo">View <small>新视角</small></h1>
  </a>

  <div class="container new-collection">
    <div class="row">
      <div class="main">
        <h1>帮助与反馈 <small>请留下您宝贵的意见与建议</small></h1>
        <h4>如需帮助，请前往<a href="javascript:;">view帮助中心</a>，或者<a href="javascript:;">联系我们</a>。</h4>
        <h4>推荐加入View用户群，第一时间获得回复。加入方式：添加&quot;View专题社群委员会委员长&quot;微信号：jysh518，备注“View_web”。</h4>

        @include('common._message')

        <form class="new_app_feedback" action="{{ route('helps.store') }}" accept-charset="UTF-8" method="post">
          {{ csrf_field() }}
          <table>
            <tbody>
              <tr>
                <td class="setting-title pull-left setting-input">
                  <h4>意见反馈 <small>feedback</small></h4>
                </td>
                <td>
                  <textarea placeholder="填写意见反馈" name="idea" id="app_feedback_content" required></textarea>
                  @if ($errors->has('idea'))
                      <span class="help-block">
                          <strong>{{ $errors->first('idea') }}</strong>
                      </span>
                  @endif
                </td>
              </tr>
            </tbody>
            <tbody class="base">
              <tr>
                <td class="setting-title pull-left setting-input">
                  <h4>邮箱地址 <small>email</small></h4>
                </td>
                <td>
                  <input placeholder="请输入邮箱地址" type="text" name="email" id="app_feedback_contact" required />
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                  <p>留下您的联系方式，方便工作人员与您取得联系。</p>
                </td>
              </tr>
            </tbody>
          </table>
          <button type="submit" name="commit" value="提交" class="btn btn-success">留下您的宝贵意见</button>
     </form>
    </div>
   </div>
  </div>

  <div class="help_bottom">
    <img src="http://www.larabbs.com/images/banner-bg.svg" alt="">
  </div>
</body>
</html>