@extends('layouts.adminbase')

@section('title','Show Message :'.$data->title)

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <h2>Show Message:{{$data->title}}</h2>

                <div class="col-md-40">
                    <a class="btn btn-primary btn-primary" href="{{route('admin.Message.edit',['id'=>$data->id])}}" style="width:200px" role="button">Edit Message</a>
                    <a class="btn btn-primary btn-primary" href="{{route('admin.Message.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure?')" style="width:200px" role="button">Delete Message</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb fc-agenda-axis">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">HOME</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('admin.Message.show',['id'=>$data->id])}}">SHOW Message</a></li>
                    </ol>
                </div>
            </div>


            <div class="col-md-20">

                <!--    Context Classes  -->
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4> <strong>DETAİL MESSAGE</strong></h4>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:200px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                    <th style="width: 70px">Name Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Phone Number</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>   <tr>
                                    <th style="width: 30px">message</th>
                                    <td>{{$data->message}}</td>
                                </tr>   <tr>
                                    <th style="width: 30px">Ip number</th>
                                    <td>{{$data->ip}}</td>
                                </tr>   <tr>
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
                                <tr>
                        <th>Admin Note: </th>
                                <td>
                                    <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post"  >
                            @csrf
                            <textarea name="note"  id="note" class="textarea">{{$data->note}}</textarea>
                                        <button type="submit" class="btn btn-default">Submit</button>

                                </td>
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
