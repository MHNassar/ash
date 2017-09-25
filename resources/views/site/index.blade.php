@extends('site-layout.master')
@section('content')
    <div class="banner">
        <div id="rev_slider_35_1" class="rev_slider fullwidthabanner">
            <ul>
                <li data-transition="scaledownfromtop" data-masterspeed="700"><img
                            src="{{url('public/images/slider1.jpg')}}" alt="Image">
                    <div class="tp-caption lfb ltt tp-resizeme start"
                         data-x="center"
                         data-hoffset="0"
                         data-y="center"
                         data-voffset="0"
                         data-speed="600"
                         data-start="400"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn">
                        <div class="slide-content">
                            {{--<h1>ASH</h1>--}}
                            {{--<h5>Interactive digital experiences are continually becoming more<br>--}}
                                {{--amazing and more complex to produce. Our team is specially designed<br>--}}
                                {{--to create successful.</h5>--}}
                            <div class="clearfix"></div>
                        </div>
                </li>
                <!-- end banner 1 -->
                {{--<li data-transition="scaledownfromtop" data-masterspeed="700"><img--}}
                            {{--src="{{url('public/images/slider2.jp')}}g" alt="Image">--}}
                </li>
                <!-- end banner 2 -->
            </ul>
            <!-- end ul -->
        </div>
        <!-- end rev_slider -->
    </div>
    <!-- end banner -->
    </header>
    <!-- end header -->
    <section class="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 left-side" data-stellar-background-ratio="0.5"></div>
                <!-- end col-6 -->
                <div class="col-md-6 right-side">
                    <div class="table wow fadeInUp">
                        <div class="inner">
                            <h3>ABOUT <span>ASH</span></h3>
                        {!! $about->body !!}
                        <!-- end inner -->
                        </div>
                        <!-- end table -->
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
    </section>
    <!-- end about-us -->

    <section class="services">
        <div class="container wow fadeInUp">
            <div class="row">
                @foreach($servises as $item)
                    <div class="col-md-3 no-padding">
                        <div class="box yellow-bg">
                            <div class="table">
                                <div class="inner"><img src="{{url('public/uploads/'.$item->logo)}}" alt="Image">
                                    <h4>{{$item->title}}</h4>
                                    {!! $item->body !!}

                                </div>
                                <!-- end inner -->
                            </div>
                            <!-- end table -->
                        </div>
                        <!-- end box -->
                    </div>
            @endforeach
            <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- end services -->
    <!-- end fun-facts -->
    <section class="latest-works">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-xs-12">
                    <h3>LATEST <span>WORKS</span></h3>
                    <div class="works-filter"><a href="#" data-filter="*"
                                                 class="current">ALL<span></span></a></div>
                    <!-- end works-filter -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <ul class="wow fadeInUp">
            @foreach($work as $item)
                <li class="video">
                    <figure><img src="{{url('public/uploads/'.$item->image)}}" alt="Image">
                        <figcaption>
                            <div class="table">
                                <div class="inner">
                                    <h4><a href="#">{{$item->title}}</a></h4>
                                    <small>{{$item->body}}</small>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </li>
        @endforeach
        <!-- end work -->

            <!-- end work -->
        </ul>
    </section>
    <!-- end latest works -->

    <section class="logos wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>LOGOS</h2>
                    <div class="logos-carousel">
                        @foreach($clintes as $item)
                            <div class="item">
                                <figure><img src="{{url('public/uploads/'.$item->logo)}}" alt="Image"></figure>
                            </div>
                    @endforeach
                    <!-- end item -->

                        <!-- end item -->
                    </div>
                    <!-- end logos-carousel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end logos -->
    <!-- end latest-news -->
    <!-- end quote -->
@endsection