@extends('site-layout.master')
@section('content')
    <!-- end nav -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">CONTACT</h2>
                <h5 class="sub-title">Just say hi! You are allways welcome</h5>
            </div>
        </div>
    </div>
    </header>
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <address class="wow fadeInUp">
                        <h3>MAIN OFFICE</h3>
                        <h5>You are allways welcome to stop by and say hello !</h5>
                        <p>7-t , Pyramids Gardens - floor 3</p>
                        <p>(+2)010-1114 05 4</p>
                    </address>
                    <form class="wow fadeInUp">
                        <div class="form-group">
                            <input type="text" placeholder="Your name" class="spacing">
                            <input type="text" placeholder="E-mail">
                        </div>
                        <!-- end form-group -->

                        <div class="form-group">
                            <input type="text" placeholder="City" class="spacing">
                            <input type="text" placeholder="Subject">
                        </div>
                        <!-- end form-group -->

                        <div class="form-group">
                            <textarea placeholder="Your message"></textarea>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <button type="button">SUBMIT</button>
                        </div>
                        <!-- end form-group -->
                    </form>
                </div>
                <div class="col-xs-6 map wow fadeInUp" id="map">
                </div>

            </div>
        </div>
    </section>
    <!-- end contact-info -->
    {{--<section class="map wow fadeInUp" id="map">--}}
    {{--</section>--}}
    <!-- end map -->
    <!-- end quote -->
@endsection
