<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- course-list39:58  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>LearnPLUS | 
    @yield('titel')
    </title>
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

<body>
    <div id="loader">
        <div class="loader-container">
            <img src="images/site.gif" alt="" class="loader-site">
        </div>
    </div>
    <div id="wrapper">
        <header class="header">
            <div class="container">
                <div class="hovermenu ttmenu">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="logo">
                                <a class="navbar-brand" href="dashboard"><img
                                        src="images/xlogo.png.pagespeed.ic.vap6Ukaf0i.png" alt=""></a>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav col-md-6">
                                <div class="">
                                <input type="search" class="form-control " placeholder="Tìm kiếm lớp học" aria-label="Search" aria-describedby="search-addon" />
                                </div>
                            </ul>
                            <ul class="nav navbar-nav">
                                <button type="button" class="btn btn-outline-primary">Tìm kiếm</button>
                            </ul>
                        <ul class="nav navbar-nav navbar-right" style="margin-left:5px">
                                <li><a class="btn btn-warning" href="/account">
                                        Quản lý</a></li>
                            </ul>
                            
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="btn btn-primary" href="{{ route('logout') }}"><i class="fa fa-sign-in"></i>
                                        Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
            @yield('main')

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p><a target="_blank" href="">Nhóm 1 Dự án thực tập</a></p>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Ngọc Anh</a></li>
                            <li><a href="#">Ngọc Thịnh</a></li>
                            <li><a href="#">Quang Dự</a></li>
                            <li><a href="#">Thành Lộc</a></li>
                            <li><a href="#">Minh Huy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
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

<!-- course-list39:59  -->

</html>