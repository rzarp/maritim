<aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">Maritim</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">Mart</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
               <li><a class="nav-link" href=""><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              </li>
            <li class="menu-header">Pages</li>             
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Product</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.product')}}">Input Product</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.product')}}">Lihat Product</a></li>
                </ul>

                <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i> <span>Setting</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('setting.user')}}">Account</a></li>
                </ul>
              </li>
              
            </ul>
        </aside>