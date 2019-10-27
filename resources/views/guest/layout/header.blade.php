<!-- Header start -->
<header id="header" class="header-two">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<div class="logo">
					<a href="index.html">
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

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i
										class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="services.html">Services All</a></li>
									<li><a href="service-single.html">Services Single</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i
										class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="typography.html">Typography</a></li>
									<li><a href="404.html">404</a></li>
									<li class="dropdown-submenu">
										<a href="#.">Parent Menu</a>
										<ul class="dropdown-menu">
											<li><a href="#">Child Menu 1</a></li>
											<li><a href="#">Child Menu 2</a></li>
											<li><a href="#">Child Menu 3</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
									<li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
									<li><a href="news-single.html">News Single</a></li>
								</ul>
							</li>

							<li><a href="contact.html">Contact</a></li>
							<!-- <li class="header-get-a-quote">
								<a class="btn btn-primary" href="#">Get Free Quote</a>
							</li> -->

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
