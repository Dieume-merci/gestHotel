<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="/template/images/faces/face29.png" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">
              CherParent
            </p>
            <p class="sidebar-designation">
              Bienvenu
            </p>
          </div>
        </div>
        <p class="sidebar-menu-title">Dashboard</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">WICOM</span></span>
        </a>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Agents" aria-expanded="false" aria-controls="Agents">
          <i class="typcn typcn-user-add-outline menu-icon"></i>
          <span class="menu-title">Gestion Du Personnel</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Agents">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route("Agents.index")}}">Agents</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Entreprises" aria-expanded="false" aria-controls="Entreprises">
          <i class="typcn typcn-film menu-icon"></i>
          <span class="menu-title">Gestion De l'Entreprise</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Entreprises">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Entreprises.index")}}">Entreprise</a></li>
          </ul>
        </div>
      </li>
      
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Clients" aria-expanded="false" aria-controls="Clients">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title">Gestion des Clients</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Clients">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Clients.index")}}">Entreprise</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#domaines" aria-expanded="false" aria-controls="domaines">
          <i class="typcn typcn-compass menu-icon"></i>
          <span class="menu-title">Gestion des Domaines</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="domaines">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Domaines.index")}}">Domaines</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Categories" aria-expanded="false" aria-controls="Categories">
          <i class="typcn typcn-globe-outline menu-icon"></i>
          <span class="menu-title">Gestion des Categories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Categories">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Categories.index")}}">Categorie</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#reserve" aria-expanded="false" aria-controls="reserve">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span class="menu-title">Gestion des Entrées</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="reserve">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Reserces.index")}}">Entrées</a></li>
          </ul>
        </div>
      </li>
      <!-- Nouveau menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#sortie" aria-expanded="false" aria-controls="sortie">
          <i class="typcn typcn-chart-pie-outline menu-icon"></i>
          <span class="menu-title">Gestion des Sorties</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sortie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route("Dotations.index")}}">Sorties</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0 font-weight-bold">CherParent</h3>
            <p>Votre Derniere connexion: {{date('d-m-Y à h:i:s')}} à Ngweshe.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

