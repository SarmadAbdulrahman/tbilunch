@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Branch Agent {{$BranchName}}</a>
                </li>
                <li>
                    <a href="#">Password</a>
                </li>
                <li class="active">create new Password</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>


                    Password
                    <small>
                        <i class="fa fa-angle-right"></i>
                        create a Password
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="default.htm">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->
        <div class="page-body">
            <h5 class="row-title"><i class="typcn typcn-th-small"></i>{{trans('messages.Create_ticket')}}</h5>
            <div class="row">


                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bg-blue">
                                    <span class="widget-caption">{{ trans('messages.ticket_form') }} </span>
                                </div>
                                <div class="widget-body">
                                    <div id="registration-form">
                                        <form role="form" method="post" id="cc"
                                              action="{{url('Branch/StorePassword')}}">
                                            @csrf
                                            <div class="form-title">
                                                {{ trans('messages.ticket_information') }}
                                            </div>


                                            <div class="form-group">

                                            </div>


                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" name="OldPassword"
                                                           id="OldPassword" placeholder="OldPassword">
                
                                                </span>
                                            </div>

                                          


                                                                    <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" name="NewPassword">
                            <div class="input-group-addon" name="NewPassword">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                            


                                                                    <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" name="ConfirmPassword">
                            <div class="input-group-addon" name="ConfirmPassword">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>

                                            






                                            <hr class="wide"/>
                                            <button type="submit"
                                                    class="btn btn-blue">{{ trans('messages.Save') }}</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.ThemeSource.footer')
@section('js')
    <script>
        $(document).ready(function () {
            // this is for get a way  department


            $('.Services').select2({
                placeholder: 'اختر الخدمه'
            });


            //  $("#myForm").submit();

            var frm = $('#cc');


            frm.submit(function (e) {

                e.preventDefault();

                $.ajax({
                    type: frm.attr('method'),
                    url: frm.attr('action'),
                    data: frm.serialize(),
                    success: function (data) {
                        console.log('Submission was successful.');

                        Swal.fire(
                            '{{ trans('messages.success') }}',
                            '{{ trans('messages.ticket_created') }}',
                            'success'
                        );


                        console.log(data);
                    },
                    error: function (data) {
                        Swal.fire(
                            'fail',
                            'please fill all field',
                            'fail'
                        );
                    },
                });


            });


 $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });








        });
    </script>
@endsection
