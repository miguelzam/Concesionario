<?php
//error_reporting(0);
include('../conexion/conexion.php');
require_once('../login/comprobarweb.php');


$número_filas = '0' ;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Consultec | Sistema de Concesionarios</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" type="text/css" href="../plugins/sweetalert/sweetalert.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    
  
    <link rel="stylesheet" type="text/css" href="../css/jquery.datetimepicker.css"/>

  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
  include("../menu/menu.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear
        <small>Usuarios del Sistema</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Registro de Usuarios</li>
      </ol>
    </section>
 <div id="resultado"></div>
    <!-- Main content -->
    <section class="content">
   
  <form name="nuevo_evento" action="" onsubmit="enviarDatos(); return false">
  <!--<form name="nuevo_evento" method="POST" action="registro.php">-->

  <fieldset>

  <div class="row"> <!-- INICIO del div row global -->

<div class="panel-body">

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <div class="form-group">

        <form name="frm" action="registro/registro_basica.php" method="POST">

          
              <div class="row"> <!-- INICIO ROW -->

              <div class="col-sm-4 col-md-4">

                <div class="form-group">
                  <label class="control-label" for="id_first_name">Usuario</label>
                  <input data-toggle="tooltip" class="form-control" maxlength="" id="usuario" name="cedula" placeholder="Usuario" required="yes" type="text" onblur="this.value=this.value.toUpperCase()"  value="" onKeyPress="return valida(event,this,0,8)">
                </div>

              </div>

                <div class="col-sm-4 col-md-4">
                <div class="form-group">
                  <label class="control-label" for="id_first_name">Contraseña</label>
                  <input data-toggle="tooltip" class="form-control" maxlength="" id="password" name="cedula" placeholder="Contraseña" required="yes" type="text" onblur="this.value=this.value.toUpperCase()"  value="" onKeyPress="return valida(event,this,14,10)">
                </div>
                </div>

              </div> <!-- FIN ROW -->



            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row"> <!-- INICIO ROW --> 
      <div class="col-sm-3 col-md-3 col-md-offset-10">
        <button onclick="GuardarDatosClientes();" type="button" class="btn btn-primary">Guardar</button>
      </div> <!-- Cierre del div row global -->
    </div>
  </fieldset>
</form>
      
      
        
        
    </section>
    <!-- Main/.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include("../menu/footer.php");
?>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js">
</script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
    
<script src="../js/jquery-1.12.0.js">
</script> 

<script src="../js/jquery.datetimepicker.js"></script>

<script type="text/javascript" src="../plugins/sweetalert/sweetalert.min.js"></script>   
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/validar.js"></script>
<script type="text/javascript" src="../js/validar_telefono.js"></script>


<script>

    $jQuery_1_12_2('#id_birth').datetimepicker({
        lang:'es',
        timepicker:false,
        //FORMANO DEL HTML 
        format:'d/m/Y',
        //FORMANO DEL BASE DE DATOS 
        formatDate:'Y-m-d',


    });


    function GuardarDatosClientes() {

    var usuario        = $('#usuario').val();
    var password       = $('#password').val();


  if (usuario == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (usuario).","warning")
  } else if (password == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (password).","warning")               
  } else {

        $.ajax({
            url: '../class/registro.php',
            type: 'POST',
            dataType: 'json',
            data: {
                  action: 'GuardarUsuario',
                  "usuario"         : usuario,
                  "password"        : password
                  },
        })
        .done(function(respuesta) {
        console.log(respuesta);
        
        if (!respuesta.error) {

          if (respuesta.tipo == '1') {
              swalAlert("¡ Buen trabajo !","La operación se hizo satisfactoriamente.","success",2000);
              limpiarCampos();
          }

        } else {
          
        swalAlert("¡ Ups !","Ocurrió un error inesperado.","error");

        } // ELSE

        })
        .fail(function(respuesta) {
            console.log("error");
            console.log(respuesta);

        })
        .always(function(respuesta) {
            console.log("complete");

        });

           

      } // ELSE

        
    }

function limpiarCampos(){


}

</script>

    
</body>
</html>
