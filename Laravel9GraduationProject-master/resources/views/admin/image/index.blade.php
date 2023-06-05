@extends('layouts.adminwindow')

@section('title','Project Image Gallery')

@section('content')
    <h2>{{$project->title}}</h2>


    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <!--    Striped Rows Table  -->
                <div class="panel panel-default">
                    <form role="form" action="{{route('admin.image.store',['pid'=>$project->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                                <div class="input-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title"  placeholder="Please Enter Title">
                                    <div class="form-group">
                                        <label>Image Input</label>
                                        <input type="file" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary">SAVE</button>


                        </form>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Project Image List</h4>
                        </div>

                    </div>
                        <div class="table-responsive">
                            <table  style="width: 1000px " class="table table-bordered" >
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                                            @endif
                                        </td>
                                        <td>
                                        <a href="{{route('admin.image.destroy',['pid'=>$project->id,'id'=>$rs->id])}}"class="btn btn-danger btn-xs"
                                               onclick="return confirm('Deleting are you sure?')">DELETE</a>
                                        </td>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--  End  Striped Rows Table  -->
            </div>
        </div>
    </div>
    </div>
@endsection





