<!-- Main Sidebar Container -->
<?php
$gs = \App\GeneralSettings::find(1);
?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <span class="brand-text font-weight-light pl-4"><strong>{{$gs->sitename}}</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(!empty(Auth::user()->image))
          <img src="{{asset(Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
    @php


        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        {
          $link = "https";
        }
        else
        {
          $link = "http";

          // Here append the common URL characters.
          $link .= "://";

          // Append the host(domain name, ip) to the URL.
          $link .= $_SERVER['HTTP_HOST'];

          // Append the requested resource location to the URL
          $link .= $_SERVER['REQUEST_URI'];
        }

    @endphp
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link {{ $link == route('home') ? 'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                  Tableau de bord
              </p>
            </a>
          </li>
            @if(Auth::user()->role == 1)

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Réglages Généraux
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('general.settings')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Réglages Généraux </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.slider')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Curseurs </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.testimonial')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Témoignage </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.offers')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Des offres </p>
                            </a>
                        </li>
                    </ul>
                </li>

            @else

            @endif

           {{-- <li class="nav-item">
                <a href="{{route('change.password')}}" class="nav-link">
                    <i class="nav-icon fas fa-key"></i>
                    <p>
                        Changer le mot de passe
                    </p>
                </a>
            </li>--}}

           <li class="nav-item">
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                         class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
