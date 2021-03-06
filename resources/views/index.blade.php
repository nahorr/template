
@extends('layouts.app-index')

@section('content')

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">

      <!-- header-container start -->
      @include('includes.public.header')
      <!-- header-container end -->

      <!-- banner start -->
      <!-- ================ -->
      @include('includes.public.banner')
      <!-- banner end -->

      <div id="page-start"></div>

      <!-- section start -->
      <!-- ================ -->
      <section class="light-gray-bg pv-30 clearfix">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-lg-8">
              <h2 class="text-center mt-4">Core <strong>Features</strong></h2>
              <div class="separator"></div>
              <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="pv-30 ph-20 hc-item-box bordered hc-shadow text-center hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                <h3>Great &amp; elegant</h3>
                <div class="separator clearfix"></div>
                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="pv-30 ph-20 hc-item-box bordered hc-shadow text-center hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                <h3>Great Design</h3>
                <div class="separator clearfix"></div>
                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="pv-30 ph-20 hc-item-box bordered hc-shadow text-center hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                <span class="icon default-bg circle"><i class="fa fa fa-snowflake-o"></i></span>
                <h3>Many Components</h3>
                <div class="separator clearfix"></div>
                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

      <!-- section start -->
      <!-- ================ -->
      <section class="section default-bg clearfix">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="call-to-action text-center">
                <div class="row">
                  <div class="col-lg-8">
                    <h1 class="title">Don't Miss Out Our Offers</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quasi explicabo consequatur consectetur, a atque voluptate officiis eligendi nostrum.</p>
                  </div>
                  <div class="col-lg-4">
                    <br>
                    <p><a href="#" class="btn btn-lg btn-gray-transparent btn-animated">Learn More<i class="fa fa-arrow-right pl-20"></i></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

      <!-- section -->
      <!-- ================ -->
      <section class="pv-30">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-lg-8">
              <h2 class="text-center mt-4">Why <strong>Choose</strong> Us</h2>
              <div class="separator"></div>
              <p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
              <br>
            </div>
          </div>
        </div>
        <div class="slick-carousel content-slider-with-large-controls">
          <div>
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <img src="{{ asset('tproject/images/section-image-1.png') }}" alt="">
                </div>
                <div class="col-lg-6">
                  <p class="space-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At provident modi nobis dolores ratione, maiores beatae vel iste illo incidunt officia sed id cupiditate quasi excepturi</p>
                  <div class="media">
                    <div class="d-flex pr-20">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="fa fa-eye"></i> </span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Many Features</h4>
                      Cras sit amet nibh libero, in gravida nulla. Sollicitudin.
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex pr-20">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="fa fa-trophy"></i> </span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Packed Full Of Features</h4>
                      Cras sit amet nibh libero. Nulla vel metus scelerisque.
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex pr-20">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="fa fa-life-ring"></i> </span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Great Design</h4>
                      Cras sit amet nibh libero. Nulla vel metus scelerisque.
                    </div>
                  </div>
                  <p><a href="page-services.html" class="btn btn-default-transparent btn-animated">Learn More <i class="fa fa-arrow-right pl-10"></i></a></p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="container">
              <div class="row">
                <div class="col-lg-6 text-right">
                  <p class="space-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At provident modi nobis dolores ratione, maiores beatae vel iste illo incidunt officia sed id cupiditate quasi excepturi</p>
                  <div class="media">
                    <div class="media-body">
                      <h4 class="media-heading">Porro ullam volu</h4>
                      Cras sit amet nibh libero, in gravida nulla. Sollicitudin.
                    </div>
                    <div class="d-flex pl-20">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="fa fa-eye"></i> </span>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-body">
                      <h4 class="media-heading">Packed Full Of Features</h4>
                      Cras sit amet nibh libero. Nulla vel metus scelerisque.
                    </div>
                    <div class="d-flex pl-20">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="fa fa-trophy"></i> </span>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-body">
                      <h4 class="media-heading">Great Design</h4>
                      Cras sit amet nibh libero. Nulla vel metus scelerisque.
                    </div>
                    <div class="d-flex pl-20">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="fa fa-life-ring"></i> </span>
                      </a>
                    </div>
                  </div>
                  <p><a href="page-services.html" class="btn btn-default-transparent btn-animated">Learn More <i class="fa fa-arrow-right pl-10"></i></a></p>
                </div>
                <div class="col-lg-6">
                  <img src="{{ asset('tproject/images/section-image-2.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

      <!-- section start -->
      <!-- ================ -->
      <section class="light-gray-bg pv-20">
      </section>
      <!-- section end -->

      <!-- section -->
      <!-- ================ -->
      <section class="pv-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mt-4">What We <strong>Offer</strong></h2>
              <div class="separator-2"></div>
              <p>Lorem ipsum dolor sit amet, lotrem <span class="text-default">some colored text</span>. Nulla explicabo <strong>attention to this</strong> blanditiis, ex cupiditate ipsam debitis rem.</p>
              <ul class="list-icons">
                <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="fa fa-check-square-o"></i> 27 Predifined Home Pages</li>
                <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="fa fa-check-square-o"></i> 190+ HTML files</li>
                <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="fa fa-check-square-o"></i> Great Design</li>
                <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i class="fa fa-check-square-o"></i> Many more...</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Some bold text</strong>, unde voluptatum quidem explicabo et eius aut nisi dolore ut.</p>
              <a href="page-about.html" class="btn btn-default-transparent btn-animation btn-animation--slide-horizontal btn-lg"><i class="fa fa-users pr-2"></i>Learn More</a>
            </div>
            <div class="col-lg-6">
              <br>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs style-1" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-heart pr-2"></i>We Love</a></li>
                <li class="nav-item"><a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">What</a></li>
                <li class="nav-item"><a class="nav-link" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">We Do</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="home">
                  <div class="overlay-container overlay-visible">
                    <img src="{{ asset('tproject/images/section-image-3.jpg') }}" alt="">
                    <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                    <div class="overlay-bottom hidden-xs">
                      <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis sunt, quae alias impedit ea molestias recusandae.
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile">
                  <h3>Laudantium voluptas excepturi hic evenie</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente tempore ipsam tenetur molestias eligendi provident! Itaque sapiente neque esse expedita voluptatibus qui officia, fuga a tempora! Alias voluptate pariatur quo.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium voluptas excepturi hic eveniet deleniti, voluptate fugit quod sapiente ut nulla voluptates neque a rerum! Sed dolores enim veniam, dolor minus.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quos quidem amet sapiente praesentium unde, vel corrupti, vero dicta velit fuga ut at accusantium expedita inventore fugit perferendis non reprehenderit.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="messages">
                  <h3>Lorem ipsum dolor sit amet</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium voluptas excepturi hic eveniet deleniti, voluptate fugit quod sapiente ut nulla voluptates neque a rerum! Sed dolores enim veniam, dolor minus.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quos quidem amet sapiente praesentium unde, vel corrupti, vero dicta velit fuga ut at accusantium expedita inventore fugit perferendis non reprehenderit.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente tempore ipsam tenetur molestias eligendi provident! Itaque sapiente neque esse expedita voluptatibus qui officia, fuga a tempora! Alias voluptate pariatur quo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
      </section>
      <!-- section end -->

      <!-- section -->
      <!-- ================ -->
      <section class="pv-30 light-gray-bg padding-bottom-clear">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-lg-8">
              <h2 class="text-center mt-4">Our <strong>Portfolio</strong></h2>
              <div class="separator"></div>
              <p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
              <br>
            </div>
          </div>
        </div>
        <div class="space-bottom">
          <div class="slick-carousel carousel">
            <div class="image-box hc-shadow text-center">
              <div class="overlay-container">
                <img src="{{ asset('tproject/images/portfolio-1.jpg') }}" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box hc-shadow text-center">
              <div class="overlay-container">
                <img src="{{ asset('tproject/images/portfolio-2.jpg') }}" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box hc-shadow text-center">
              <div class="overlay-container">
                <img src="{{ asset('tproject/images/portfolio-3.jpg') }}" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box hc-shadow text-center">
              <div class="overlay-container">
                <img src="{{ asset('tproject/images/portfolio-4.jpg') }}" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box hc-shadow text-center">
              <div class="overlay-container">
                <img src="{{ asset('tproject/images/portfolio-5.jpg') }}" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box hc-shadow text-center">
              <div class="overlay-container">
                <img src="{{ asset('tproject/images/portfolio-6.jpg') }}" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slick-carousel content-slider">
            <div>
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-lg-8">
                    <div class="testimonial text-center">
                      <div class="testimonial-image">
                        <img src="{{ asset('tproject/images/testimonial-1.jpg') }}" alt="Famous Person" title="Famous Person" class="rounded-circle">
                      </div>
                      <h3 class="mt-3">Just Perfect!</h3>
                      <div class="separator"></div>
                      <div class="testimonial-body">
                        <blockquote>
                          <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
                        </blockquote>
                        <div class="testimonial-info-1">- Famous Person</div>
                        <div class="testimonial-info-2">By Company</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-lg-8">
                    <div class="testimonial text-center">
                      <div class="testimonial-image">
                        <img src="{{ asset('tproject/images/testimonial-2.jpg') }}" alt="Famous Person" title="Famous Person" class="rounded-circle">
                      </div>
                      <h3 class="mt-3">Amazing!</h3>
                      <div class="separator"></div>
                      <div class="testimonial-body">
                        <blockquote>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
                        </blockquote>
                        <div class="testimonial-info-1">- Famous Person</div>
                        <div class="testimonial-info-2">By Company</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="clients-container">
              <div class="clients">
                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="100">
                  <a href="#"><img src="{{ asset('tproject/images/client-1.png') }}" alt=""></a>
                </div>
                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="200">
                  <a href="#"><img src="{{ asset('tproject/images/client-2.png') }}" alt=""></a>
                </div>
                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="300">
                  <a href="#"><img src="{{ asset('tproject/images/client-3.png') }}" alt=""></a>
                </div>
                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="400">
                  <a href="#"><img src="{{ asset('tproject/images/client-4.png') }}" alt=""></a>
                </div>
                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="500">
                  <a href="#"><img src="{{ asset('tproject/images/client-5.png') }}" alt=""></a>
                </div>
                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="600">
                  <a href="#"><img src="{{ asset('tproject/images/client-6.png') }}" alt=""></a>
                </div>
                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="700">
                  <a href="#"><img src="{{ asset('tproject/images/client-7.png') }}" alt=""></a>
                </div>
                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="800">
                  <a href="#"><img src="{{ asset('tproject/images/client-8.png') }}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

      <!-- section start -->
      <!-- ================ -->
      <section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-7" style="background-position: 50% 50%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6 text-center">
              <div class="hc-item-box hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="300">
                <span class="icon dark-bg large circle"><i class="fa fa-diamond"></i></span>
                <h3><strong>Projects</strong></h3>
                <span class="counter">1525</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="hc-item-box hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="300">
                <span class="icon dark-bg large circle"><i class="fa fa-users"></i></span>
                <h3><strong>Clients</strong></h3>
                <span class="counter">1225</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="hc-item-box hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="300">
                <span class="icon dark-bg large circle"><i class="fa fa-cloud-download"></i></span>
                <h3><strong>Downloads</strong></h3>
                <span class="counter">6532</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="hc-item-box hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="300">
                <span class="icon dark-bg large circle"><i class="fa fa-share"></i></span>
                <h3><strong>Sherot</strong></h3>
                <span class="counter">15002</span>
              </div>
            </div>            
          </div>
        </div>
        <!-- footer top start -->
        <!-- ================ -->
        <div class="footer-top animated-text" style="background-color:rgba(0,0,0,0.3);">
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
      </section>
      <!-- section end -->

      <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
      <!-- ================ -->
      @include('includes.public.footer')
      <!-- footer end -->

    </div>
    <!-- page-wrapper end -->

@endsection