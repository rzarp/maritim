<aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">purbalingga</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">Mart</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
               <li><a class="nav-link" href="{{route('home')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              </li>
            <li class="menu-header">Pages</li>             
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('create.user')}}">Input User</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('index.user')}}">Data User</a></li>
                </ul>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Product</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('product.lihat')}}">Lihat Product</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Contact</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.contact')}}">Lihat Product</a></li>
                </ul>
              </li>
        </aside>