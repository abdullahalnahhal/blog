@extends('admin.layout.main')
@section('title', trans('sidebar.Admins Permissions'))
@push('css')
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{asset('vendors/summernote/dist/summernote-bs4.css')}}">
<link rel="stylesheet" href="{{asset("vendors/select2/select2.min.css")}}">
<link rel="stylesheet" href="{{asset("vendors/select2-bootstrap-theme/select2-bootstrap.min.css")}}">
<!-- End plugin css for this page -->
@endpush
@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        @if($action == 'Create')
          @include('admin.layout.forms.fields.create.fields')
        @endif
        @if($action == 'Edit')
          @include('admin.layout.forms.fields.edit.fields')
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<!-- Plugin js for this page -->
<script src="{{asset('vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
<script src="{{asset("vendors/select2/select2.min.js")}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('js/editorDemo.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
<!-- End custom js for this page-->
@endpush
