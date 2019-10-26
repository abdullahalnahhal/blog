@extends('guest.layout.main')
@section('content')

		<div id="box-slide" class="owl-carousel owl-theme page-slider">
      @include('guest.layout.slider')
		</div><!-- Box owl carousel end-->
		<section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
					 @php
					 	$counter = 0;
					 @endphp
					 @foreach(\App\Models\Fields::main(3) as $field)
            <div class="col-md-4">
               <div class="ts-service-box">
                  <!-- <div class="ts-service-image-wrapper">
                     <img class="img-responsive" src="images/services/service1.jpg" alt="">
                  </div> -->
                  <div class="ts-service-box-img pull-left">
                     <img src="{{asset('images\vector\\'.$field->icon)}}" alt="">
                  </div>
                  <div class="ts-service-info">
                     <h3 class="service-box-title"><a href="{{route('field',['id'=>$field->id])}}">{{$field->title}}</a></h3>
                     <p>{!!Str::limit(strip_tags($field->content), 100, ' ...')!!}</p>
                     <p><a class="learn-more" href="{{route('field', ['id'=>$field->id])}}"><i class="fa fa-caret-right"></i> Learn More</a></p>
                  </div>
               </div><!-- Service end -->
            </div><!-- Col end -->
						@php
						$counter ++;
						@endphp
						@if($counter % 3 == 0)
						<div class="gap-30"></div>
						@endif
						@endforeach
         </div><!-- Main row end -->
      </div><!-- Conatiner end -->
   </section>
@endsection
