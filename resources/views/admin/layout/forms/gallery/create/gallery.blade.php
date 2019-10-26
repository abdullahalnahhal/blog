<form action="{{route('cp.gallery.store')}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group form-float ">
              <label class="form-label">@lang('gallery.Title')</label>
              <input type="text" name='title' class="form-control" required aria-required="true" maxlength='200' value='{{old('title')}}'>
            </div>
        </div>
        <div class='col-sm-6'>
          <div class="form-group form-float">
            <label class="form-label">@lang('gallery.Field')</label>
            @include('admin.layout.dropdowns.fields.fields',[
              'classes' => 'select2 js-example-basic-single w-100'
            ])
          </div>
        </div>
        <div class="col-12">
          <div class="form-group form-float ">
            <label class="form-label">@lang('gallery.Image')</label>
            <input type="file" name='image' class="dropify" />
          </div>
        </div>
        <div class="col-12">
          <div class="form-group form-float ">
            <label class="form-label">@lang('gallery.Image Content')</label>
            <textarea id="maxlength-textarea" name='description' class="form-control" maxlength="300" rows="3" placeholder="@lang('gallery.Gallery Content has a limit of 500 chars.')">{{old('content')}}</textarea>
          </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
