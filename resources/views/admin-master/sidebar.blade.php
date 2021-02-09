<aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">purbalingga</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">Pubg</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
               <li><a class="nav-link" href="{{route('home')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              </li>
            <li class="menu-header">Pages</li>             
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>About</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.about')}}">Input About</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.about')}}">Data About</a></li>
                </ul>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Favorit</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.favorit')}}">Input Favorit</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.favorit')}}">Data Favorit</a></li>
                </ul>
              </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Berita</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.berita')}}">Input Berita</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.berita')}}">Data Berita</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Kesenian</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.kesenian')}}">Input Kesenian</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.kesenian')}}">Data Kesenian</a></li>
                </ul>
              </li>

               <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Visi & Misi</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.vismis')}}">Input Visi & Misi</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.vismis')}}">Data Visi & Misi</a></li>
                </ul>
              </li>   

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Contact</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.contact')}}">Data Contact</a></li>
                </ul>
              </li>   
            </ul>
        </aside>