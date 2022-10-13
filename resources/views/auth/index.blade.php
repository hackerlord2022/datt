<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- course-login40:16  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>LearnPLUS | Learning Management System HTML Template</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{asset('images/xapple-touch-icon-72x72.png.pagespeed.ic.lf5d8kCpOf.pn')}}g" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{asset('images/xapple-touch-icon-76x76.png.pagespeed.ic.ATZZpSeito.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{asset('images/xapple-touch-icon-114x114.png.pagespeed.ic.Fi5O5s2tzL.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{asset('images/xapple-touch-icon-120x120.png.pagespeed.ic.uPQH0sygdV.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{asset('images/xapple-touch-icon-144x144.png.pagespeed.ic.yZ9-_sm5OF.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{asset('images/xapple-touch-icon-152x152.png.pagespeed.ic.gThaVrKtXF.png')}}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{asset('images/xapple-touch-icon-180x180.png.pagespeed.ic.Q8Pmsj5fQM.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css')}}"
        media="screen" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('A.fonts%2c%2c_font-awesome-4.3.0%2c%2c_css%2c%2c_font-awesome.min.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_animate.css%2cMcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/A.carousel.css.pagespeed.cf.VktteGiLwl.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css')}}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">
    <div id="loader">
        <div class="loader-container">
            <img src="{{asset('images/site.gif')}}" alt="" class="loader-site">
        </div>
    </div>
    <div id="wrapper">
        <div class="container">
            <div class="row login-wrapper">
                <div class="col-md-6 col-md-offset-3">
                    <div class="logo logo-center">
                        <a href="{{asset('index-2.html')}}"><img
                                src="{{asset('images/xlogin-logo.png.pagespeed.ic.rk5LaeLYSz.png')}}" alt=""></a>
                    </div>
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Đăng nhập</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Đăng ký</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="{{ route('login') }}" method="post" role="form"
                                        style="display: block;">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" name="email" :value="old('email')" required
                                                autofocus class="form-control" placeholder="Email của bạn" value="">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" name="password" required
                                                autocomplete="current-password" class="form-control"
                                                placeholder="Mật khẩu">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="form-control btn btn-default">Đăng
                                                        nhập</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Quên mật khẩu?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                    <!--  -->
                                    <form id="register-form" action="{{ route('register') }}" method="post" role="form"
                                        style="display: none;">
                                        @csrf

                                        <div class="form-group">

                                            <input id="name" class="form-control" type="text" name="name"
                                                :value="old('name')" required autofocus placeholder="Tên của bạn">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" name="email" :value="old('email')" required
                                                class="form-control" placeholder="Địa chỉ email">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" name="password" required
                                                autocomplete="new-password" class="form-control" placeholder="Mật khẩu">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input id="password_confirmation" type="password"
                                                name="password_confirmation" required class="form-control"
                                                placeholder="Nhập lại mật khẩu">
                                            <x-input-error :messages="$errors->get('password_confirmation')"
                                                class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="submit"
                                                        class="form-control btn btn-default btn-block">Đăng ký tài
                                                        khoản</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js')}}"></script>
    <script>
    eval(mod_pagespeed_gFRwwUbyVc);
    </script>
    <script>
    eval(mod_pagespeed_rQwXk4AOUN);
    </script>
    <script>
    eval(mod_pagespeed_U0OPgGhapl);
    </script>
    <script src="{{asset('js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js')}}"></script>
    <script>
    eval(mod_pagespeed_6Ja02QZq$f);
    </script>
    <script>
    eval(mod_pagespeed_KxQMf5X6rF);
    </script>
</body>

<!-- course-login40:17  -->

</html>