<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{Auth::user()->Entreprises->sigle}}</title>
    <link rel="stylesheet" href="{!! url('template/vendors/typicons.font/font/typicons.css') !!}">
    <link rel="stylesheet" href="{!! url('template/css/vertical-layout-light/style.css') !!}">
    <link rel="stylesheet" href="{!! url('template/vendors/mdi/css/materialdesignicons.min.css') !!}">
    <link rel="stylesheet" href="{!! url('template/css/vertical-layout-light/sweetalert.css') !!}">
    <link rel="shortcut icon" href="{{asset(Auth::user()->Entreprises->logo)}}">
    @livewireStyles
  </head>
  <body>
    <div class="container-scroller">
        @include('layouts.partials._navbar')
        @include('layouts.partials._sidebar')
        @yield('contenu')
        @include('layouts.partials._footer')
    </div>
    @livewireScripts
    <script src="{!! url('template/vendors/js/vendor.bundle.base.js')!!}"></script>
    <script src="{!! url('template/js/off-canvas.js') !!}"></script>
    <script src="{!! url('template/js/hoverable-collapse.js') !!}"></script>
    <script src="{!! url('template/js/alerts.js') !!}"></script>
    <script src="{!! url('template/js/template.js') !!}"></script>
    <script src="{!! url('template/js/cdn.min.js') !!}"></script>
    <script src="{!! url('template/js/swetalert-modal.js') !!}"></script>
    <script src="{!! url('template/js/todolist.js') !!}"></script>
    <script src="{!! url('template/js/dashboard.js') !!}"></script>
  </body>
  @show
</html>