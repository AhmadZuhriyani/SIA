@extends('auth.layouts.master')
@section('content')


    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form class="form-signin" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                {{csrf_field()}}
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" required="" name="email" />
                @if ($errors->has('email'))
                     <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                     </span>
                @endif
              </div>
              <div>
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required="" name="password" />
                @if ($errors->has('password'))
                     <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                     </span>
                @endif
              </div>
              <div>
                <button type="submit" class="btn col-md-12">
                  {{ __('Login') }}
                  </button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum Punya Akun ?
                  <a href="{{route('register')}}" "> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> CRUD SIA (Sistem Informasi Akademik)</h1>
                  <p>&copy FTI 2018 By Ahmad Zuhriyani | Agus Krisdianto | Anugerah Noor Iman | Akhmad Rinaldi Noor</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>




@endsection