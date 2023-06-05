@extends('layouts.frontbase')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('slider')
    @include("home.slider")
@endsection

@section('content')

    <div class="choose_bg">
        <div class="container">
            <div class="white_bg">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="{{asset('assets')}}/icon/1.png"/></i>
                            <h3>Data recovery</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                   </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="{{asset('assets')}}/icon/2.png"/></i>
                            <h3>Computer repair</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="{{asset('assets')}}/icon/3.png"/></i>
                            <h3>Mobile service</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                   </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="{{asset('assets')}}/icon/4.png"/></i>
                            <h3>Network solutions</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end CHOOSE -->
    <!-- service -->

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h2>Service <strong class="black">Process</strong></h2>
                        <span>Easy and effective way to get your device repair</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('assets')}}/icon/service1.png"/></i>
                        <h3>Fast service</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('assets')}}/icon/service2.png"/></i>
                        <h3>Secure payments</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('assets')}}/icon/service3.png"/></i>
                        <h3>Expert team</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('assets')}}/icon/service4.png"/></i>
                        <h3>Affordable services</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('assets')}}/icon/service5.png"/></i>
                        <h3>90 Days warranty</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('assets')}}/icon/service6.png"/></i>
                        <h3>Award winning</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end service -->

    <!-- our product -->
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>our <strong class="black">projects</strong></h2>
                        <span>We package the products with best services to make you a happy customer.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-bg">
        <div class="product-bg-white">
            <div class="container">
                <div class="row">
                    @foreach($projectlist1 as $rs)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <i><img src="{{Storage::url($rs->image)}}"/></i>
                                <h3>Norton Internet Security</h3>
                                <span>$25.00</span>
                                <div style="size: 15px">
                                    <a href="{{route('project',['id'=>$rs->id])}}" class="read-more">More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="Clients_bg_white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h3>What Clients Say?</h3>
                        </div>
                    </div>
                </div>
                <div id="client_slider" class="carousel slide banner_Client" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#client_slider" data-slide-to="0" class="active"></li>
                        <li data-target="#client_slider" data-slide-to="1"></li>
                        <li data-target="#client_slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text-bg">
                                    <div class="img_bg">
                                        <i><img src="{{asset('assets')}}/images/lllll.png"/><span>Jone Due<br><strong
                                                    class="date">12/02/2019</strong></span></i>

                                    </div>

                                    <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am really satisfied with my
                                        first laptop service.<br>
                                        You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am </p>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text-bg">
                                    <div class="img_bg">
                                        <i><img src="{{asset('assets')}}/images/lllll.png"/><span>Jone Due<br><strong
                                                    class="date">12/02/2019</strong></span></i>

                                    </div>
                                    <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am really satisfied with my
                                        first laptop service.<br>
                                        You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am </p>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text-bg">
                                    <div class="img_bg">
                                        <i><img src="{{asset('assets')}}/images/lllll.png"/><span>Jone Due<br><strong
                                                    class="date">12/02/2019</strong></span></i>

                                    </div>
                                    <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am really satisfied with my
                                        first laptop service.<br>
                                        You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="yellow_bg">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                        <div class="yellow-box">
                            <h3>REQUEST A FREE QUOTE<i><img src="{{asset('assets')}}/icon/calll.png"/></i></h3>

                            <p>Get answers and advice from people you want it from.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <div class="yellow-box">
                            <a href="#">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end our product -->
    <!-- map -->
    <div class="container-fluid padi">
        <div class="map">
            <img src="{{asset('assets')}}/images/mapimg.jpg" alt="img"/>
        </div>
    </div>
    <!-- end map -->

@endsection
