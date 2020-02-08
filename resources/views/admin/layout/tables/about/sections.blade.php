<div class="table-responsive">
  <table id="order-listing" class="table">
    <thead>
      <tr>
        <th>@lang('about.Title')</th>
        <th>@lang('about.Content')</th>
        <th>@lang('common.Actions')</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sections as $section)
      <tr>
        <th>{{$section->title}}</th>
        <td>{{ Str::limit($section->content, 50, '...') }}</td>
        <th>

          <form action='{{route('cp.about.destroy',[$section->id])}}' method='POST'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <input type='hidden' name='_method' value='DELETE'>
            <a href="{{route('cp.about.edit',[$section->id])}}" class="btn btn-outline-info btn-fw">@lang('common.Edit')</a>
            <button type="submit" class="btn btn-outline-danger btn-fw">@lang('common.Delete')</button>
          </form>

        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
