@extends('site-layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">WORKS</h2>
                <h5 class="sub-title">Your non-spaced grids showcase</h5>
            </div>
        </div>
    </div>
    </header>

    <section class="works">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-xs-12">
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

@endsection