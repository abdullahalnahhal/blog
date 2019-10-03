<!-- plugins:js -->
 <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
 <!-- endinject -->
<!-- inject:js -->
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>
<!-- endinject -->
@stack('js')
@if($errors->any())
    @foreach($errors->all() as $error)
      {{trans($error)}}
    @endforeach
@endif
