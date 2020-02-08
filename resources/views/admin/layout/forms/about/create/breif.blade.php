<form action="{{route('cp.about.breif-store')}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    <div class="col-12">
      <textarea name='breif' class="form-control note-codable" rows="3" placeholder="@lang('about.The Breif About Content')" required>{{old('breif')??($about->where('type', '=', 2)->first()->content??'')}}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
