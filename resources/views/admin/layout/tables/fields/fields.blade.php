<div class="table-responsive">
  <table id="order-listing" class="table">
    <thead>
      <tr>
        <th>@lang('field.Title')</th>
        <th>@lang('field.Icon')</th>
        <th>@lang('field.Content')</th>
        <th>@lang('common.Actions')</th>
      </tr>
    </thead>
    <tbody>
      @foreach($fields as $field)
      <tr>
        <th>{{$field->title}}</th>
        <th><img src="{{asset('images/vector/'.$field->icon)}}" alt=""></th>
        <td>{{ Str::limit($field->content, 50, '...') }}</td>
        <th>

          <form action='{{route('cp.fields.destroy',[$field->id])}}' method='POST'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <input type='hidden' name='_method' value='DELETE'>
            <a href="{{route('cp.fields.edit',[$field->id])}}" class="btn btn-outline-info btn-fw">@lang('common.Edit')</a>
            <button type="submit" class="btn btn-outline-danger btn-fw">@lang('common.Delete')</button>
          </form>

        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
