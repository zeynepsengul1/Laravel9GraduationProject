<!-- header -->
<header xmlns="http://www.w3.org/1999/html">
    <!-- header inner -->
    <div class="header">
        <div class="head_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="top-box">
                            <ul class="sociel_link">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="top-box">
                            <p>long established fact that a reader will be </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="index.html"><img src="{{asset('assets')}}/images/logo.jpg" alt="logo"/></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">

                                <ul class="menu-area-main">
                                    <li class="dropdown nav-item nav-link" style="color: black ">
                                        @php
                                            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
                                        @endphp
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="/">Categories</a>
                                        <ul class="dropdown-menu">
                                            @foreach($mainCategories as $rs)
                                                @if(count($rs->children))
                                                    <li>
                                                        <a href="{{route('categoryprojects',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}
                                                            <i class="bi bi-caret-right-fill"></i></a>
                                                        <ul>
                                                            @include('home.categorytree',['children'=>$rs->children])
                                                        </ul>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{route('categoryprojects',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li> <a href="{{route('home')}}">Home</a> </li>
                                    <li> <a href="{{route('about')}}">About</a> </li>
                                    <li> <a href="{{route('references')}}">References</a> </li>
                                    <li> <a href="{{route('projects')}}">Project</a> </li>
                                    <li> <a href="blog.html"> Blog</a> </li>
                                    <li> <a href="{{route('contact')}}">Contact</a> </li>
                                    <li>@auth
                                            <a href="/logout" class="text-uppercase"> Logout</a> @endauth </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                @auth
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa-fa-user-o"></i>
                        </div>
                        <strong class="text-uppercase">{{Auth::user()->name}} <i class="fa fa-caret-down"></i></strong>
                    </div>
                @endauth
                @guest <a class="text-uppercase" href="/loginuser" >Login</a>/<a href="/registeruser" class="text-uppercase">Register</a>
                @endguest
                <ul class="custom-menu">
                    <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user-o"></i>My Account</a></li>
                    <li><a href="#"><i class="fa fa-heart-o"></i>My wishlist</a></li>
                    <li><a href="#"><i class="fa fa-exchange"></i>Compare</a></li>
                    <li><a href="#"><i class="fa fa-check"></i>Checkout</a></li>
                    <li><a href="#"><i class="fa fa-unlock-alt"></i>Login</a></li>
                    <li><a href="#"><i class="fa fa-user-plus"></i>Create an Account</a></li>

                </ul>
                </li>
            </div>
        </div>
        <!-- end header inner -->
</header>
<!-- end header -->
