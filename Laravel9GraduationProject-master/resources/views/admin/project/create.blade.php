@extends('layouts.adminbase')

@section('title','Add Project')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Project</h2>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Project</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-16">
                <h3>Project Elements</h3>
                <form role="form" action="{{route('admin.project.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form role="form">

                    <div class="form-group">
                        <label>Parent Project</label>
                        <select class="form-control select2" name="category_id" >
                            @foreach($data as $rs)
                                <option value="{{ $rs->id }}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}} </option>
                            @endforeach
                        </select>


                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title"  placeholder="Please Enter Title">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" name="keywords"  placeholder="Please Enter Keywords">
                        </div>


                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" name="description"  placeholder="Please Enter Description">
                        </div>

                        <div class="form-group">
                            <label>Detail</label>
                            <input class="form-control" name="detail" id="detail"  placeholder="Please Enter detail">

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                        </div>

                        <div class="form-group">
                            <label>Image Input</label>
                            <input type="file" name="image"  placeholder="Please Enter Image">
                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
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
