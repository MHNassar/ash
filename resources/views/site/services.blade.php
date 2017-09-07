@extends('site-layout.master')
@section('content')
    <!-- end nav -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">SERVICES</h2>
                <h5 class="sub-title">Digital experiences are continually</h5>
            </div>
        </div>
    </div>
    </header>
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
@endsection