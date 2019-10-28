<!-- Header start -->
<header id="header" class="header-two">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<div class="logo">
					<a href="{{route('index')}}">
						<img src="{{asset('guest/images/logo.png')}}" alt="">
					</a>
				</div><!-- logo end -->
			</div><!-- Navbar header end -->

			<nav class="site-navigation navigation pull-right">
				<div class="site-nav-inner">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li><a href="{{route('index')}}">@lang('sidebar.Home')</a></li>
							<li><a href="{{route('about')}}">@lang('sidebar.About Us')</a></li>
							<li><a href="{{route('fields')}}">@lang('sidebar.Fields')</a></li>
							<li><a href="{{route('gallery')}}">@lang('sidebar.Gallery')</a></li>
							<li><a href="{{route('videos')}}">@lang('sidebar.Videos')</a></li>
							<li><a href="{{route('contacts')}}">@lang('sidebar.Contacts')</a></li>
						</ul>
						<!--/ Nav ul end -->
					</div>
					<!--/ Collapse end -->

				</div><!-- Site Navbar inner end -->

			</nav>
			<!--/ Navigation end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
</header>
<!--/ Header end -->
