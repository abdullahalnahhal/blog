@foreach($slides as $slide)
<div class="item" style="background-image:url({{asset('storage/'.basename($slide->slide))}})">
  <div class="container">
    <div class="box-slider-content">
      <div class="box-slider-text">
        <!-- <h2 class="box-slide-title">17 Years Of Excellence In</h2> -->
        <h3 class="box-slide-sub-title">{{$slide->title}}</h3>
        <p class="box-slide-description">{{$slide->content}}</p>
        @if($slide->link)
        <p>
          <a href="{{$slide->link}}" class="slider btn btn-primary">{{$slide->link_text}}</a>
        </p>
        @endif
      </div>
    </div>
  </div>

</div>
<!-- Item end -->
@endforeach
