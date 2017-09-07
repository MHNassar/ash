<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASH | Advertising Agency</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="SREATIVE | Digital Agency HTML Template">
    <meta name="keywords" content="html, template, carousel, theme, themezinho, agency, html5">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="SREATIVE | Digital Agency">
    <meta property="og:image" content="http://www.acrocapoeira.com/sreative/preview.png">
    <meta property="og:site_name" content="SREATIVE">
    <meta property="og:title" content="SREATIVE">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.acrocapoeira.com/sreative">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@SREATIVE">
    <meta name="twitter:creator" content="@SREATIVE">
    <meta name="twitter:title" content="SREATIVE">
    <meta name="twitter:description" content="SREATIVE | Digital Agency">
    <meta name="twitter:image" content="http://www.acrocapoeira.com/sreative/preview.png">

    <!-- FAVICON FILES -->
    <link href="{{url('public/ico/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon-precomposed"
          sizes="144x144">
    <link href="{{url('public/ico/apple-touch-icon-114-precomposed.png')}}" rel="apple-touch-icon-precomposed"
          sizes="114x114">
    <link href="{{url('public/ico/apple-touch-icon-72-precomposed.png')}}" rel="apple-touch-icon-precomposed"
          sizes="72x72">
    <link href="{{url('public/ico/apple-touch-icon-57-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{url('public/ico/favicon.png')}}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link href="{{url('public/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('public/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('public/css/jquery.fancybox.css%3Fv=2.1.5.css')}}" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('public/css/settings.css')}}" rel="stylesheet">
    <link href="{{url('public/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="loading yellow-bg">
    <div class="table">
        <div class="inner"><img src="{{url('public/images/logo-light.png')}}" alt="Image">
            <div class="clearfix"></div>
            <div class="spinner"></div>
        </div>
        <!-- end inner -->
    </div>
    <!-- end table -->
</div>
<!-- end loading -->
<div class="transition-overlay yellow-bg"></div>
<!-- end transition-overlay -->
<div class="side-menu"><span class="side-menu-close"><i class="ion-android-close"></i></span>
    <h4>QUICK CONTACT</h4>
    <form>
        <input type="text" placeholder="NAME">
        <input type="text" placeholder="E-MAIL ADDRESS">
        <input type="text" placeholder="SUBJECT">
        <textarea placeholder="YOUR MESSAGE"></textarea>
        <button type="button">SEND MESSAGE</button>
    </form>
    <ul>
        <li class="facebook"><a href="index.php#"><i class="ion-social-facebook"></i></a></li>
        <li class="twitter"><a href="index.php#"><i class="ion-social-twitter"></i></a></li>
        <li class="googleplus"><a href="index.php#"><i class="ion-social-googleplus"></i></a></li>
        <li class="instagram"><a href="index.php#"><i class="ion-social-instagram"></i></a></li>
        <li class="pinterest"><a href="index.php#"><i class="ion-social-pinterest"></i></a></li>
        <li class="youtube"><a href="index.php#"><i class="ion-social-youtube"></i></a></li>
    </ul>
</div>
<!-- end side-menu -->
<header @if(Request::segment(1) !=null) class="int-header" @endif>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{url('public/images/logo-light.png')}}"
                                                      alt="Image"></a></div>
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
                 id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}" class="transition">HOME</a></li>
                    <li><a href="{{url('/about')}}" class="transition">ABOUT US</a></li>
                    <li><a href="{{url('/services')}}" class="transition">OUR SERVICES</a></li>
                    <li><a href="{{url('/work')}}">OUR WORKS</a></li>
                    <li><a href="contact.php" class="transition">CONTACT US</a></li>
                    <li><a href="#" class="hamburger-menu"><i class="ion-navicon"></i></a></li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>

    @yield('content')

    <section class="contact">
        <div class="container wow fadeInUp">
            <div class="row">

                <div class="col-xs-12">
                    <h2>CONTACT</h2>
                </div>
                <!-- end col-12 -->
                <div class="col-md-3">
                    <figure><img src="{{url('public/images/icon5.png')}}" alt="Image"></figure>
                    <dl>
                        <dt>LOCATION</dt>
                        <dd>Ring Central Plot C: 796 A/3 Mango Avenue, Chicago</dd>
                    </dl>
                </div>
                <!-- end col-3 -->
                <div class="col-md-3">
                    <figure><img src="{{url('public/images/icon6.png')}}" alt="Image"></figure>
                    <dl>
                        <dt>PHONE</dt>
                        <dd>+1 (312)/ 564-0034</dd>
                        <dd>+1 (312)/ 988-5738</dd>
                    </dl>
                </div>
                <!-- end col-3 -->
                <div class="col-md-3">
                    <figure><img src="{{url('public/images/icon7.png')}}" alt="Image"></figure>
                    <dl>
                        <dt>E-MAIL</dt>
                        <dd>support [at] sreative.com</dd>
                        <dd>sales@ [at] sreative.com</dd>
                    </dl>
                </div>
                <!-- end col-3 -->
                <div class="col-md-3">
                    <figure><img src="{{url('public/images/icon8.png')}}" alt="Image"></figure>
                    <dl>
                        <dt>Working hours</dt>
                        <dd>Mon-Fri 9.00am - 4.00p
                        <dd>Sat 12.00 - 5.00pm</dd>
                    </dl>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->
    <footer>
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-6"><img src="{{url('public/images/logo-light.png')}}" alt="Image" class="logo">
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur.</p>
                    <p>Magni dolores eos qui ratione voluptatem seqi nesciunt. Neque poro quisquam est, qui dolorem
                        ipsum
                        quia.</p>
                </div>
                <!-- end col-4 -->
                <!-- end col-4 -->
                <div class="col-md-6">
                    <h4>NEWSLETTER</h4>
                    <p>You will be among the first to know about hot new software and great deals on stuff to enhance
                        and
                        promote</p>
                    <form>
                        <input type="text" placeholder="Your e-mail">
                        <button type="submit">SUBSCRIBE</button>
                    </form>
                    <small>* I promise, we won’t spam you!</small>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->
    <section class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6>Copyright © 2015 , SREATIVE | Digital Agency</h6>
                </div>
                <!-- end col-6 -->
                <div class="col-md-6">
                    <h6 class="pull-right">Created by Themezinho with <i class="ion-heart"></i> in Istanbul</h6>
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end sub-footer -->

    <!-- JS FILES -->
    <script src="{{url('public/js/jquery.min.js')}}"></script>
    <script src="{{url('public/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        (function ($) {
            $(window).load(function () {
                $(".loading .table .inner").addClass("fade");
                $('.loading').delay(2000).addClass("fade-out");
            });
        })(jQuery)
    </script>
    <script src="{{url('public/js/waypoints.min.js')}}"></script>
    <script src="{{url('public/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('public/js/isotope.min.js')}}"></script>
    <script src="{{url('public/js/masonry.js')}}"></script>
    <script src="{{url('public/js/wow.js')}}"></script>
    <script src="{{url('public/js/owl.carousel.js')}}"></script>
    <script src="{{url('public/js/jquery.stellar.js')}}"></script>
    <script src="{{url('public/js/jquery.fancybox.js%3Fv=2.1.5')}}" type="text/javascript"></script>
    <script src="{{url('public/js/jquery.themepunch.tools.min.js')}}" type='text/javascript'></script>
    <script src="{{url('public/js/jquery.themepunch.revolution.min.js')}}" type='text/javascript'></script>
    <script src="{{url('public/js/settings.js')}}" type='text/javascript'></script>
    <script src="{{url('public/js/scripts.js')}}" type='text/javascript'></script>
</body>
</html>