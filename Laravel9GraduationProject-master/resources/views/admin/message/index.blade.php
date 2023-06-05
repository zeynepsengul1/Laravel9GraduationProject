@extends('layouts.adminbase')

@section('title','Message List')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <!--    Striped Rows Table  -->
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <p>Project List</p>
                        <a class="btn btn-primary btn-warning" href="{{route('admin.message.create')}}" style="width:400px" role="button">Add Project</a>
                        <a href="{{route('admin.index')}}">HOME</a>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>subject</th>
                                    <th>status}</th>
                                    <th>Delete</th>
                                    <th>Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->status}}</td>



                                        <td><a href="{{route('admin.message.edit',['id'=>$rs->id])}}" class="btn btn-danger btn-sm">Edit</a></td>
                                        <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-success btn-sm" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                        <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Show</a></td>
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
