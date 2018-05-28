<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>


    <div class="App-main">
        <div class="SignFlowHomepage">
            <div class="SignFlowHomepage-content">
                <div class="Card SignContainer-content">
                    <div class="SignFlowHeader" style="padding-bottom:5px">
                        <h1 class="SignFlowHeader-title">View<span>新视角</span></h1>
                        <div class="SignFlowHeader-slogen">注册我们，发现不一样的自己</div>
                    </div>
                    <div class="SignContainer-inner">
                        <div class="Register">
                            <div>
                                <div class="Register-content">
                                    <form  method="POST" action="{{ route('register') }}" accept-charset="utf-8">
                                        {{ csrf_field() }}
                                        <div class="SignFlow-account">
                                            <div class="SignFlow-supportedCountriesSelectContainer">
                                                <div class="Popover SignFlow-supportedCountriesSelect">
                                                    <span class="Popover_text">姓名</span>
                                                </div>
                                            </div>
                                            <div class="SignFlowInput SignFlow-accountInputContainer">
                                                <div class="Input-wrapper">
                                                    <input type="text" name="name" class="Input" value="{{ old('name') }}" placeholder="请输入用户名" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                        <div class="SignFlow-account">
                                            <div class="SignFlow-supportedCountriesSelectContainer">
                                                <div class="Popover SignFlow-supportedCountriesSelect">
                                                    <span class="Popover_text">邮箱</span>
                                                </div>
                                            </div>
                                            <div class="SignFlowInput SignFlow-accountInputContainer">
                                                <div class="Input-wrapper">
                                                    <input type="email" name="email" value="{{ old('email') }}" class="Input" placeholder="请输入邮箱" required>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                        <div class="SignFlow-account">
                                            <div class="SignFlow-supportedCountriesSelectContainer">
                                                <div class="Popover SignFlow-supportedCountriesSelect">
                                                    <span class="Popover_text">密码</span>
                                                </div>
                                            </div>
                                            <div class="SignFlowInput SignFlow-accountInputContainer">
                                                <div class="Input-wrapper">
                                                    <input type="password" name="password" class="Input" placeholder="请输入密码" required>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                        <div class="SignFlow-account">
                                            <div class="SignFlow-supportedCountriesSelectContainer">
                                                <div class="Popover SignFlow-supportedCountriesSelect">
                                                    <span class="Popover_text">确认密码</span>
                                                </div>
                                            </div>
                                            <div class="SignFlowInput SignFlow-accountInputContainer">
                                                <div class="Input-wrapper">
                                                    <input type="password" name="password_confirmation" class="Input" placeholder="请再次输入密码" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="SignFlow-account">
                                            <div class="SignFlow-supportedCountriesSelectContainer">
                                                <div class="Popover SignFlow-supportedCountriesSelect">
                                                    <span class="Popover_text">验证码</span>
                                                </div>
                                            </div>
                                            <div class="SignFlowInput SignFlow-accountInputContainer">
                                                <div class="Input-wrapper">
                                                    <input id="captcha" class="Input" placeholder="请输入验证码" required name="captcha" >

                                                    <img class="thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码" style="    margin-bottom: 2px; border: 0 none; cursor: pointer;">
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('captcha'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('captcha') }}</strong>
                                            </span>
                                        @endif

                                        <button type="submit" class="Button Register-submitButton Button--primary Button--blue">注册</button>
                                    </form>
                                    <div class="Register-footer">
                                        <span class="Register-declaration">
                                            注册即代表同意<span href="https://www.zhihu.com/terms">《view协议》</span>
                                            <span href="https://www.zhihu.com/terms/privacy">《隐私政策》</span>
                                        </span>
                                        <a class="Register-org" href="{{ route('helps.index') }}" style="color: #0084ff;">意见与反馈</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SignContainer-switch">已有帐号？<a href="{{ route('login') }}" style="color: #0084ff;">登录</a></div>
                    </div>
                </div>
                <footer class="SignFlowHomepage-footer"><div class="ZhihuLinks"><a target="_blank" rel="noopener noreferrer" href="https://zhuanlan.zhihu.com">veiw专栏</a><a target="_blank" rel="noopener noreferrer" href="/roundtable">圆桌</a><a target="_blank" rel="noopener noreferrer" href="/explore">发现</a><a target="_blank" rel="noopener noreferrer" href="/app">移动应用</a><a target="_blank" rel="noopener noreferrer" href="/contact">联系我们</a><a target="_blank" rel="noopener noreferrer" href="/careers">来view工作</a><a target="_blank" rel="noopener noreferrer" href="/org/signup">注册机构号</a></div><div class="ZhihuRights"><span>© 2018 view</span><a target="_blank" rel="noopener noreferrer" href="http://www.miibeian.gov.cn/">京 ICP 证 110745 号</a><span>京公网安备 11010802010035 号<a href="http://zhstatic.zhihu.com/assets/zhihu/publish-license.jpg" target="_blank" rel="noopener noreferrer">出版物经营许可证</a></span></div><div class="ZhihuReports"><a target="_blank" rel="noopener noreferrer" href="https://zhuanlan.zhihu.com/p/28852607">侵权举报</a><a target="_blank" rel="noopener noreferrer" href="http://www.12377.cn">网上有害信息举报专区</a><a target="_blank" rel="noopener noreferrer" href="/jubao">儿童色情信息举报专区</a><span>违法和不良信息举报：010-82716601</span></div><div class="ZhihuIntegrity"><div><a href="https://credit.szfw.org/CX20170607038331320388.html">诚信网站示范企业</a></div></div></footer>
            </div>
        </div>
    </div>
</body>
</html>
