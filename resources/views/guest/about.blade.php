@extends('guest.layout.main')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('guest/images/banner/banner1.jpg')}})">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="banner-heading">
            <h1 class="banner-title">@lang('sidebar.About Us')</h1>
            <ol class="breadcrumb">
              <li><a href="{{route('index')}}">Home</a></li>
            	<li>About Us</li>
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
      <div class="col-xs-12">
				<p>{!!$main->content!!}</p>
      </div><!-- Col end -->
			<div class="col-xs-12">
				@foreach($sections as $section)
					<h3 class="column-title">{{$section->title}}</h3>
					<p>{!!$section->content!!}</p>
				@endforeach
			</div>
    </div><!-- Content row end -->
  </div><!-- Container end -->
</section>
@endsection
