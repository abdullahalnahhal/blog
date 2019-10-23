<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@lang('common.App Name') | @lang('sidebar.'.$active)</title>
    @include('admin.layout.head')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.layout.navbar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.layout.settings')
        @include('admin.layout.sidebar')
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    @stack('modals')
    @include('admin.layout.foot')
  </body>
</html>
