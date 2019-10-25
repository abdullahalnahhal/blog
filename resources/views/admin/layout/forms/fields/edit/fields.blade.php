<form action="{{route('cp.fields.update',['field'=>$field->id])}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
    <div class='row'>
      <div class='col-md-6'>
        <div class="form-group form-float">
          <label class="form-label">@lang('field.Field Name')</label>
          <input type="text" name='title' class="form-control" value="{{old('title')??$field->title}}" placeholder="@lang('field.Parent Field')" required>
        </div>
      </div>
      <div class='col-md-6'>
        <div class="form-group form-float">
          <label class="form-label">@lang('field.Parent Field')</label>
          @include('admin.layout.dropdowns.fields.fields',[
            'classes' => 'select2 js-example-basic-single w-100',
            'selected_id' => $field->parent
          ])
        </div>
      </div>
      <div class='col-md-6'>
        <div class="form-group form-float">
          <label class="form-label">@lang('field.Content')</label>
          <textarea name='content' id="summernoteExample" class="form-control note-codable" rows="25" placeholder="@lang('field.The Content')" required>{{old('content')??$field->content}}</textarea>
        </div>
      </div>
      <div class="col-md-6" >
        <label class="form-label">@lang('field.Content')</label>
        <div style="height: 400px;overflow-y: auto;">
        @foreach (File::files('images/vector') as $filename)
        <div class="d-flex border-bottom pb-3">
          <img src="{{asset($filename)}}" alt="profile" class="img-sm">
          <div class="flex-grow-1 ml-3">
            <div class="d-flex">
              <div class="form-check">
                <label class="form-check-label">
                    @if(basename($filename) == old('icon'))
                    <input type="radio" class="form-check-input" name="icon" id="icon" value="{{basename($filename)}}" checked>
                    @elseif(basename($filename) == $field->icon)
                    <input type="radio" class="form-check-input" name="icon" id="icon" value="{{basename($filename)}}" checked>
                    @else
                    <input type="radio" class="form-check-input" name="icon" id="icon" value="{{basename($filename)}}">
                    @endif
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
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
