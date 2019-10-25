<form action="{{route('cp.fields.store')}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    <div class='row'>
      <div class='col-md-6'>
        <div class="form-group form-float">
          <label class="form-label">@lang('field.Field Name')</label>
          <input type="text" name='title' class="form-control" placeholder="@lang('field.Parent Field')" required>
        </div>
      </div>
      <div class='col-md-6'>
        <div class="form-group form-float">
          <label class="form-label">@lang('field.Parent Field')</label>
          @include('admin.layout.dropdowns.fields.fields',[
            'classes' => 'select2 js-example-basic-single w-100'
          ])
        </div>
      </div>
      <div class='col-md-6'>
        <div class="form-group form-float">
          <label class="form-label">@lang('field.Content')</label>
          <textarea name='content' id="summernoteExample" class="form-control note-codable" rows="25" placeholder="@lang('field.The Content')" required>{{old('content')}}</textarea>
        </div>
      </div>
      <div class="col-md-6" style="height: 400px;overflow-y: auto; ">
        <br>
        @foreach (File::files('images/vector') as $filename)
        <div class="d-flex border-bottom pb-3">
          <img src="{{asset($filename)}}" alt="profile" class="img-sm">
          <div class="flex-grow-1 ml-3">
            <div class="d-flex">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="icon" id="icon" value="{{basename($filename)}}">
                    {{basename($filename)}}
                    <i class="input-helper"></i>
                </label>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
