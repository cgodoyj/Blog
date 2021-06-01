<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>Star Admin Pro Laravel Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="uMRUlGlOcQs5UpCOe9su7VD0dyVjILsxycET7At1">
  
  <link rel="shortcut icon" href="favicon.ico">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('plugins/%40mdi/font/css/materialdesignicons.min.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- end plugin css -->

    <!-- <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template/assets/plugins/plugin.css"> -->

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
  <!-- end common css -->
@yield('css')

</head>
<body>
  <div class="container-scroller" id="app2">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template">
        <img src="{{asset('images/logo.svg')}}" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template">
        <img src="{{asset('images/logo-mini.svg')}}" alt="logo" /> </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-outline"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <img src="{{asset('images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <img src="{{asset('images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <img src="{{asset('images/faces/face3.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count bg-success">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                  <p class="font-weight-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                  <p class="font-weight-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                  <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block" id="color-setting">
            <a class="nav-link" href="#">
              <i class="mdi mdi-tune"></i>
            </a>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text d-none d-md-inline-flex">Richard V.Welsh !</span>
            <img class="img-xs rounded-circle" src="{{asset('images/faces/face8.jpg')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom w-100 justify-content-center">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2"> Manage Accounts </a>
              <a class="dropdown-item"> Change Password </a>
              <a class="dropdown-item"> Check Inbox </a>
              <a class="dropdown-item" href="/logout"> Sign Out </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu icon-menu"></span>
        </button>
      </div>
    </nav> 
    <div class="container-fluid page-body-wrapper">
    <div class="right-sidebar-toggler-wrapper">
      <div class="sidebar-toggler" id="chat-toggler"><i class="mdi mdi-chat-processing"></i></div>
      <div class="sidebar-toggler"><a href="https://www.bootstrapdash.com/demo/star-laravel-pro/documentation/documentation.html" target="_blank"><i class="mdi mdi-file-document-outline"></i></a></div>
      <div class="sidebar-toggler"><a href="https://www.bootstrapdash.com/" target="_blank"><i class="mdi mdi-cart"></i></a></div>
    </div>
    <div class="theme-setting-wrapper">
      <div id="color-settings" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <div class="d-flex align-items-center justify-content-between border-bottom">
          <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>
        </div>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
          <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
        </div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme">
          <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
        </div>
        <p class="settings-heading font-weight-bold mt-2">Header Skins</p>
        <div class="color-tiles mx-0 px-2">
          <div class="tiles primary"></div>
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles pink"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default"></div>
        </div>
      </div>
    </div>
    <div id="right-sidebar" class="settings-panel">
      <i class="settings-close mdi mdi-close"></i>
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile">
            <img src="{{asset('images/faces/face3.jpg')}}" alt="image">
            <span class="online"></span>
          </div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="{{asset('images/faces/face2.jpg')}}" alt="image">
            <span class="offline"></span>
          </div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="{{asset('images/faces/face3')}}.jpg" alt="image">
            <span class="online"></span>
          </div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="{{asset('images/faces/face4')}}.jpg" alt="image">
            <span class="offline"></span>
          </div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="{{asset('images/faces/face5')}}.jpg" alt="image">
            <span class="online"></span>
          </div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="{{asset('images/faces/face6')}}.jpg" alt="image">
            <span class="online"></span>
          </div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    <!--Inicio de menu lateral-->
    <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile not-navigation-link">
          <div class="nav-link">
            <div class="user-wrapper">
              <div class="profile-image">
                <img src="{{asset('images/faces/face8.jpg')}}" alt="profile image">
              </div>
              <div class="text-wrapper">
                <p class="profile-name">Richard V.Welsh</p>
                <div class="dropdown" data-display="static">
                  <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <small class="designation text-muted">Administrator</small>
                    <span class="status-indicator online"></span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                    <a class="dropdown-item p-0">
                      <div class="d-flex border-bottom">
                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                          <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                        </div>
                        <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                          <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                        </div>
                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                          <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item mt-2"> Manage Accounts </a>
                    <a class="dropdown-item"> Change Password </a>
                    <a class="dropdown-item"> Check Inbox </a>
                    <a class="dropdown-item"> Sign OutX </a>
                  </div>
                </div>
              </div>
            </div>
            <a href="{{route('EntradaForm')}}" style="text-decoration: none;"> <button class="btn btn-success btn-block">Nuevo Evento <i class="mdi mdi-plus"></i></button></a>
            
          </div>
        </li>
        <!--Inicio de div del menu dashboard-->
        <li class="nav-item active">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <!--Fin de div del menu dashboard-->
        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="false" aria-controls="basic-ui">
            <i class="menu-icon mdi mdi-dna"></i>
            <span class="menu-title">Entrada de Eventos</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse " id="basic-ui">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a class="nav-link" href="{{route('EntradaIndex')}} ">Lista de Eventos</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#advanced-ui" aria-expanded="false" aria-controls="advanced-ui">
            <i class="menu-icon mdi mdi-cards-variant"></i>
            <span class="menu-title">Captura IPH</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse " id="advanced-ui">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a class="nav-link" href="advanced-ui/dragula.html">Lista de IPH</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
            <i class="menu-icon mdi mdi-format-list-bulleted"></i>
            <span class="menu-title">Reportes</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse " id="forms">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a class="nav-link" href="forms/basic-elements.html">Reportes Personalizados</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
            <i class="menu-icon mdi mdi-code-tags"></i>
            <span class="menu-title">Trazabilidad</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse " id="editors">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a class="nav-link" href="forms/basic-elements.html">Lista de Seguimiento</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#editors1" aria-expanded="false" aria-controls="editors">
            <i class="menu-icon mdi mdi-code-tags"></i>
            <span class="menu-title">Fiscalia</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse " id="editors1">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a class="nav-link" href="forms/basic-elements.html">Carpetas de Investigación</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <!--Fin de menu lateral-->

  @yield('content')
  
  </div>
</div>
<!--@include('layouts.footer')-->
</body>

@yield('js')	

  <!-- base js -->
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <!-- end base js -->

  <!-- plugin js -->
  <script src="{{asset('plugins/chartjs/chart.min.js')}}"></script>
  <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- end plugin js -->

  <!-- common js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- end common js -->

  <script src="{{asset('js/dashboard.js')}}"></script>

</html>
