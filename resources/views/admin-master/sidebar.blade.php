<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">Maritim</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="/">Mart</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
       <li><a class="nav-link" href="{{route('admin.home')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
      </li>
    <li class="menu-header">Pages</li>             
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link beep beep-sidebar" href="{{route('create.user')}}">Input User</a></li>
          <li><a class="nav-link beep beep-sidebar" href="{{route('index.user')}}">Lihat Data User</a></li>
        </ul>

    </ul>
</aside>