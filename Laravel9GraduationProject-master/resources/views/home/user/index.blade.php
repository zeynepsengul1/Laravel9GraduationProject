@extends('layouts.frontbase')

@section('title','User Panel')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <section>
                <h2>UserMenu</h2>
                <div>
                    @include('home.user.usermenu')
                </div>
            </section>
        </div>
        <div class="col-md-8">
            <section>
                <h2>PROFİLE</h2>
                <div>
                    @include('profile.show')
                </div>
            </section>
        </div>
    </div>







@endsection
