@extends('guest.layout.main')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('guest/images/banner/banner2.jpg')}})">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="banner-heading">
            <h1 class="banner-title">{{$field->title}}</h1>
            <ol class="breadcrumb">
              <li><a href="{{route('index')}}">@lang('sidebar.Home')</a></li>
              <li><a href="{{route('fields')}}">@lang('sidebar.Fields')</a></li>
            	<li>{{$field->title}}</li>
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
      @if(count($field->all_fields()))
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="sidebar sidebar-left">
          <div class="widget">
            <h3 class="widget-title">@lang('field.Sub Fields')</h3>
              <ul class="nav nav-tabs nav-stacked service-menu">
                @foreach($field->all_fields() as $sub_field)
                <li><a href="{{route('field',['id'=>$field->id])}}">{{$sub_field->title}}</a></li>
                @endforeach
              </ul>
          </div><!-- Widget end -->
        </div><!-- Sidebar end -->
      </div>
      @endif
      <!-- Sidebar Col end -->
      @if(count($field->all_fields()))
      <div class="col-lg-8 col-md-8 col-sm-12">
      @else
      <div class="col-sm-12">
      @endif
        <div class="content-inner-page">
          <h2 class="column-title mrt-0">{{$field->title}}</h2>
            <div class="row">
              <div class="col-md-12">
                <p>{!!$field->content!!}</p>
              </div><!-- col end -->
            </div><!-- 1st row end-->
            <div class="gap-40"></div>
            <div class="gap-40"></div>
        </div>
      </div>
    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section>
@endsection
