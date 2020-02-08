@foreach($slides as $slide)
  <a href="{{asset('storage/'.basename($slide->slide))}}" class="image-tile" data-sub-html="
    <h4>{{$slide->title}}</h4><p>{{$slide->content}}</p><br>
    <form action='{{route('cp.slider.destroy',['slider'=>$slide->id])}}' method='POST'>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='_method' value='DELETE'>
      <button type='submit' class='btn btn-danger'>@lang('common.Delete')</button>
      <a href='{{route('cp.slider.edit',['slider'=>$slide->id])}}' class='btn btn-info'>@lang('common.Edit')</a>
    </form>
    ">
    <img src="{{asset('storage/'.basename($slide->slide))}}" alt="{{$slide->title}}">
  </a>
@endforeach
