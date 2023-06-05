@extends('layouts.frontbase')
@section('title','Frequently Asked Questions | '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
        @endsection

@section('content')

        <!DOCTYPE HTML>

    <div  id="breadcrumb">
        <div class="container">
                <div class="titlepage">
                    <h2>Frequently Asked Questions |</h2>
                </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Frequently Asked Questions | </h1>
                    @foreach($datalist as $rs)
                        <h3>{{$rs->question}}</h3>
                        <p>{!! $rs->answer !!}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
