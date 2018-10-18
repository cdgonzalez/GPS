<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Consejal</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}" media="screen,projection">
    <link rel="stylesheet" href="{{ URL::asset('css/modificarConcejal.css')}}">
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


    <div id="modal1" class="modal">
      <div id="modal-content1" class="modal-content">
      </div>
    </div>

    <div id="modal2" class="modal">
      <div id="modal-content2" class="modal-content">
      <span>¿Estas Seguro?</span>
      </div>
      <div class="modal-footer">
        <a class=" modal-action modal-close waves-effect waves-green btn-flat">cancelar</a>
        <a id="si-borrar" class=" modal-action modal-close waves-effect waves-green btn-flat">Si</a>
      </div>
    </div>

    <section class="container">
      <div id="div-buscar" class="row">
        <div class="col s12 m6 offset-m3">
          <h5 id="titulo1">Modificar concejales</h5>

          <div class="input-field">
            <input id="busqueda" type="text" name="buscarMN" placeholder="Ingrese matricula o nombre de concejal a modificar">
          </div>

          <div id="div-btn-buscar">
            <button id="btn-buscar" class="btn btns blue">Buscar</button>
          </div>

          <div id="div-btn-cancelar">
            <button id="btn-cancelar" class="btn btns grey">Cancelar</button>
          </div>
        </div>
      </div>

      <div id="div-datos" class="row">
        <div class="col s12 m3">
          <button id="btn-regresar" class="btn btns grey">Regresar a busqueda</button>
        </div>

        <div class="col s12 m6">
          <h5 id="titulo2" class="center-align">Datos de [Matricula, Nombre completo]</h5>

          <div class="card-image">
            <img id="output" src="{{ URL::asset('img/sinFoto.jpg')}}">
          </div>

          <div id="buscarArchivo" class="file-field input-field">
            <div class="btn">
              <span>Buscar</span>
              <input id="archivo" type="file" accept=".png,.jpg">
            </div>
            <div class="file-path-wrapper">
              <input id="nombre-archivo" class="file-path validate" type="text" placeholder="Fotografia">
            </div>
          </div>

          <div class="input-field col s12 m6">
            <select id="periodo">
              <option value="0" disabled selected>Periodo</option>
              <option value="1">ENE-JUN</option>
              <option value="2">AGO-DIC</option>
            </select>
          </div>

          <div class="input-field col s12 m6">
            <select id="ano">
              <option value="0" disabled selected>Año</option>
            </select>
          </div>
        </div>

        <div id="div-btn-añadir" class="col s12 m3">
          <button id="btn-add" class="btn btns blue">Añadir propuesta</button>

          <div id="div_propuestas" class="row"></div>
        </div>

        <div id="div-btn-datos" class="col s12 m6 offset-m3">
          <div id="div-btn-actualizar">
              <button id="btn-actualizar" class="btn btns blue">Actualizar</button>
            </div>

            <div id="div-btn-borrar">
              <button id="btn-baja" class="btn btns red" href="#modal2">Dar de baja</button>
            </div>

            <div id="div-btn-cancelar">
              <button id="btn-cancelar2" class="btn btns grey">Cancelar</button>
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


    <script src="{{ URL::asset('js/modificarConcejal.js') }}"></script>
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
