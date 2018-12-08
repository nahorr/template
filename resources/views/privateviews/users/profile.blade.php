@extends('layouts.app')

@section('content')

  <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

    <!-- Sidebar Nav -->
    @include('includes.private.sidebar')
    <!-- End Sidebar Nav -->


    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
          <div class="g-pa-20">
            <div class="row">

              <div class="col-md-3 g-mb-30 g-mb-0--md">

                <div class="h-10 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">

	                <!-- User Information -->
	                <section class="text-center g-mb-30 g-mb-50--md">
	                    <div class="d-inline-block g-pos-rel g-mb-20">
	                      
		                    <span class="u-badge-v2--lg u-badge--bottom-right g-width-32 g-height-32 g-bg-secondary g-bg-primary--hover g-transition-0_3 g-mb-20 g-mr-20">
		                        <i id="updateProfilePictureIcon-{{Auth::user()->id}}" class="hs-admin-pencil g-absolute-centered g-font-size-16 g-color-white" ></i>
		                    </span>
		                        @include('privateviews.users.updateprofilepicturemodal')
		                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			                    <script type="text/javascript">
			                      $('#updateProfilePictureIcon-{{Auth::user()->id}}').on('click', function(){
			                        $('#updateProfilePictureModal-{{Auth::user()->id }}').modal('show');
			                      })
			                    </script>

			                    <img class="img-fluid rounded-circle" src="{{ asset('/assets-admin/img/uploads/avatars/'.Auth::user()->avatar ) }}" alt="{{ Auth::user()->name }}"> 	

	                    </div>

	                    <div class="alert alert-success" role="alert">
	                    	<h3 class="g-font-weight-300 g-font-size-20 g-color-black mb-0"><strong>{{ Auth::user()->name }}</strong></h3>
	                    </div>

	                </section>
	                <!-- User Information -->

	            </div>

              </div>

              <div class="col-md-9">
                <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                  <form class="js-validate">
                    <header>
                      <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">General information</h2>
                    </header>

                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#firstName">Full Name</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="firstName" name="firstName" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text" value="{{Auth::user()->name}}" required="required" data-msg="This field is mandatory"
                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>


                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#email">Email</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="email" name="email" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="email" value="{{Auth::user()->email}}" required="required" data-msg="This field is mandatory"
                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>
                
                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                    <div>
                      <button class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Save Changes</button>
                      <button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancel</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>

         
        </div>
  </div>


@endsection
