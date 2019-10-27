@extends('guest.layout.main')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('guest/images/banner/banner2.jpg')}})">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="banner-heading">
            <h1 class="banner-title">@lang('sidebar.Fields')</h1>
            <ol class="breadcrumb">
              <li><a href="{{route('index')}}">@lang('sidebar.Home')</a></li>
            	<li>@lang('sidebar.Videos')</li>
        		</ol>
          </div>
    		</div><!-- Col end -->
      </div><!-- Row end -->
		</div><!-- Container end -->
  </div><!-- Banner text end -->
</div>
<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="isotope-nav" data-isotope-nav="isotope">
          <ul>
            <li><a href="#" class="active" data-filter="*">Show All</a></li>
            @foreach($fields as $field)
       			<li><a href="#" data-filter=".{{str_replace(" ", '-', $field->title)}}">{{$field->title}}</a></li>
       			@endforeach
          </ul>
        </div><!-- Isotope filter end -->
      </div><!-- Filter col end -->
    </div><!-- Filter row end -->
    <div id="isotope" class="isotope">
      <div class="row">
        @foreach($videos as $video)
        <div class="col-xs-12 {{str_replace(" ", '-', $video->field->title)}}
          @foreach($video->field->all_parents() as $parent)
          {{str_replace(" ", '-', $parent->title)}}
          @endforeach
          isotope-item">
              <div class='col-md-4'>
                <iframe height="315" style="width:100%" src="{{prepareYoutube($video->link)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class='col-md-8'>
                <h3 class="service-box-title">{{$video->title}}</h3>
                {{$video->description}}
              </div>
          </div>
        </div><!-- Isotope item 1 end -->
        @endforeach
      </div>
    </div><!-- Isotop end -->
  </div><!-- Conatiner end -->
</section>
@endsection
