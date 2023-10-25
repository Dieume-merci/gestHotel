<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="{{asset(Auth::user()->image)}}" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">
              {{Auth::user()->nom}}
            </p>
            <p class="sidebar-designation">
              {{__("Bienvenu")}}
            </p>
          </div>
        </div>
        <p class="sidebar-menu-title">{{__("Dashboard")}}</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url("HOTEL/Home")}}">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">{{__("Dashboard")}} <span class="badge badge-primary ml-3">{{Auth::user()->Entreprises->sigle}}</span></span>
        </a>
      </li>
      <!-- Nouveau menu -->
      @if ((Auth::user()->roles->where('designation','admin')!='[]'))
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Agents" aria-expanded="false" aria-controls="Agents">
          <i class="typcn typcn-user-add-outline menu-icon"></i>
          <span class="menu-title">{{__("Gestion Des Type Esp.")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Agents">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route("type.index")}}">{{__("Types")}}</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#espaces" aria-expanded="false" aria-controls="espaces">
          <i class="typcn typcn-compass menu-icon"></i>
          <span class="menu-title">{{__("Gestion des Esp.")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="espaces">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("espace.index")}}">{{__("Espace")}}</a></li>
          </ul>
        </div>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Clients" aria-expanded="false" aria-controls="Clients">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title">{{__("Gestion des Clients")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Clients">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("client.index")}}">{{__('Clients')}}</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#reserve" aria-expanded="false" aria-controls="reserve">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span class="menu-title">{{__("Gestion des Com")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="reserve">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("commentaire.index")}}">{{__("Commentaires")}}</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
    </ul>
  </nav>
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0 font-weight-bold">{{Auth::user()->nom}} {{Auth::user()->postenom}} {{Auth::user()->prenom}}</h3>
            <p>{{__("Votre Derniere connexion:")}} {{date('d-m-Y à h:i:s')}} {{__("à Notre site.")}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

