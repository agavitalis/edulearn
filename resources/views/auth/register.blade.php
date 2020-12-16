@extends('layouts.auth')

@section('content')
<div class="row">
  <div class="col-xl-7"><img class="bg-img-cover bg-center" src="https://admin.pixelstrap.com/cuba/assets/images/login/1.jpg" alt="looginpage"></div>
  <div class="col-xl-5 p-0">
    <div class="login-card">
      <div>
        <div><a class="logo text-left" href="index.html"><img class="img-fluid for-light" src="../appp/images/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="https://admin.pixelstrap.com/cuba/assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
        <div class="login-main">
          <!-- Validation Errors -->
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
          <form class="theme-form" method="POST" action="{{ route('register') }}">
            @csrf
            <h4>Create your account</h4>
            <p>Enter your personal details to create account</p>
            <div class="form-group">
              <label class="col-form-label pt-0">Your Name</label>
              <div class="form-row">
                <div class="col-6">
                  <input class="form-control" type="text" name="first_name" required="" value="{{old('first_name')}}" placeholder="First name">
                </div>
                <div class="col-6">
                  <input class="form-control" type="text" name="last_name" required="" value="{{old('last_name')}}" placeholder="Last name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label">Email Address</label>
              <input class="form-control" type="email" name="email" required="" alue="old('email')" placeholder="Test@gmail.com">
            </div>
            <div class="form-group">
              <label class="col-form-label">Password</label>
              <input class="form-control" type="password" name="password" required="" placeholder="*********">
              <div class="show-hide"><span class="show"></span></div>
            </div>
            <div class="form-group">
              <label class="col-form-label">Confirm Password</label>
              <input class="form-control" type="password" name="password_confirmation" required="" placeholder="*********">
              <div class="show-hide"><span class="show"></span></div>
            </div>
            <div class="form-group mb-0">
              <div class="checkbox p-0">
                <input id="checkbox1" type="checkbox">
                <label class="text-muted" for="checkbox1">Agree with<a class="ml-2" href="#">Privacy Policy</a></label>
              </div>
              <button class="btn btn-primary btn-block" type="submit">Create Account</button>
            </div>
            <h6 class="text-muted mt-4 or">Or signup with</h6>
            <div class="social mt-4">
              <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
            </div>
            <p class="mt-4 mb-0">Already have an account?<a class="ml-2" href="/login">Sign in</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection