@extends('guest.layout.main')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('guest/images/banner/banner2.jpg')}})">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="banner-heading">
            <h1 class="banner-title">@lang('sidebar.Contacts')</h1>
            <ol class="breadcrumb">
              <li><a href="{{route('index')}}">@lang('sidebar.Home')</a></li>
            	<li>@lang('sidebar.Contacts')</li>
        		</ol>
          </div>
    		</div><!-- Col end -->
      </div><!-- Row end -->
		</div><!-- Container end -->
  </div><!-- Banner text end -->
</div>
<section id="main-container" class="main-container">
      <div class="container">

         <div class="row text-center">
            <h2 class="section-title">@lang('contacts.Reaching Us')</h2>
            <h3 class="section-sub-title">@lang('contacts.Find Our Location')</h3>
         </div><!--/ Title row end -->

         <div class="row">
            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-map-marker"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>@lang('contacts.Visit Our Office')</h4>
                     <p>{{$contacts['address']??''}}</p>
                 </div>
               </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-envelope"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>@lang('contacts.Email Us')</h4>
                     <p>{{$contacts['email']??''}}</p>
                 </div>
               </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-phone-square"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>@lang('contacts.Call Us')</h4>
                     <p>{{$contacts['mobile']??''}}</p>
                 </div>
               </div>
            </div><!-- Col 3 end -->

         </div><!-- 1st row end -->

         <div class="gap-60"></div>

         <div id="map" class="map"></div>

         <div class="gap-40"></div>

         <div class="row">

            <!-- <div class="col-md-12">

               <h3 class="column-title">@lang('contacts.We love to hear')</h3>

               <form id="contact-form" action="contact-form.php" method="post" role="form">
                  <div class="error-container"></div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>@lang('contacts.Name')</label>
                        <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>@lang('contacts.Email')</label>
                           <input class="form-control form-control-email" name="email" id="email"
                           placeholder="" type="email" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>@lang('contacts.Subject')</label>
                           <input class="form-control form-control-subject" name="subject" id="subject"
                           placeholder="" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>@lang('contacts.Message')</label>
                     <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                  </div>
                  <div class="text-right"><br>
                     <button class="btn btn-primary solid blank" type="submit">@lang('contacts.Send Message')</button>
                  </div>
               </form>
            </div> -->

         </div><!-- Content row -->
      </div><!-- Conatiner end -->
   </section><!-- Main container end -->

@endsection
@push('js')
<script>
/* ----------------------------------------------------------- */
	/*  Contact Map
	/* -----------------------------------------------------------*/

	if ($('#map').length > 0) {

		var contactmap = {
			lat: {{$contacts['lat']??''}},
			lng: {{$contacts['lon']??''}}
		};

		$('#map')
			.gmap3({
				zoom: 13,
				center: contactmap,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false
			})

			.marker({
				position: contactmap
			})

			.infowindow({
				position: contactmap,
				content: "NYC Seminar and Conference Center, New York"
			})

			.then(function (infowindow) {
				var map = this.get(0);
				var marker = this.get(1);
				marker.addListener('click', function () {
					infowindow.open(map, marker);
				});
			});
	}
</script>
@endpush
