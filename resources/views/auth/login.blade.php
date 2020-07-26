@extends('layouts.ThemeSource.Header')
@section('content')
        <!-- Page Content -->
        <div class="login-container animated fadeInDown">


            <small>
                        <img src="{{asset("assets/img/logotext.png")}}" class="img-responseive" alt="" />
                        </small>

                        <br>
                        <br>


            <div class="loginbox bg-white">
                <div class="loginbox-title">تسجيل دخول</div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf


                <div class="loginbox-textbox">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="loginbox-textbox">

                   <div class="input-group" id="show_hide_password">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="input-group-addon" name="ConfirmPassword">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="loginbox-submit">
                    <button type="submit" class="btn btn-primary">Login</button>
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
            // this is for get a way  department



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