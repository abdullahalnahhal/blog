<form action="{{route('cp.slider.store')}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    <div class="row clearfix">
        <div class="col-sm-4">
            <div class="form-group form-float ">
              <label class="form-label">@lang('slider.Title')</label>
              <input type="text" name='title' class="form-control" required aria-required="true" maxlength='200' value='{{old('title')}}'>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group form-float ">
              <label class="form-label">@lang('slider.Button Link')</label>
              <input type="text" name='link' class="form-control" aria-required="true" maxlength='200' value='{{old('link')}}'>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group form-float ">
              <label class="form-label">@lang('slider.Button Link Text')</label>
              <input type="text" name='link_text' class="form-control" aria-required="true" maxlength='200' value='{{old('link_text')}}'>
            </div>
        </div>
        <div class="col-12">
          <div class="form-group form-float ">
            <label class="form-label">@lang('slider.Slide')</label>
            <input type="file" name='slide' class="dropify" />
          </div>
        </div>
        <div class="col-12">
          <div class="form-group form-float ">
            <label class="form-label">@lang('slider.Slide Content')</label>
            <textarea id="maxlength-textarea" name='content' class="form-control" maxlength="300" rows="3" placeholder="@lang('slider.Slide Content has a limit of 300 chars.')">{{old('content')}}</textarea>
          </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
