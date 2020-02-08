@extends('admin.layout.main')
@push('css')
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset("vendors/lightgallery/css/lightgallery.css")}}">
<!-- End plugin css for this page -->
@endpush
@section('content')
<a href="{{route('cp.videos.create')}}" class="btn btn-primary btn-icon-text">
  <i class="mdi mdi-plus btn-icon-prepend"></i>
  @lang('common.New')
</a>
<br>
<br>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div id="lightgallery-without-thumb" class="row lightGallery">
          @include('admin.layout.tables.videos.videos')
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
<!-- End plugin js for this page-->
<!-- Custom js for this page-->
<script src="{{asset('js/data-table.js')}}"></script>
<!-- End custom js for this page-->
<script src="{{asset("vendors/lightgallery/js/lightgallery-all.min.js")}}"></script>
<script>
  if ($("#lightgallery-without-thumb").length) {
    $("#lightgallery-without-thumb").lightGallery({
      thumbnail: true,
      animateThumb: true,
      showThumbByDefault: true,
      share:false,
      autoplay:false,
      download:false,
    });
  }
</script>
@endpush
