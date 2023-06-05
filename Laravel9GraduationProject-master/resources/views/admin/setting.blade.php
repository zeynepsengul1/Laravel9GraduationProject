@extends('layouts.adminbase')

@section('Title','Settings')

@section('head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Settings</h2>
                    <h5>Welcome Jhon Deo , Love to see you back. </h5>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade active in" id="home">
                    <div class="col-md-16">
                        <h3>Project Elements</h3>
                        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                            <section class="content"
                            @csrf
                            <div class="row">
                                <div class="card card-primary card-tabs col-12">
                                    <div class="card-header p-0 pt-1"></div>
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general"  role="tab" aria-controls="custom-tabs-one-home"  aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp"  role="tab"  aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social"  role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social Media </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact"  role="tab"  aria-controls="custom-tabs-one-contact"  aria-selected="false">Contact Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="custom-tabs-one-about-tab" data-toggle="pill" href="#custom-tabs-one-about"  role="tab"  aria-controls="custom-tabs-one-about"  aria-selected="false">About Us Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references"  role="tab" aria-controls="custom-tabs-one-references"  aria-selected="false">References</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab"></div>
                                        <input type="hidden" id="id" value="{{$data->id}}" class="form-control">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                            </div>

                           <div class="form-group">
                               <label>Keywords</label>
                               <input type="text"  name="keywords" value="{{$data->keywords}}" class="form-control">
                             </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text"  name="description" value="{{$data->description}}" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="text"  name="company" value="{{$data->company}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text"  name="address" value="{{$data->address }}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text"  name="phone" value="{{$data->phone }}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>email</label>
                                            <input type="text"  name="email" value="{{$data->email }}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2" name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                    <label>Icon input</label>
                                    <input type="file" name="icon" >
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Setting</button>
                                </div>


                                    <div class="tab-pane fade show active " id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-smtp-tab">
                                        <div class="form-group">
                                            <label>Smtp Server</label>
                                            <input type="text"  name="smtpserver" value="{{$data->smtpserver }}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Smtp Email</label>
                                            <input type="text"  name="smtpemail" value="{{$data->smtpemail }}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>SmtpPassword</label>
                                            <input type="text"  name="smtppassword" value="{{$data->smtpassword }}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>SmtpPort</label>
                                            <input type="text"  name="smtpport" value="{{$data->smtpport }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social-tab">

                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text"  name="facebook" value="{{$data->facebook }}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text"  name="instagram" value="{{$data->instagram }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text"  name="twitter" value="{{$data->twitter }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input type="text"  name="youtube" value="{{$data->youtube }}" class="form-control">
                                        </div>
                                    </div>

                                        <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel" aria-labelledby="custom-tabs-one-about-tab">
                                            <div class="form-group">
                                                <label>About Us</label>
                                                <textarea id="aboutus"  name="aboutus" value="{{$data->aboutus }}"></textarea  >
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                                            <div class="form-group">
                                                <label> Contact</label>
                                                <textarea id="contact"  name="contact" value="{{$data->contact }}"></textarea  >
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                            <div class="form-group">
                                                <label> References</label>
                                                <textarea id="references"  name="references" value="{{$data->references }}"></textarea  >
                                            </div>
                                        </div>
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Setting</button>
                        </div>
                       </div>
                        </div>

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

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function() {
            $('.textarea').summernote()
        })
    </script>
