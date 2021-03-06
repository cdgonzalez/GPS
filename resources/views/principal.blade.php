<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Consejales</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}" media="screen,projection">

</head>
<body>
<?php use \app\Http\Controllers\PrincipalController
    ?>


<!-- Menú navbar-->
<div class="navbar-fixed">
    <nav class="menu grey lighten-2" data-target="menu">
        <div class="nav-wrapper">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black">menu</i></a>
          <a href="#" class="brand-logo center grey darken-1">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li style="width:170px;" class="blue"><i class="material-icons left">person</i><a href="consejales">Mis Consejales</a></li>
            <!-- Modal Trigger -->
            <li class="pink lighten-4"><a class="modal-trigger" href="#sesion"><i class="material-icons left ">account_circle</i>Iniciar Sesión</a></li>
          </ul>
        </div>
    </nav>
</div>




  <!-- Modal -->

  <!-- Modal Structure -->
  <div style="width: 30%; height: 60%;" id="sesion" class="modal">
    <div class="modal-content">
      <h4 style="color: #e0e0e0;">Iniciar Sesión</h4>
      <form action="Login" method="POST" id="formulario">
          <div class="input-field">
              <input name="matricula" id="mat" type="text" class="validate"><br>
              <label for="mat">Matricula</label>

          </div>
          <div class="input-field">
              <input name="pin" id="pin" type="password" class="validate"><br>
              <label for="pin">PIN</label>
          </div>

      </form>
    </div>
    <div class="modal-footer center">
      <div class="row">

          <div class="col m12">
            <input style="background-color: #1e88e5;" id="ingresar" class="col m12 btn" type="submit" value="Iniciar Sesión"><br>
          </div>
          <div class="col m12"><a style="background-color: #e0e0e0;" href="#!" class="modal-close col m12 waves-effect waves-green btn">Cancelar</a>
          </div>
            <div class="col m12"><a style="color: #e0e0e0; font-size: 2em; margin-top: 5%;" href="" class="modal-close col m12 waves-effect waves-green center">Recuperar PIN</a>
            </div>
      </div>
    </div>
  </div>

    <!-- SideNav -->

<div class="row">
    <ul class="sidenav" id="mobile-demo">
        <div class="">
            <ul class="collapsible grey darken-3">

            <li class="pink lighten-4"><a class="modal-trigger" href="#sesion"><i class="material-icons left ">account_circle</i>Iniciar Sesión</a></li>
            <li class="blue"><a href="consejales"><i class="material-icons left ">person</i>Mis Consejales</a></li>
            </ul>
        </div>
    </ul>
</div>





 <!-- Slider -->
  <div class="row">
        <div class="sli col s12">
             <div class="slider">
              <ul class="slides">
                <div class="carousel-fixed-item center" style="transform: translateX(10px) translateY(100px);">
                     <h3 class="waves-effect white-text darken-text-2"
                      >[FOTO AQUI]</h3><br>
                </div>

                <div class="carousel-fixe-item left" style="transform: translateX(10px) translateY(150px);">
                  <h4 class="waves-effect white-text darken-text-2">CEITM A. C.</h4><br>
                  <h5 class="waves-effect white-text darken-text-2">Somos estudiantes cómo tú dedicados a apoyarta</h5>
                </div>
              </ul>
            </div>
        </div>
  </div>


  <div class="row">
    <div class="col s12 m12 l3 xl3">
      <div class="card blue darken-4">
        <div class="card-content white-text">
          <span class="card-title">Apoyos Académicos</span>
          <p>Encargada de dar el apoyo y seguimiento a los proyectos de alumnos de
          esta institución, busca que los alumnos lleven a lo alto el nombre de esta institución de educación superior.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6 xl6">
      <div class="card amber darken-4">
        <div class="card-content white-text">
          <span class="card-title">Cafeterías y Comedor</span>
          <br>
          <br>
          <p>Esta coordinación es la encargada de proporcionar a los alumnos la atención necesaria para la solución a los problemas relacionados con la beca alimenticia manteniendo un constante contacto y buscando la pronta solución a los inconvencientes que se puedan presentar.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l3 xl3">
      <div class="card green darken-3">
        <div class="card-content white-text">
          <span class="card-title">Vinculación</span>
          <p>Es la coordinación del consejo estudiantil encargada de la formación de vinculos y relaciones con la finalidad de obtener un beneficio para la comunidad estudiantil del instituto tecnológico de Morelia.</p>
        </div>
      </div>
    </div>
  </div>


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


        @include ('footer')


</body>


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="{{ URL::asset('js/materialize.js') }}"></script>


    <script type="text/javascript">

        $(document).ready(function(){


            $("#ingresar").click(function(){
            var matricula = $("#mat").val();
            var pin = $("#pin").val();

            if(!(matricula.length == 8) ){
                alert("Revisa tu matricula");
            }else if(isNaN(matricula)){
                alert("Matrícula invalida");
            }else if(  pin.length < 6 || pin.length > 8 ){
                alert("PIN invalido");
            }else if(pin.length == 0){
                alert("Campo Vacio");

            }


            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            var formID = "#formulario";
                //alert(matricula+ " "+pin);
             $.ajax({

                //url: $(formID).attr('action'),
                url:'Login',
                dataType:"JSON",
                type: 'POST',
                data: $('#formulario').serialize(),
                success: function(response) {
                    var matri = response.matricula;
                    var nombre =response.nombre;
                    var admin = response.administrador;
                    if(admin == true){
                        location.href = "administrador/"+nombre;

                    }
                    else{
                        location.href = "consejales";
                    }


                },

        });

    });
        $('.collapsible').collapsible();
        $('.sidenav').sidenav();
        $('.modal').modal();
        $('.dropdown-trigger').dropdown({ hover: false, closeOnClick: false,            coverTrigger:      false, constrainWidth: false,inDuration: 500,
            outDuration: 400, });
            $('.slider').slider();
            $('.carousel.carousel-slider').carousel({fullWidth: true});
        });

    </script>
<!--    <script src="{{ URL::asset('js/login.js') }}"></script>-->
</html>
