@extends('layouts.frontbase')

@section('title','References | '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')

    <div  id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>

                <li class="active"> /Contact</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $setting->contact  !!}
                </div>
            </div>
        </div>
    </div>

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
        <h1>{{Session::get('info')}}</h1>
                    @include( 'home.messages')
                    <form  id="checkout-form" action="{{route("storemessage")}}" class="clearfix" method="post">
                       @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Name&Surname" type="text" name="name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Phone Number" type="text" name="phone">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Subject" type="text" name="Subject">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('assets')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/assets/js/jquery.scrolly.min.js"></script>
    <script src="{{asset('assets')}}/assets/js/jquery.scrollex.min.js"></script>
    <script src="{{asset('assets')}}/assets/js/main.js"></script>

@endsection
