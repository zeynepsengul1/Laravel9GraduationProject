@extends('layouts.adminbase')

@section('title','Edit Category :'.$data->title)

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Category: {{$data->title}}</h2>
                </div>
            </div>

            <div class="col-md-16">
                <h3>Category Elements</h3>
                <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form role="form">
                        <div class="form-group">
                            <label>Parent Category</label>
                            <select class="form-control select2" name="parent_id" >
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>

                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" value="{{$data->title}}" >
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" name="keywords" value="{{$data->keywords}}">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" name="description" value="{{$data->description}}">
                        </div>

                        <div class="form-group">

                            <label>image input</label>
                            <input type="file" name="image" >
                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>

                    </form>

            </div>
            <hr />

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets')}}/assets/admin/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets')}}/assets/admin/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('assets')}}/assets/admin/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets')}}/assets/admin/js/custom.js"></script>
@endsection
