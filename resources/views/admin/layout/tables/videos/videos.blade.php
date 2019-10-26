@foreach($videos as $video)
  <a href="{{$video->link}}" class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" data-sub-html="
    <h4>{{$video->title}}</h4><p>{{$video->description}}</p><br>
    <form action='{{route('cp.videos.destroy',['video'=>$video->id])}}' method='POST'>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='_method' value='DELETE'>
      <button type='submit' class='btn btn-danger'>@lang('common.Delete')</button>
      <a href='{{route('cp.videos.edit',['video'=>$video->id])}}' class='btn btn-info'>@lang('common.Edit')</a>
    </form>
    ">
    <div class="text-center">{{$video->title}}</div>
    <img src="{{asset("images/main.jpeg")}}" alt="{{$video->title}}">
    <div class="demo-gallery-poster">
      <img src="{{asset("images/lightbox/play-button.png")}}" alt="image">
    </div>
  </a>
@endforeach
