@extends('layouts.frontbase')

@section('Title','Graduation Project')

@section('content')
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

@endsection
