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
            	<li>@lang('sidebar.Gallery')</li>
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
    <div id="isotope" class="isotope" style="position: relative; height: 608px;">
      @foreach($gallery as $image)
      <div class="col-md-4 col-sm-6 col-xs-12 commercial {{str_replace(" ", '-', $image->field->title)}}
        @foreach($image->field->all_parents() as $parent)
        {{str_replace(" ", '-', $parent->title)}}
        @endforeach
        isotope-item" style="position: absolute; left: 0px; top: 0px;">
        <div class="isotope-img-container">
          <a class="gallery-popup cboxElement" href="{{asset('storage/'.basename($image->image))}}" title='{{$image->title}}' html='{{$image->content}}'>
            <img class="img-responsive" src="{{asset('storage/'.basename($image->image))}}" alt="">
            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="javascript:void(0)">{{$image->title}}</a>
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
      </div><!-- Isotope item 1 end -->
      @endforeach
    </div><!-- Isotop end -->
  </div><!-- Conatiner end -->
</section>
@endsection
