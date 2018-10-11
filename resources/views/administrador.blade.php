<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}" media="screen,projection">
</head>
<body>


<!-- Menú navbar-->
<div class="navbar-fixed">
    <nav class="menu grey lighten-2" data-target="menu">
        <div class="nav-wrapper">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black">menu</i></a>
          <a href="#" class="brand-logo left grey darken-1" style="margin-left: 2%;">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li style="width:140px;" class="deep-purple lighten-3"><i class="material-icons left">cloud_circle</i><a href="sass.html">Votar</a></li>
            <li style="width:140px;" class="lime ligthten-1"><i class="material-icons left">cloud_circle</i><a href="sass.html">Votaciones</a></li>
            <li style="width:140px;" class="purple lighten-3"><i class="material-icons left">cloud_circle</i><a href="sass.html">Candidatos</a></li>
            <li style="width:140px;" class="green accent-3"><i class="material-icons left">cloud_circle</i><a href="sass.html">Usuarios</a></li>
            <li style="width:140px;" class="light-blue accent-3"><i class="material-icons left">cloud_circle</i><a href="sass.html">Consejales</a></li>
            <li style="width:140px;" class="pink accent-2"><i class="material-icons left">cloud_circle</i><a class="dropdown-trigger" href="#" data-target="opciones">[1515151]</a></li>

          </ul>
        </div>
    </nav>
</div>

<!--Dropdown Contenido-->
<ul id='opciones' class='dropdown-content'>
    <li><a href="#!">Cerrar Sesión</a></li>
    <li><a href="#!">Cambiar Contraseña</a></li>
    <li><a href="#!">Cambiar Pregunta secreta</a></li>
</ul>


<div class="row">
    <div class="col m12 l12">
        <h2 class="left" style="color: #e0e0e0;">Bienvenido, [Nombre de Usuario]</h2>
    </div>
    <div class="col m12 l12">
        <p>Desde esta pagina será capáz de controlar funciones administrativas de este sistema. <br>
           Si existe mas de un administrador, él será capáz de hacer las mismas funciones que tú.</p>

    </div>
</div>

<div class="page-footer white" style="margin-top:23%;  ">
     <div class="row">
      <div class="col s9 ">
          <span>
              <p style="color:black;">Copyright 2018 Sistema de Votos CEITM by ManSoft</p>
          </span>
      </div>
      <div class="col s2 offset-s1">
          <img width="75px" height="75px" src="{{ URL::asset('img/logo.jpg') }}" class="image-responsive" alt="logo">
      </div>
  </div>
</div>

</body>


       <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="{{ URL::asset('js/materialize.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function(){

            $('.collapsible').collapsible();
            $('.sidenav').sidenav();
            $('.modal').modal();
            $('.dropdown-trigger').dropdown({ hover: false, closeOnClick: false,            coverTrigger:      false, constrainWidth: false,inDuration: 500,
                outDuration: 400, });
                $('.slider').slider();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
            });

    </script>
</html>