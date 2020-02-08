<form action="{{route('cp.about.main-store')}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    <div class="col-12">
      <textarea name='main' id="summernoteExample" class="form-control note-codable" rows="25" placeholder="@lang('about.The Main About Content')" required>{{old('main')??($about->where('type', '=', 1)->first()->content??'')}}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
