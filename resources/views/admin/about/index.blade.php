@extends('admin.layout.main')
@push('css')
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset("vendors/lightgallery/css/lightgallery.css")}}">
<link rel="stylesheet" href="{{asset('vendors/summernote/dist/summernote-bs4.css')}}">
<!-- End plugin css for this page -->
@endpush
@section('content')
<div class="card">
  <div class="row">
    <div class="col-12">
      <div class="card-body">
        <h4 class="card-title">@lang('about.The Main About Content')</h4>
        <div class="row">
          <div class="col-12">
            @include('admin.layout.forms.about.create.main')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="row">
    <div class="col-12">
      <div class="card-body">
        <h4 class="card-title">@lang('about.The Breif About Content')</h4>
        <div class="row">
          <div class="col-12">
            @include('admin.layout.forms.about.create.breif')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<a href="{{route('cp.about.create')}}" class="btn btn-primary btn-icon-text">
  <i class="mdi mdi-plus btn-icon-prepend"></i>
  @lang('common.New')
</a>
<br>
<br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">@lang('about.About Sections')</h4>
    <div class="row">
      <div class="col-12">
        <div id="lightgallery-without-thumb" class="row lightGallery">
          @include('admin.layout.tables.about.sections', [
            'sections' => \App\Models\About::where('type', '=', 2)->get()
          ])
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<!-- Plugin js for this page-->
<script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
<!-- End plugin js for this page-->
<!-- Custom js for this page-->
  <script src="{{asset('js/data-table.js')}}"></script>
  <script src="{{asset('js/editorDemo.js')}}"></script>
 <!-- End custom js for this page-->
@endpush
