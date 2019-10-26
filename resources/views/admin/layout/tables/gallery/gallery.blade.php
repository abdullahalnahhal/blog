@foreach($images as $image)
  <a href="{{asset('storage/'.basename($image->image))}}" class="image-tile" data-sub-html="
    <h4>{{$image->title}}</h4><p>{{$image->content}}</p><br>
    <form action='{{route('cp.gallery.destroy',['gallery'=>$image->id])}}' method='POST'>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='_method' value='DELETE'>
      <button type='submit' class='btn btn-danger'>@lang('common.Delete')</button>
      <a href='{{route('cp.gallery.edit',['gallery'=>$image->id])}}' class='btn btn-info'>@lang('common.Edit')</a>
    </form>
    ">
    <img src="{{asset('storage/'.basename($image->image))}}" alt="{{$image->title}}">
  </a>
@endforeach
