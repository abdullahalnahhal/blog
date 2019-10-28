
<!DOCTYPE html>
<html lang="en">
<head>
  @include('guest.layout.head')
</head>
<body>

	<div class="body-inner">

		@include('guest.layout.top-bar')

		@include('guest.layout.header')

		@yield('content')

		@include('guest.layout.foot')
    @include('guest.layout.footer')
	</div><!-- Body inner end -->
</body>

</html>
