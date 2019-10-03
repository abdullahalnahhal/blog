<div class="table-responsive">
  <table id="order-listing" class="table">
    <thead>
      <tr>
        <th>@lang('users.User Name')</th>
        <th>@lang('users.Role')</th>
        <th>@lang('common.Actions')</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td><label class="badge badge-info">{{$user->roles[0]->name}}</label></td>
        <td>
          <button type="button" class="btn btn-outline-success btn-fw">@lang('common.View')</button>
          <button type="button" class="btn btn-outline-info btn-fw">@lang('common.Edit')</button>
          <button type="button" class="btn btn-outline-danger btn-fw">@lang('common.Delete')</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
