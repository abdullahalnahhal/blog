<form action="{{route('cp.about.store')}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    <div class="form-group form-float">
      <label class="form-label">@lang('about.Title')</label>
      <input type="text" name='title' placeholder="@lang('about.Title')" class="form-control" aria-required="true" maxlength='200' value='{{old('link')}}' required>
    </div>
    <div class="form-group form-float">
      <label class="form-label">@lang('about.Content')</label>
      <textarea name='content' id="summernoteExample" class="form-control note-codable" rows="25" placeholder="@lang('about.The Content')" required>{{old('content')}}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
