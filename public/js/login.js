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

        var dato = {
            mat:matricula,
            p:pin,
        }

         $.ajax({
        url: "Login",
        type: 'POST',
        data: dato,
       // dataType:"JSON",
        success: function(msg) {
         alert(msg);


        }

    });

    });
});
