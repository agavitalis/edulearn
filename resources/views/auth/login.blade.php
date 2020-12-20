@extends('layouts.auth')

@section('content')

<div class="row">
  <div class="col-xl-7"><img class="bg-img-cover bg-center" src="../../backend/img/2.jpg" alt="looginpage"></div>
  <div class="col-xl-5 p-0">
    <div class="login-card">
      <div>

        <div><a class="logo text-left" href="index.html"><img class="img-fluid for-light" src="../../appp/images/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="https://admin.pixelstrap.com/cuba/assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
        <div class="login-main">
          
          @if ($errors->any())

          <div class="col-md-12">
            <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
              <div class="font-medium text-red-600">
                {{ __('Whoops! Something went wrong.') }}
              </div>

              <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

          </div>
          @endif

          <form class="theme-form" method="POST" action="{{ route('login') }}">
            @csrf

            <h4>Sign in to account</h4>
            <p>Enter your email & password to login</p>
            <div class="form-group">
              <label class="col-form-label">Email Address</label>
              <input class="form-control" type="email" name="email" :value="old('email')" autofocus  required="" placeholder="Test@gmail.com">
            </div>
            <div class="form-group">
              <label class="col-form-label">Password</label>
              <input class="form-control" type="password" name="password" required="" placeholder="*********">
              <div class="show-hide"><span class="show"> </span></div>
            </div>
            <div class="form-group mb-0">
              <div class="checkbox p-0">
                <input id="checkbox1" type="checkbox">

                <label class="text-muted" for="checkbox1">Remember password</label>
              </div>
              <button class="btn btn-primary btn-block" type="submit">Sign in</button>
              <div class="form-group mb-0">

              <div class= "p-0">
                <p class="mt-2 mb-0">Forgot your password?<a class="ml-2" href="{{ route('password.request') }}">Reset it here</a></p>
              </div>
              
            </div>
            </div>
            <h6 class="text-muted mt-4 or">Or Sign in with</h6>
            <div class="social mt-4">
              <div class="btn-showcase"><a class="btn btn-light" href="#"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="#"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="#"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
            </div>
            <p class="mt-4 mb-0">Don't have account?<a class="ml-2" href="/register">Create Account</a></p>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
