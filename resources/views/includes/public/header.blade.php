<!--header-container start -->
      <div class="header-container">
        <!-- header-top start -->
        <!-- classes:  -->
        <!-- "dark": dark version of header top e.g. class="header-top dark" -->
        <!-- "colored": colored version of header top e.g. class="header-top colored" -->
        <!-- ================ -->
        <div class="header-top dark">
          <div class="container">
            <div class="row">
              <div class="col-3 col-sm-6 col-lg-9">
                <!-- header-top-first start -->
                <!-- ================ -->
                <div class="header-top-first clearfix">
                  <ul class="social-links circle small clearfix hidden-sm-down">
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <!--<li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>-->
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    <!--<li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>-->
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <!--<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                  </ul>
                  
                  <ul class="list-inline hidden-md-down">
                    <li class="list-inline-item"><i class="fa fa-map-marker pr-1 pl-2"></i>Address, City, Postal Code</li>
                    <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>+00 123 123 123</li>
                    <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-2"></i> example@your_domain.com</li>
                  </ul>
                </div>
                <!-- header-top-first end -->
              </div>
              <div class="col-9 col-sm-6 col-lg-3">

                <!-- header-top-second start -->
                <!-- ================ -->
                <div id="header-top-second"  class="clearfix">

                  <!-- header top dropdowns start -->
                  <!-- ================ -->
                  <div class="header-top-dropdown text-right">
                    <div class="btn-group">
                      <a href="{{ route('register') }}" class="btn btn-default btn-sm"><i class="fa fa-user pr-2"></i> Sign Up</a>
                    </div>
                    <div class="btn-group">
                      <button id="header-top-drop-2" type="button" class="btn dropdown-toggle btn-default btn-sm dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lock pr-2"></i> Login</button>
                      <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-top-drop-2">
                        <li>
                          <form class="login-form margin-clear" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group has-feedback">
                              <label class="control-label">Username</label>
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                              <label class="control-label">Password</label>
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                              <i class="fa fa-lock form-control-feedback"></i>
                            </div>
                            <button type="submit" class="btn btn-gray btn-sm">Log In</button>
                            <span class="pl-1 pr-1">or</span>
                            <a class="btn btn-primary btn-sm" href="{{ url('register') }}" role="button">Sign Up</a>
                            <ul>
                              <li>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                    Forgot your password?</a>
                                @endif
                                </li>
                            </ul>
                            <!-- <span class="text-center">Login with</span>
                            <ul class="social-links circle small colored clearfix">
                              <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul> -->
                          </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--  header top dropdowns end -->
                </div>
                <!-- header-top-second end -->
              </div>
            </div>
          </div>
        </div>
        <!-- header-top end -->

        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header fixed fixed-desktop clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-auto hidden-md-down">
                <!-- header-first start -->
                <!-- ================ -->
                <div class="header-first clearfix">

                  <!-- logo -->
                  <div id="logo" class="logo">
                    <a href="{{ url('/') }}">
                      <img id="logo_img" src="{{ asset('tproject/images/logo_light_blue.png') }}" alt="Nahorr Analytics">
                    </a>
                  </div>

                  <!-- name-and-slogan -->
                  <div class="site-slogan">
                    Template By Nahorr Analytics
                  </div>

                </div>
                <!-- header-first end -->

              </div>
              <div class="col-lg-8 ml-auto">

                <!-- header-second start -->
                <!-- ================ -->
                <div class="header-second clearfix">
                  
                <!-- main-navigation start -->
                <!-- classes: -->
                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                <!-- ================ -->
                <div class="main-navigation main-navigation--mega-menu  animated">
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="navbar-brand clearfix hidden-lg-up">

                      <!-- logo -->
                      <div id="logo-mobile" class="logo">
                        <a href="{{ url('/') }}"><img id="logo-img-mobile" src="{{ asset('tproject/images/logo_light_blue.png') }}" alt="Nahorr Analytics"></a>
                      </div>

                      <!-- name-and-slogan -->
                      <div class="site-slogan">
                        Template By Nahorr Analytics
                      </div>

                    </div>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                      <!-- main-menu -->
                      <ul class="navbar-nav ml-xl-auto">

                        <!-- mega-menu start -->
                        <li class="nav-item dropdown active mega-menu mega-menu--wide">
                          <a href="{{url('/')}}" class="nav-link" aria-expanded="false">Home</a>
                          
                        </li>
                        <!-- mega-menu end -->

                        <!-- mega-menu start -->
                        <li class="nav-item dropdown ">
                          <a href="index-shop.html" class="nav-link dropdown-toggle" id="sixth-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                          <ul class="dropdown-menu" aria-labelledby="sixth-dropdown">
                            <li ><a href="index-shop.html">Shop Home 1</a></li>
                            <li ><a href="index-shop-2.html">Shop Home 2</a></li>
                            <li ><a href="shop-listing-4col.html">Grid - 4 Columns</a></li>
                            <li ><a href="shop-listing-3col.html">Grid - 3 Columns</a></li>
                            <li ><a href="shop-listing-2col.html">Grid - 2 Columns</a></li>
                            <li ><a href="shop-listing-sidebar.html">Grid - With Sidebar</a></li>
                            <li ><a href="shop-listing-list.html">List</a></li>
                            <li ><a href="shop-product.html">Product Page</a></li>
                            <li ><a href="shop-product-2.html">Product Page 2 <span class="badge">v1.3</span></a></li>
                            <li ><a href="shop-cart.html">Shopping Cart</a></li>
                            <li ><a href="shop-checkout.html">Checkout Page - Step 1</a></li>
                            <li ><a href="shop-checkout-payment.html">Checkout Page - Step 2</a></li>
                            <li ><a href="shop-checkout-review.html">Checkout Page - Step 3</a></li>
                            <li ><a href="shop-invoice.html">Invoice</a></li>
                          </ul>
                        </li>

                        <li class="nav-item dropdown ">
                          <a href="{{ url('blog') }}" class="nav-link" aria-expanded="false">Blog</a>
                          
                        </li>

                        <li class="nav-item dropdown ">
                          <a href="{{ url('blog') }}" class="nav-link" aria-expanded="false">Contact</a>
                          
                        </li>
                      </ul>
                      <!-- main-menu end -->
                    </div>
                  </nav>
                </div>
                <!-- main-navigation end -->
                </div>
                <!-- header-second end -->

              </div>
              
            </div>
          </div>
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end