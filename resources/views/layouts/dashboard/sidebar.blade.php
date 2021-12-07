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
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link {{  request()->is('home') ? 'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                  Tableau de bord
              </p>
            </a>
          </li>
            <li class="nav-item {{  request()->is('category/*') || request()->is('subcategory/*') ? 'menu-open':'' }}">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-ellipsis-h"></i>
                    <p>
                        Catégories
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link {{  request()->is('category/*') ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Catégories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('subcategory.index')}}" class="nav-link {{  request()->is('subcategory/*') ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Sous-Catégories</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{  request()->is('products/*') ? 'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-ellipsis-h"></i>
                    <p >
                        Produits
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('products.create')}}" class="nav-link {{  request()->is('products/create') ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Ajouter produits</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('products.index')}}" class="nav-link {{  request()->is('products/index') ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Tous les produits</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{  request()->is('orders/*') ? 'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-ellipsis-h"></i>
                    <p>
                        Commande
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('order.index')}}" class="nav-link {{  request()->is('orders/index') ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Nouvelles commandes </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('order.complete')}}" class="nav-link {{  request()->is('orders/complete') ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Commandes traiter </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{  request()->is('services/*') ? 'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-ellipsis-h"></i>
                    <p>
                        Prestations de service
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('services.create')}}" class="nav-link {{  request()->is('services/create') ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Nouvelles service </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('services.index')}}" class="nav-link {{  request()->is('services/index') ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Tous les services </p>
                        </a>
                    </li>
                </ul>
            </li>
            @if(Auth::user()->role == 1)

                <li class="nav-item {{  request()->is('general/*') ? 'menu-open':'' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Réglages Généraux
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('general.settings')}}" class="nav-link {{  request()->is('general/settings') ? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Réglages Généraux </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.slider')}}" class="nav-link {{  request()->is('general/slider') ? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Curseurs </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.testimonial')}}" class="nav-link {{  request()->is('general/testimonial') ? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Témoignage </p>
                            </a>
                        </li>
<!--                        <li class="nav-item">
                            <a href="{{route('general.offers')}}" class="nav-link {{  request()->is('general/offers') ? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Des offres </p>
                            </a>
                        </li>-->
                        <li class="nav-item">
                            <a href="{{route('saleproduct')}}" class="nav-link {{  request()->is('general/sale/product') ? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p >Produit de vente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.about')}}" class="nav-link {{  request()->is('general/about') ? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p >À propos de nous</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.gallery')}}" class="nav-link {{  request()->is('general/gallery') ? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p >Galerie</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.query')}}" class="nav-link {{  request()->is('general/query') ? 'active':'' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p >Queries</p>
                            </a>
                        </li>
                    </ul>
                </li>

            @else

            @endif

            <li class="nav-item">
                <a href="{{route('change.password')}}" class="nav-link {{  request()->is('update-Password') ? 'active':'' }}">
                    <i class="nav-icon fas fa-key"></i>
                    <p>
                        Changer le mot de passe
                    </p>
                </a>
            </li>

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
