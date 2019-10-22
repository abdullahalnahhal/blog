<form action="{{route('cp.permissions.update',['permission'=>$role->id])}}" method="post" accept-charset="utf-8" autocomplete="off">
    @csrf
    @method('PUT')
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group form-float ">
                <div class="form-line">
                    <label>@lang('users.Role Name')</label>
                    <input type="text" name='name' class="form-control" placeholder="@lang('users.Role Name')" required aria-required="true" maxlength='200' value='{{old('name')??$role->name}}'>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group form-float ">
                <div class="form-line">
                    <label>@lang('users.Role Slug')</label>
                    <input type="text" name='slug' class="form-control" placeholder="@lang('users.Role Slug')" required aria-required="true" maxlength='200' value='{{old('slug')??$role->slug}}'>

                </div>
            </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>@lang('users.Role Permissions')</label>
            @include('admin.layout.dropdowns.users.admins-permissions',[
              'select_from' => json_decode($role->permissions, true),
              'classes'=>'js-example-basic-multiple w-100',
              'name'=> 'permissions[]',
              'extensions' => [
                'multiple' => 'true',
                'required' => 'true'
              ],
            ])
          </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
