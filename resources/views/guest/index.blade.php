@extends('guest.layout.main')
@section('content')

		<div id="box-slide" class="owl-carousel owl-theme page-slider">
      @include('guest.layout.slider')
		</div><!-- Box owl carousel end-->
		<section id="main-container" class="main-container">
      <div class="container">
				<div class="row text-center">
					<h2 class="section-title">@lang('home.We Are Specialists In')</h2>
					<h3 class="section-sub-title">@lang('home.What We Do')</h3>
				</div>
				<!--/ Title row end -->
         <div class="row">
					 @php
					 	$counter = 0;
					 @endphp
					 @foreach($fields as $field)
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
	 	<section id="project-area" class="project-area solid-bg">
			<div class="container">
				<div class="row text-center">
					<h2 class="section-title">@lang('home.Work of Excellence')</h2>
					<h3 class="section-sub-title">@lang('home.Recent Works')</h3>
				</div>
				<!--/ Title row end -->
				<div class="row">
					<div class="isotope-nav" data-isotope-nav="isotope">
						<ul>
							<li><a href="#" class="active" data-filter="*">Show All</a></li>
							@foreach($fields as $field)
							<li><a href="#" data-filter=".{{str_replace(" ", '-', $field->title)}}">{{$field->title}}</a></li>
							@endforeach
						</ul>
					</div><!-- Isotope filter end -->


					<div id="isotope" class="isotope" style="position: relative; height: 624px;">
						@foreach($gallery as $image)
						<div class="col-md-4 col-sm-6 col-xs-12 {{str_replace(" ", '-', $image->field->title)}}
							@foreach($image->field->all_parents() as $parent)
							{{str_replace(" ", '-', $parent->title)}}
							@endforeach
							isotope-item" style="position: absolute; left: 0px; top: 0px;">
							<div class="isotope-img-container">
								<a class="gallery-popup cboxElement" href="{{asset('storage/'.basename($image->image))}}">
									<img class="img-responsive" src="{{asset('storage/'.basename($image->image))}}" alt="" style="width:100%;height:100%">
									<span class="gallery-icon"><i class="fa fa-plus"></i></span>
								</a>
								<div class="project-item-info">
									<div class="project-item-info-content">
										<h3 class="project-item-title">
											<a href="projects-single.html">{{$image->title}}</a>
										</h3>
										<p class="project-cat">
											{{$image->field->title}}
											@if(count($image->field->all_parents()))
											,{{
												implode(', ', collect($image->field->all_parents())->map(function ($value) {
													return $value->title;
												})->toArray())
											}}
											@endif
											</p>
									</div>
								</div>
							</div>
						</div><!-- Isotope item end -->
						@endforeach
					</div><!-- Isotop end -->

					<div class="general-btn text-center">
						<a class="btn btn-primary" href="{{route('gallery')}}">@lang('home.View All Works')</a>
					</div>

				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section>
@endsection
