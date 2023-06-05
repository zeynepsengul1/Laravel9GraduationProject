@extends('layouts.adminbase')

@section('title','Project List')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <!--    Striped Rows Table  -->
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <p>Project List</p>
                        <a class="btn btn-primary btn-warning" href="{{route('admin.project.create')}}" style="width:400px" role="button">Add Project</a>
                        <a href="{{route('admin.index')}}">HOME</a>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Detail</th>
                                    <th>Image</th>
                                    <th>Image Gallery</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->detail}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <img src="{{asset('assets')}}/admin/img/galery.png"  style="height:30px">
                                        </td>

                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.project.edit',['id'=>$rs->id])}}" class="btn btn-danger btn-sm">Edit</a></td>
                                        <td><a href="{{route('admin.project.destroy',['id'=>$rs->id])}}" class="btn btn-success btn-sm" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                        <td><a href="{{route('admin.project.show',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Show</a></td>
                                    </tr>
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
@endsection
