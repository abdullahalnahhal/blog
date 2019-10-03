@extends('admin.layout.main')
@section('title', trans('sidebar.Admins Permissions'))
@push('css')
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
<!-- End plugin css for this page -->
@endpush
@section('content')
<a href="{{route('cp.admins-permissions.create')}}" class="btn btn-primary btn-icon-text">
  <i class="mdi mdi-plus btn-icon-prepend"></i>
  @lang('common.New')
</a>
<br>
<br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">@lang('users.Admins Permissions')</h4>
    <div class="row">
      <div class="col-12">
        @include('admin.layout.tables.users.roles')
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<!-- Plugin js for this page-->
<script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<!-- End plugin js for this page-->
<!-- Custom js for this page-->
<script src="{{asset('js/data-table.js')}}"></script>
<!-- End custom js for this page-->
@endpush
