@extends('layouts.app')

@section('content')

  <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

    <!-- Sidebar Nav -->
    @include('includes.private.sidebar')
    <!-- End Sidebar Nav -->


    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
      <div class="g-pa-20">
        <div class="row">
          <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
            <!-- Panel -->
            <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
              <div class="card-block g-font-weight-300 g-pa-20">
                <div class="media">
                  <div class="d-flex g-mr-15">
                    <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightblue-v3 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                      <i class="hs-admin-briefcase g-absolute-centered"></i>
                    </div>
                  </div>

                  <div class="media-body align-self-center">
                    <div class="d-flex align-items-center g-mb-5">
                      <span class="g-font-size-24 g-line-height-1 g-color-black">99.9%</span>
                      <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                    <i class="g-fill-gray-dark-v9">
                      <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-21.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                    <i class="g-fill-lightblue-v3">
                      <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-33.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon
                                  transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                  points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                  </span>
                    </div>

                    <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Projects Done</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Panel -->
          </div>

          <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
            <!-- Panel -->
            <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
              <div class="card-block g-font-weight-300 g-pa-20">
                <div class="media">
                  <div class="d-flex g-mr-15">
                    <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-teal-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                      <i class="hs-admin-check-box g-absolute-centered"></i>
                    </div>
                  </div>

                  <div class="media-body align-self-center">
                    <div class="d-flex align-items-center g-mb-5">
                      <span class="g-font-size-24 g-line-height-1 g-color-black">324</span>
                      <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                    <i class="g-fill-gray-dark-v9">
                      <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-21.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                    <i class="g-fill-lightblue-v3">
                      <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-33.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon
                                  transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                  points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                  </span>
                    </div>

                    <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Total Tasks</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Panel -->
          </div>

          <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
            <!-- Panel -->
            <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
              <div class="card-block g-font-weight-300 g-pa-20">
                <div class="media">
                  <div class="d-flex g-mr-15">
                    <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-darkblue-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                      <i class="hs-admin-wallet g-absolute-centered"></i>
                    </div>
                  </div>

                  <div class="media-body align-self-center">
                    <div class="d-flex align-items-center g-mb-5">
                      <span class="g-font-size-24 g-line-height-1 g-color-black">$124.2</span>
                      <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                    <i class="g-fill-red">
                      <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-21.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                    <i class="g-fill-gray-dark-v9">
                      <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-33.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon
                                  transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                  points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                  </span>
                    </div>

                    <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Projects Done</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Panel -->
          </div>

          <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
            <!-- Panel -->
            <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
              <div class="card-block g-font-weight-300 g-pa-20">
                <div class="media">
                  <div class="d-flex g-mr-15">
                    <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightred-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                      <i class="hs-admin-user g-absolute-centered"></i>
                    </div>
                  </div>

                  <div class="media-body align-self-center">
                    <div class="d-flex align-items-center g-mb-5">
                      <span class="g-font-size-24 g-line-height-1 g-color-black">148</span>
                      <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                    <i class="g-fill-gray-dark-v9">
                      <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-21.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                    <i class="g-fill-gray-dark-v9">
                      <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-33.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon
                                  transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                  points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                  </span>
                    </div>

                    <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">New Clients</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Panel -->
          </div>



          <!-- Income Card -->
          <div class="col-xl-12">

            <!-- Income Cards -->
            <div class="card g-brd-gray-light-v7 g-mb-30">
              <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                <div class="media-body align-self-center">
                  <h3 class="text-uppercase g-font-size-default g-color-black g-mb-8">Total Income</h3>

                  <div id="rangePickerWrapper3" class="u-datepicker-left u-datepicker--v3 g-pr-10">
                    <input id="rangeDatepicker3" class="g-font-size-12 g-font-size-default--md" type="text" data-rp-wrapper="#rangePickerWrapper3" data-rp-type="range" data-rp-date-format="d M Y" data-rp-default-date='["01 Jan 2016", "31 Dec 2017"]'>
                    <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v3"></i>
                  </div>
                </div>

                <div class="d-flex align-self-end align-items-center">
                  <span class="g-line-height-1 g-font-weight-300 g-font-size-28 g-color-secondary">$48,200</span>
                  
                </div>
              </header>

              <div class="js-custom-scroll g-height-500 g-pa-15 g-pa-0-30-25--md">
                <table class="table table-responsive-sm w-100">
                  <thead>
                    <tr>
                      <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">#</th>
                      <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Name</th>
                      <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Status</th>
                      <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Date</th>
                      <th class="text-right g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">1</td>
                      <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
                      <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                        <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                      </td>
                      <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                      <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
                    </tr>

                    <tr>
                      <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">2</td>
                      <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
                      <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                        <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
                      </td>
                      <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
                      <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
                    </tr>

                  </tbody>
                </table>
              </div>

                <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="65px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="false" data-is-show-point="true" data-is-full-width="true"
                          data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
                          data-align-text-axis-x="center" data-fill-opacity="1" data-fill-colors='["#67c8d8"]' data-stroke-color="#e1eaea" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0" data-text-size-y="14px"
                          data-text-color-y="#53585e" data-points-colors='["#1cc9e4"]' data-series='[
                      [
                        {"meta": "$", "value": 100},
                        {"meta": "$", "value": 2100},
                        {"meta": "$", "value": 350},
                        {"meta": "$", "value": 2920},
                        {"meta": "$", "value": 840},
                        {"meta": "$", "value": 2770}
                      ]
                    ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'>
                    
                </div>
            </div>
            <!-- End Income Cards -->
          </div>
          <!-- End Income Card -->

         
          
        </div>
      </div>

      <!-- Footer -->
      @include('includes.private.footer')
      <!-- End Footer -->

    </div>
  </div>


@endsection
