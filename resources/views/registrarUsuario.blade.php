<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Consejal</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}" media="screen,projection">
    <link rel="stylesheet" href="{{ URL::asset('css/registrarUsuario.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>


<!-- Menú navbar-->
<div class="navbar-fixed">
    <nav class="grey lighten-2" data-target="menu">
        <div class="nav-wrapper">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black">menu</i></a>
          <a href="#" class="brand-logo left grey darken-1" style="margin-left: 7%;">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li style="width:140px;" class="deep-purple lighten-3"><i class="material-icons left">cloud_circle</i><a href="">Votar</a></li>

            <li style="width:140px;" class="lime ligthten-1"><i class="material-icons left">cloud_circle</i><a class="dropdown-trigger" href="#!" data-target="dropVotN">Votaciones</a></li>

            <li style="width:140px;" class="purple lighten-3"><i class="material-icons left">cloud_circle</i><a class="dropdown-trigger "href="#!" data-target="dropCandiN">Candidatos</a></li>

            <li style="width:140px;" class="green accent-3"><i class="material-icons left">cloud_circle</i><a  class="dropdown-trigger" href="#!" data-target="dropUserN">Usuarios</a></li>

            <li style="width:140px;" class="light-blue accent-3"><i class="material-icons left">cloud_circle</i><a class="dropdown-trigger" href="#!" data-target='dropConseN'>Consejales</a></li>

            <li style="width:140px;" class="pink accent-2"><i class="material-icons left">cloud_circle</i><a class='dropdown-trigger' href="#!" data-target='opcionesN'>[1515151]</a></li>

          </ul>



        </div>
    </nav>
</div>

    <!-- Dropdown Contenido NavBar-->
            <ul id='opcionesN' class='dropdown-content'>
                <li><a href="#!">Cerrar Sesión</a></li>
                <li><a href="#!">Cambiar Contraseña</a></li>
                <li><a href="#!">Cambiar Pregunta secreta</a></li>
            </ul>
            <!--Dropdown Usuarios-->
            <ul id='dropUserN' class="dropdown-content">
                <li><a href="registrarUsu">Registrar</a></li>
                <li><a href="modificarUsuario">Modificar</a></li>

            </ul>
            <!--Dropdown Consejales-->
            <ul id='dropConseN' class="dropdown-content">
                <li><a href="#!">Registrar</a></li>
                <li><a href="modificarConse">Modificar</a></li>

            </ul>
            <!--Dropdown Candidatos-->
            <ul id='dropCandiN' class="dropdown-content">
                <li><a href="#!">Nuevo</a></li>
                <li><a href="#!">Modificar</a></li>
            </ul>
            <!--Dropdown Votaciones-->
            <ul id='dropVotN' class="dropdown-content">
                <li><a href="#!">Nueva</a></li>
                <li><a href="#!">Ver Votaciones</a></li>
            </ul>


   <!--Dropdown Contenido SideNav-->
            <ul id='opciones' class='dropdown-content'>
                <li><a href="#!">Cerrar Sesión</a></li>
                <li><a href="#!">Cambiar Contraseña</a></li>
                <li><a href="#!">Cambiar Pregunta secreta</a></li>
            </ul>
            <!--Dropdown Usuarios-->
            <ul id='dropUser' class="dropdown-content">
                <li><a href="registrarUsu">Registrar</a></li>
                <li><a href="modificarUsuario">Modificar</a></li>

            </ul>
            <!--Dropdown Consejales-->
            <ul id='dropConse' class="dropdown-content">
                <li><a href="#!">Registrar</a></li>
                <li><a href="modificarConse">Modificar</a></li>

            </ul>
            <!--Dropdown Candidatos-->
            <ul id='dropCandi' class="dropdown-content">
                <li><a href="#!">Nuevo</a></li>
                <li><a href="#!">Modificar</a></li>
            </ul>
            <!--Dropdown Votaciones-->
            <ul id='dropVot' class="dropdown-content">
                <li><a href="#!">Nueva</a></li>
                <li><a href="#!">Ver Votaciones</a></li>
            </ul>


    <!-- SideNav -->

<div class="row">
    <ul class="sidenav" id="mobile-demo">
        <div class="">
            <ul class="collapsible grey darken-3">
             <li class="pink accent-2"><i class="material-icons left">cloud_circle</i><a class="dropdown-trigger" href="#" data-target="opciones">[1515151]</a></li>
             <h6 class="white">Opciones Administrativas</h6>

             <li class="light-blue accent-3"><i class="material-icons left">cloud_circle</i><a class="dropdown-trigger" href="#" data-target='dropConse'>Consejales</a></li>

             <li class="green accent-3"><i class="material-icons left">cloud_circle</i><a  class="dropdown-trigger" href="#" data-target="dropUser">Usuarios</a></li>
             <li class="purple lighten-3"><i class="material-icons left">cloud_circle</i><a class="dropdown-trigger" href="#" data-target="dropCandi">Candidatos</a></li>
             <li class="lime ligthten-1"><i class="material-icons left">cloud_circle</i><a class="dropdown-trigger" href="#" data-target="dropVot">Votaciones</a></li>
             <li class="deep-purple lighten-3"><i class="material-icons left">cloud_circle</i><a href="">Votar</a></li>





            </ul>
        </div>
    </ul>
</div>

  <section class="container">
      <div class="row">
        <div id="formulario" class="col s12 m6 offset-m3">
          <h5 id="titulo">Registrar usuario</h5>

          <div class="input-field">
            <input id="nombre" type="text" name="nombre" placeholder="Nombre">
          </div>

          <div class="input-field">
            <input id="matricula" type="text" name="matricula" placeholder="Matricula">
          </div>

          <div class="input-field">
            <select id="carrera">
              <option value="0" disabled selected>Carrera</option>
              <option value="1">Ing. Sistemas Computacionales</option>
              <option value="2">Ing. Informatica</option>
              <option value="3">Ing. Tecnologias de la Informacion</option>
              <option value="4">Ing. Industrial</option>
              <option value="5">Ing. Gestion Empresarial</option>
              <option value="6">Lic. Administracion</option>
              <option value="7">Ing. Electrica</option>
              <option value="8">Lic. Contador Publico</option>
              <option value="9">Ing. Bioquimica</option>
              <option value="10">Ing. Electronica</option>
              <option value="11">Ing. Mecatronica</option>
              <option value="12">Ing. Mecanica</option>
              <option value="13">Ing. Materiales</option>
            </select>
          </div>

          <div class="input-field">
            <label for="administrador">
              <input type="checkbox" id="administrador"/>
              <span>Es administrador</span>
            </label>
          </div>

          <div id="div-btn-registrar">
            <button id="btn-registrar" class="btn green boton">Registrar</button>
          </div>

          <div id="div-btn-cancelar">
            <button id="btn-cancelar" class="btn grey boton">Cancelar</button>
          </div>
        </div>
      </div>
    </section>

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


    <script src="{{ URL::asset('js/registrarUsuario.js') }}"></script>
    <script src="{{ URL::asset('js/materialize.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function(){


            $('.collapsible').collapsible();
            $('.sidenav').sidenav();
            $('.modal').modal();
            $('.dropdown-trigger').dropdown({ hover: false, closeOnClick: false,            coverTrigger:      false, constrainWidth: false,inDuration: 500,
                outDuration: 400, });
            });

    </script>
</html>
