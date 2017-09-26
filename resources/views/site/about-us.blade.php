@extends('site-layout.master')
@section('content')
    <!-- end nav -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">ABOUT ASH</h2>
                {{--<h5 class="sub-title">{{$about->header}}</h5>--}}
            </div>
        </div>
    </div>
    </header>
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
                        </div>
                        <!-- end inner -->
                    </div>
                    <!-- end table -->

                </div>
                <!-- end col-6 -->
            </div>
        </div>
    </section>
    {{--<section class="team-members">--}}
    {{--<div class="container wow fadeInUp">--}}
    {{--<div class="row">--}}
    {{--@foreach($team as $item)--}}
    {{--<div class="col-md-4 col-sm-4">--}}
    {{--<figure><img src="{{url('public/uploads/'.$item->image)}}" alt="Image">--}}
    {{--<figcaption>--}}
    {{--<h3>{{$item->name}}</h3>--}}
    {{--<h6>{{$item->position}}</h6>--}}
    {{--</figcaption>--}}
    {{--</figure>--}}
    {{--</div>--}}
    {{--@endforeach--}}

    {{--<!-- end col-4 -->--}}
    {{--</div>--}}
    {{--<!-- end row -->--}}
    {{--</div>--}}
    {{--<!-- end container -->--}}
    {{--</section>--}}
    <!-- end team-members -->
    <!-- end fun-facts -->

    <section class="logos">
        <div class="container wow fadeInUp">
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
    <!-- end quote -->
@endsection
