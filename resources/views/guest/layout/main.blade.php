
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
	</div><!-- Body inner end -->
</body>

</html>
