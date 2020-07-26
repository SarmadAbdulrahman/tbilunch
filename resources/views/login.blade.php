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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
