<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@lang('common.App Name') | @lang('settings.Login')</title>
  @include('admin.layout.head')
</head>
<body class="{{direction()}}">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-{{dirFull()}} p-3">
              <div class="brand-logo">
                <!-- <img src="{{asset('images/logo.png')}}" alt="logo"> -->
              </div>
              <h4>@lang('settings.Welcome Back')!</h4>
              <h6 class="font-weight-light">@lang('settings.Thanks For Using Our App')!</h6>
              <form class="pt-3" id="sign_in" method="POST" action="{{route('cp.login.submit')}}" autocomplete="false">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail">@lang('settings.User Login Name')</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-{{revFull()}}-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-{{dirFull()}}-0" id="exampleInputEmail" name='username' placeholder="@lang('settings.User Login Name')" required autofocus value='{{old('username')}}' autocomplete="false">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">@lang('settings.User Password')</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-{{revFull()}}-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-{{dirFull()}}-0" id="exampleInputPassword" name="password" placeholder="@lang('settings.User Password')" required value='{{old('password')}}' autocomplete="false">
                  </div>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">@lang("settings.Login")</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <!-- <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p> -->
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</body>
</html>
@include('admin.layout.foot')
