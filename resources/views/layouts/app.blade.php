<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  -->
    <title>
    Componente Software
   </title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <!-- CSS Files -->
    <link href ="{{asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/table.css')}}" rel="stylesheet" />
   
    
</head>

<body>
    <!-- The navigation bar begin -->
    <!-- <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="index.html">
             Componente
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{url('register')}}" class="nav-link create-recipe-link">Registrar Usuarios
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{url('logout')}}">salir
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                 <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form> 
            </ul>
        </div>
    </nav> -->

    <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          Componente
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="{{url('home')}}">
              <i class="material-icons">dashboard</i>
              <p>Pagina Principal</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="{{url('usuario')}}">
              <i class="material-icons">person</i>
              <p>Gestion Usuario</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="">
              <i class="material-icons">content_paste</i>
              <p>Gestion Rol</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">
              <i class="material-icons">library_books</i>
              <p>Gestion Privilegio</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">
              <i class="material-icons">bubble_chart</i>
              <p>Bitacora</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li> -->
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li> -->
          <!-- <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    
    <div class="main-panel">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="">
             Componente
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav ml-auto">
                 <!-- <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link create-recipe-link">Registrar Usuarios
                        <span class="sr-only">(current)</span>
                    </a>
                </li>  -->
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{url('logout')}}">salir
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    </div>
    <!-- The navigation bar ending -->
    

    <!--Begin page footer -->
    
    <!-- End page footer -->

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script> -->
    <!-- 
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script> -->
    <!-- Plugin for the momentJs  -->
    
    
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/core/jquery.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/table.js') }}"></script>
</body>

</html>