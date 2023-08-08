<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="{{Auth::user()->image}}" alt="image">
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
        <a class="nav-link" href="">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">{{__("Dashboard")}} <span class="badge badge-primary ml-3">{{Auth::user()->Entreprises->sigle}}</span></span>
        </a>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Agents" aria-expanded="false" aria-controls="Agents">
          <i class="typcn typcn-user-add-outline menu-icon"></i>
          <span class="menu-title">{{__("Gestion Du Personnel")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Agents">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route("Agents.index")}}">{{__("Agents")}}</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Entreprises" aria-expanded="false" aria-controls="Entreprises">
          <i class="typcn typcn-film menu-icon"></i>
          <span class="menu-title">{{__("Gestion De l'Entreprise")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Entreprises">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Entreprises.index")}}">{{__("Entreprise")}}</a></li>
          </ul>
        </div>
      </li>
      
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Clients" aria-expanded="false" aria-controls="Clients">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title">{{__("Gestion des Clients")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Clients">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Clients.index")}}">{{__('Clients')}}</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#domaines" aria-expanded="false" aria-controls="domaines">
          <i class="typcn typcn-compass menu-icon"></i>
          <span class="menu-title">{{__("Gestion des Domaines")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="domaines">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Domaines.index")}}">{{__("Domaines")}}</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Categories" aria-expanded="false" aria-controls="Categories">
          <i class="typcn typcn-globe-outline menu-icon"></i>
          <span class="menu-title">{{__("Gestion des Categories")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Categories">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Categories.index")}}">{{__("Categorie")}}</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#reserve" aria-expanded="false" aria-controls="reserve">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span class="menu-title">{{__("Gestion des Entrées")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="reserve">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Reserves.index")}}">{{__("Entrées")}}</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#sortie" aria-expanded="false" aria-controls="sortie">
          <i class="typcn typcn-chart-pie-outline menu-icon"></i>
          <span class="menu-title">{{__("Gestion des Sorties")}}</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sortie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Dotations.index")}}">{{__("Sorties")}}</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0 font-weight-bold">{{Auth::user()->nom}} {{Auth::user()->postenom}} {{Auth::user()->prenom}}</h3>
            <p>{{__("Votre Derniere connexion:")}} {{date('d-m-Y à h:i:s')}} {{__("à Ngweshe.")}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

