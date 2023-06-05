@extends('layouts.frontbase')

@section('title','User Login Page')


@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">User Login</li>
        </ul>
    </div>
    @include('auth.login')
</div>





<!-- Scripts -->
<script src="{{asset('assets')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/assets/js/jquery.scrolly.min.js"></script>
<script src="{{asset('assets')}}/assets/js/jquery.scrollex.min.js"></script>
<script src="{{asset('assets')}}/assets/js/main.js"></script>
</body>
</html>
@endsection
