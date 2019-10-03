<form action="{{route('cp.admins.store')}}" method="post" accept-charset="utf-8" autocomplete="off">
    @csrf
    <div class="row clearfix">
        <div class="col-sm-3">
            <div class="form-group form-float ">
                <div class="form-line">
                    <label class="form-label">@lang('users.User Name')</label>
                    <input type="text" name='name' class="form-control" required aria-required="true" maxlength='200' value='{{old('name')}}'>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group form-float ">
                <div class="form-line">
                    <label class="form-label">@lang('users.User Login Name')</label>
                    <input type="text" name='username' class="form-control" required aria-required="true" maxlength='200' value='{{old('username')}}'>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group form-float ">
                <div class="form-line">
                    <label class="form-label">@lang('users.User Password')</label>
                    <input type="password" name='password' class="form-control" required aria-required="true" maxlength='200' >
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group form-float ">
                <div class="form-line">
                    <label class="form-label">@lang('users.User Password Confirmation')</label>
                    <input type="password" name='password_confirm' class="form-control" required aria-required="true" maxlength='200'>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <label class="form-label">@lang('users.User Role')</label>
            @include('admin.layout.dropdowns.users.roles', [
                'classes' => 'js-example-basic-single w-100',
              ])
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
