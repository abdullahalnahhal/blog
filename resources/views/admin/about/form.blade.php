@extends('admin.layout.main')
@section('title', trans('sidebar.Admins Permissions'))
@push('css')
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{asset('vendors/summernote/dist/summernote-bs4.css')}}">
<!-- End plugin css for this page -->
@endpush
@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">@lang('slider.New About Section')</h4>
    <div class="row">
      <div class="col-12">
        @if($action == 'Create')
          @include('admin.layout.forms.about.create.about')
        @endif
        @if($action == 'Edit')
          @include('admin.layout.forms.about.edit.about')
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<!-- Plugin js for this page -->
<script src="{{asset('vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('js/editorDemo.js')}}"></script>
<!-- End custom js for this page-->
@endpush
