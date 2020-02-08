<div class="table-responsive">
  <table id="order-listing" class="table">
    <thead>
      <tr>
        <th>@lang('users.Role Name')</th>
        <th>@lang('users.Role Slug')</th>
        <th>@lang('common.Actions')</th>
      </tr>
    </thead>
    <tbody>
      @foreach($roles as $role)
      <tr>
        <th>{{$role->name}}</th>
        <th>{{$role->slug}}</th>
        <th>
          <a href="{{route('cp.permissions.edit',[$role->id])}}" class="btn btn-outline-info btn-fw">@lang('common.Edit')</a>
          <a href="{{route('cp.permissions.destroy',[$role->id])}}" class="btn btn-outline-danger btn-fw">@lang('common.Delete')</a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
