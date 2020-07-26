@extends('layouts.ThemeSource.Header')
@section('content')
    <!-- Page Content -->

    <div class="login-container animated fadeInDown">


        <small>
            <img src="{{asset("assets/img/logotext.png")}}" class="img-responseive" alt=""/>
        </small>

        <br>
        <br>

        <div class="loginbox bg-white">


            <div class="loginbox-title">نظام حجز الطلبات</div>


            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif


            <form method="POST" action="{{ route('PostRequest') }}">
                @csrf




                <div class="loginbox-textbox">

                    <input id="email" type="text" class="form-control" name="your_name" placeholder="الاسم" required>

                </div>


                <div class="loginbox-textbox">

                    <input id="email" type="text" class="form-control" name="your_phone" placeholder="رقم الهاتف"
                           required>

                </div>



                <div class="loginbox-textbox">

                    <input id="email" type="email" class="form-control" name="your_email"
                           placeholder="البريد الالكتروني" required>

                </div>


                <div class="loginbox-textbox">
                    <select class="form-control Bracnhes" name="Bracnhes">
                        @foreach($Baranchers as $Barancher)
                            <option value="{{$Barancher->id}}">{{$Barancher->branches_name}}</option>
                        @endforeach
                    </select>

                </div>


                <div class="loginbox-textbox">
                    <select class="form-control services" name="services">
                        @foreach($services as $service)
                            <option value="{{$service->id}}">{{$service->services_name}}</option>
                        @endforeach
                    </select>

                </div>


                <div class="loginbox-submit">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
@extends('layouts.ThemeSource.footer')
@section('js')
    <script>
        $(document).ready(function () {
            // this is for get a way  department  services
            $('.Bracnhes').select2({
                placeholder: 'اختر الفرع'
            });


            var date = new Date();
            date.setDate(date.getDate());

            $('#date').datepicker({
                startDate: date
            });


            $('.services').select2({
                placeholder: 'اختر الخدمه'
            });


            $('.cc').hide();

            $('.Departments').select2({
                placeholder: 'Select Departments'
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
                        //   console.log('Submission was successful.');
                        //  console.log(data);


                        Swal.fire(
                            '{{ trans('messages.success') }}',

                            'success'
                        );
                    },
                    error: function (data) {
                        // console.log('An error occurred.');
                        //  console.log(data);
                        alert("there is error in feilds");
                    },
                });


            });
        });
    </script>
@endsection
