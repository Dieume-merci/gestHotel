<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href=""><img src="{{asset(Auth::user()->Entreprises->griffe)}}" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href=""><img src="{{asset(Auth::user()->Entreprises->griffe)}}" alt="logo"/></a>
      <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
        <span class="typcn typcn-th-menu"></span>
      </button>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle  pl-0 pr-0" href="/#rooms" >
            <i class="typcn typcn-film menu-icon"></i>
            <span class="nav-profile-name">{{__('Reserver')}}</span>
          </a>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
            <i class="typcn typcn-user-outline mr-0"></i>
            <span class="nav-profile-name">{{__('Profil')}}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="{{ url('HOTEL/account')}}">
            <i class="typcn typcn-cog text-primary"></i>
              {{__('Parametre')}}
            </a>
            <a class="dropdown-item" onclick="logout();">
            <i class="typcn typcn-power text-primary"></i>
              {{__('Déconnexion')}}
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="typcn typcn-th-menu"></span>
      </button>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>
  {{-- @include('auth.forgest') --}}
</nav>
