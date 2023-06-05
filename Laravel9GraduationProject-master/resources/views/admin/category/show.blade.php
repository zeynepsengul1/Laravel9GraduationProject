 @extends('layouts.adminbase')

@section('title','Show Category :'.$data->title)

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <h2>Show Category: {{$data->title}}</h2>

                <div class="col-md-40">
                    <a class="btn btn-primary btn-primary" href="{{route('admin.category.edit',['id'=>$data->id])}}" style="width:200px" role="button">Edit Category</a>
                    <a class="btn btn-primary btn-primary" href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure?')" style="width:200px" role="button">Delete Category</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb fc-agenda-axis">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">HOME</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('admin.category.show',['id'=>$data->id])}}">SHOW CATEGORY</a></li>
                    </ol>
                </div>
            </div>


            <div class="col-md-20">

                <!--    Context Classes  -->
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4> <strong>DETAİL</strong></h4>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:200px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th style="width: 70px">Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>

                                <tr>
                                    <th style="width: 30px">Image</th>
                                    <td>{{$data->image}}</td>
                                </tr>

                                <tr>
                                    <th style="width: 30px">Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>

                                <tr>
                                    <th style="width: 30px">Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
                <!--  end  Context Classes  -->
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
