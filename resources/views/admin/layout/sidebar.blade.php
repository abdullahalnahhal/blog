<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('cp.index')}}">
        <i class="mdi mdi-view-quilt menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Dashboard')</span>
      </a>
    </li>
    @can('access-slider')
    <li class="nav-item">
      <a class="nav-link" href="{{route('cp.slider.index')}}">
        <i class="mdi mdi-view-carousel menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Home Slider')</span>
      </a>
    </li>
    @endcan
    @can('access-about')
    <li class="nav-item">
      <a class="nav-link" href="{{route('cp.about.index')}}">
        <i class="mdi mdi-voice menu-icon"></i>
        <span class="menu-title">@lang('sidebar.About Us')</span>
      </a>
    </li>
    @endcan
    @can('access-fields')
    <li class="nav-item">
      <a class="nav-link" href="{{route('cp.fields.index')}}">
        <i class="mdi mdi-apple-keyboard-option menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Fields')</span>
      </a>
    </li>
    @endcan
    @can('access-achievements')
    <!-- <li class="nav-item">
      <a class="nav-link" href="{{route('cp.achievements.index')}}">
        <i class="mdi mdi-auto-fix menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Achievements')</span>
      </a>
    </li> -->
    @endcan
    @can('access-clients')
    <!-- <li class="nav-item">
      <a class="nav-link" href="{{route('cp.clients.index')}}">
        <i class="mdi mdi-account-circle menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Clients')</span>
      </a>
    </li> -->
    @endcan
    @can('access-gallery')
    <li class="nav-item">
      <a class="nav-link" href="{{route('cp.gallery.index')}}">
        <i class="mdi mdi-camera-iris menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Gallery')</span>
      </a>
    </li>
    @endcan
    @can('access-videos')
    <li class="nav-item">
      <a class="nav-link" href="{{route('cp.videos.index')}}">
        <i class="mdi mdi-video menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Videos')</span>
      </a>
    </li>
    @endcan
    @can('access-contacts')
    <li class="nav-item">
      <a class="nav-link" href="{{route('cp.contacts.index')}}">
        <i class="mdi mdi-contact-mail menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Contacts')</span>
      </a>
    </li>
    @endcan
    @can('access-blog')
    <li class="nav-item">
      <a class="nav-link" href="{{route('cp.blog.index')}}">
        <i class="mdi mdi-blogger menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Blog')</span>
      </a>
    </li>
    @endcan
    @can('access-users')
    <li class="nav-item">
      <a class="nav-link collapsed" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-account-multiple menu-icon"></i>
        <span class="menu-title">@lang('sidebar.Users')</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="users">
        <ul class="nav flex-column sub-menu">
          @can('access-admins')
          <li class="nav-item"> <a class="nav-link" href="{{route('cp.admins.index')}}">@lang('sidebar.Admins')</a></li>
          @endcan
          @can('access-guests')
          <li class="nav-item"> <a class="nav-link" href="">@lang('sidebar.Guests')</a></li>
          @endcan
          @can('access-admins-permission')
          <li class="nav-item"> <a class="nav-link" href="{{route('cp.permissions.index')}}">@lang('sidebar.Admins Permissions')</a></li>
          @endcan
        </ul>
      </div>
    </li>
    @endcan
  </ul>
</nav>
