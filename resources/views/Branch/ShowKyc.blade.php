@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Branch Agent</a>
                </li>
                <li>
                    <a href="#">Show Appointment</a>
                </li>
                <li class="active">Show Appointment</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                Branch Agent
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Appointment
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="/Branch">
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

        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="widget">
                    <div class="widget-header  with-footer">
                        <span class="widget-caption">Appointment Progress</span>
                        <div class="widget-buttons">
                            <a href="#" data-toggle="maximize">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="#" data-toggle="collapse">
                                <i class="fa fa-minus"></i>
                            </a>
                            <a href="#" data-toggle="dispose">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">

                        <div class="flip-scroll">
                            <table class="table table-bordered table-striped table-condensed flip-content">
                                <thead class="flip-content bordered-palegreen">
                                <tr>
                                    <th>
                                      اسم الزبون
                                    </th>
                                    <th>
                                   اسم االاب والجد
                                    </th>
                                    <th class="numeric">
                                 اللقب
                                    </th>
                                    <th class="numeric">
اسم الام الكامل                                    </th>
                                   

                                    <th class="numeric">
                                        اتخذ اجراء
                                    </th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Posts as $post)
                                <tr>
                                <td>{{$post->First_Name}}</td>
                                <td>{{$post->Middle_Name_Initials}}</td>
                                <td>{{$post->Family_Name}}</td>
                                <td>{{$post->Full_Mother_Name}}</td>
                    
                                 <td>
                                                    <a   href="{{url('Branch/ShowKycdetails')}}?id={{$post->id}}"  class=" btn btn-danger ChangeRole">معاينه</a>
                                </td>
                                </tr>
                             @endforeach
                                </tbody>
                            </table>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">اتخذ الاجراء</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form class="form-inline" method="post" action="{{url('Branch/StoreAction')}}">
                                                    @csrf
                                                    <div class="modal-body">



                                                        <div class="form-group">
                                                            <select class="form-control  input-lg Roles" name="Action">
                                                               
                                                                    <option value="done">تم الاجراء</option>
                                                                    <option value="cancle">ملغي</option>
                                                                
                                                            </select>
                                                            <input type="hidden" class="id" name="id" >
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Body -->
@endsection
@extends('layouts.ThemeSource.footer')

@section('js')
    <script>
        $(document).ready(function () {
            // this is for get a way  department  ChangePassword
          

            $('body').on('click','.ChangeRole',function () {


                var TicketID=$(this).attr('id');

                $('.id').val(TicketID);
                $('#exampleModal').modal('show');


            });







        });
    </script>
@endsection
