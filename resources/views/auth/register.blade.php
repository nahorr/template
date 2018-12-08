
@extends('layouts.app-public')

@section('content')

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">

      <!-- header-container start -->
      @include('includes.public.header')
      <!-- header-container end -->

      <!-- breadcrumb start -->
      <!-- ================ -->
      <div class="breadcrumb-container">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark" href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Sign Up Page</li>
          </ol>
        </div>
      </div>
      <!-- breadcrumb end -->

      <!-- main-container start -->
      <!-- ================ -->
      <div class="main-container dark-translucent-bg" style="background-image:url('tproject/images/background-img-6.jpg');">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-auto">
              <!-- main start -->
              <!-- ================ -->
              <div class="main hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                <div class="form-block p-30 light-gray-bg border-clear">
                  <h2 class="title">Sign Up</h2>
                  <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group has-feedback row">
                      <label for="inputName" class="col-md-3 control-label text-md-right col-form-label">Full Name <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                        <i class="fa fa-user form-control-feedback pr-4"></i>
                      </div>
                    </div>
                    
                    <div class="form-group has-feedback row">
                      <label for="inputEmail" class="col-md-3 control-label text-md-right col-form-label">Email <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <i class="fa fa-envelope form-control-feedback pr-4"></i>
                      </div>
                    </div>
                    <div class="form-group has-feedback row">
                      <label for="inputPassword" class="col-md-3 control-label text-md-right col-form-label">Password <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <i class="fa fa-lock form-control-feedback pr-4"></i>
                      </div>
                    </div>

                    <div class="form-group has-feedback row">
                      <label for="inputPassword" class="col-md-3 control-label text-md-right col-form-label">Confirm Password <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        <i class="fa fa-lock form-control-feedback pr-4"></i>
                      </div>
                    </div>

<!-- 
                    <div class="form-group row">
                      <div class="ml-md-auto col-md-9">
                        <div class="checkbox form-check">
                          <input class="form-check-input" type="checkbox" required>
                          <label class="form-check-label">
                             Lorem ipsum <a href="#">dolor sit</a> and <a href="#">ametetot unamliage</a>
                          </label>
                        </div>
                      </div>
                    </div> -->

                    <div class="form-group row">
                      <div class="ml-md-auto col-md-9">
                        <button type="submit" class="btn btn-group btn-default btn-animated">Sign Up <i class="fa fa-check"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- main end -->
            </div>
          </div>
        </div>
      </div>
      <!-- main-container end -->

      <!-- footer top start -->
      <!-- ================ -->
      <div class="dark-bg default-hovered footer-top animated-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="call-to-action text-center">
                <div class="row">
                  <div class="col-md-8">
                    <h2 class="mt-4">Powerful Bootstrap Template</h2>
                    <h2 class="mt-4">Waste no more time</h2>
                  </div>
                  <div class="col-md-4">
                    <p class="mt-3"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer top end -->

      <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
      <!-- ================ -->
      @include('includes.public.footer')
      <!-- footer end -->
    </div>
    <!-- page-wrapper end -->

  @endsection  