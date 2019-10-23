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
<script src="{{asset("vendors/jquery-toast-plugin/jquery.toast.min.js")}}"></script>
@stack('js')
@if($errors->any())
    @foreach($errors->all() as $error)
      {{trans($error)}}
    @endforeach
@endif
<script>
@if (session('created'))
$.toast({
      // heading: 'Success',
      text: '{{ trans(session('created')) }}',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'bottom-{{revfull()}}'
    })
@endif
@if (session('updated'))
$.toast({
      text: '{{ trans(session('updated')) }}',
      showHideTransition: 'slide',
      icon: 'info',
      loaderBg: '#f96868',
      position: 'bottom-{{revfull()}}'
    })
@endif
@if (session('deleted'))
$.toast({
      text: '{{ trans(session('deleted')) }}',
      showHideTransition: 'slide',
      icon: '',
      loaderBg: '#f96868',
      position: 'bottom-{{revfull()}}'
    })
    showNotification("bg-blue-grey", "{{trans(session('deleted')) }}", "bottom", "{{revfull()}}", "animated fadeIn", "animated flipOutY");
@endif
@if($errors->any())
    @foreach($errors->all() as $error)
    $.toast({
          text: '{{ trans($error) }}',
          showHideTransition: 'slide',
          icon: 'danger',
          loaderBg: '#f96868',
          position: 'bottom-{{revfull()}}'
        })
    @endforeach
@endif
</script>
