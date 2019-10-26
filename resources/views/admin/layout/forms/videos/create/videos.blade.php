<form action="{{route('cp.videos.store')}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    <div class="row clearfix">
      <div class="col-sm-4">
          <div class="form-group form-float ">
            <label class="form-label">@lang('videos.Title')</label>
            <input type="text" name='title' class="form-control" placeholder="@lang('videos.Title')" required aria-required="true" maxlength='200' value='{{old('title')}}'>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group form-float ">
            <label class="form-label">@lang('videos.Video Link')</label>
            <input type="text" name='link' class="form-control" placeholder="@lang('videos.Video Link')"  required aria-required="true" maxlength='200' value='{{old('link')}}'>
          </div>
      </div>
        <div class='col-sm-4'>
          <div class="form-group form-float">
            <label class="form-label">@lang('videos.Field')</label>
            @include('admin.layout.dropdowns.fields.fields',[
              'classes' => 'select2 js-example-basic-single w-100',
              'extensions'=>[
                'required'=>'true'
              ]
            ])
          </div>
        </div>
        <div class="col-12">
          <div class="form-group form-float ">
            <label class="form-label">@lang('videos.Video Description')</label>
            <textarea id="maxlength-textarea" name='description' class="form-control" maxlength="300" rows="3" placeholder="@lang('videos.Video Description has a limit of 500 chars.')">{{old('content')}}</textarea>
          </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
