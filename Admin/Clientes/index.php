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
        <small>Clientes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Registro de Clientes</li>
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
                  <label class="control-label" for="id_first_name">Cédula de Identidad</label>
                  <input data-toggle="tooltip" class="form-control" maxlength="" id="cedulaCliente" name="cedula" placeholder="Cedula de Identidad" required="yes" type="text" onblur="this.value=this.value.toUpperCase()"  value="" onKeyPress="return valida(event,this,10,8)">
                                            </div>
              </div>

                <div class="col-sm-4 col-md-4">
                  <div class="form-group">
                    <label class="control-label" for="id_first_name">Primer Nombre (<span class="has">*</span>)</label>
                    <input data-toggle="tooltip" class="form-control" name="nombre" id="nombre" placeholder="Primer Nombre" required="required" type="text" onblur="this.value=this.value.toUpperCase()" value="" onkeypress="return valida(event,this,0,25)">
                  </div>
                </div>

                <div class="col-sm-4 col-md-4">
                  <div class="form-group">
                    <label class="control-label" for="id_middle_name">Segundo Nombre</label>
                      <input class="form-control" name="nombre_2" id="nombre_2" placeholder="Segundo Nombre" data-toggle="tooltip" type="text" onblur="this.value=this.value.toUpperCase()" value="" onkeypress="return valida(event,this,0,25)">
                  </div>
                </div>

                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="id_last_name">Primer Apellido (<span class="has">*</span>)</label>
                    <input data-toggle="tooltip" class="form-control " name="apellido" id="apellido" placeholder="Primer Apellido" required="required" data-original-title="Indica la información de tu primer apellid type="text" onblur="this.value=this.value.toUpperCase() " value="" onkeypress="return valida(event,this,0,25)">
                  </div>
                </div>

                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="id_last_name">Segundo Apellido (<span class="has">*</span>)</label>
                    <input data-toggle="tooltip" class="form-control" name="apellido_2" id="apellido_2" placeholder="Segundo Apellido" required="required" type="text" onblur="this.value=this.value.toUpperCase()" value="" onkeypress="return valida(event,this,0,25)">
                  </div>
                </div>
              </div> <!-- FIN ROW -->

              <div class="row">
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="id_country">Estado</label>
                      <select name="estado" id="estado" class="form-control" required="yes">
                        <?php if ($número_filas=="0") { ?>
                          <option   selected="" value="0">Seleccione...</option>
                            <?php } if ($número_filas=="1") {  ?>
                              <option selected="" value="<?php echo $vec['codestado'] ?>"><?php  echo $vec["estado"]; ?></option>
                            <?php } ?>
                              <?php  
                              //Aqui me conecto a la base de datos y ejecuto una consulta SQL para traer todos los paises;
                              $sql = "SELECT * FROM estados ORDER BY estado";
                              $stmt = $conn -> prepare($sql);
                              $stmt -> execute();
                                if($stmt->rowCount()>0){
                                  while ($fila = $stmt->fetch( PDO::FETCH_ASSOC )) {
                                    ?>
                              <option value="<?php echo $fila['codestado']; ?>"><?php echo $fila['estado']; ?></option>
                                  <?php
                                    }
                                   }
                                ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="control-label" for="id_country">Municipio</label>
                        <select name="municipio" id="municipio" required="yes" class="form-control">
                          <?php if ($número_filas=="0") { ?>
                            <option  selected="" value="0">Seleccione...</option>
                          <?php } if ($número_filas=="1") {  ?>
                            <option selected="" value="<?php echo $vec['codmunicipio'] ?>"><?php  echo $vec["municipio"]; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-3 col-md-3">
                      <div class="form-group">
                        <label class="control-label" for="id_country">Parroquia</label>
                          <select name="parroquia" id="parroquia" required="yes" class="form-control">
                            <?php if ($número_filas=="0") { ?>
                              <option   selected="" value="0">Seleccione...</option>
                            <?php } if ($número_filas=="1") {  ?>
                              <option selected="" value="<?php echo $vec['codparroquia']; ?>"><?php  echo $vec["parroquia"]; ?></option>
                            <?php } ?>
                          </select>
                       </div>
                    </div>

                    <div class="col-sm-3 col-md-3">
                      <div class="form-group">
                        <label class="control-label" for="id_last_name">Ciudad / Localidad</label>
                          <input data-toggle="tooltip" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad / Localidad" required="required" type="text" onblur="this.value=this.value.toUpperCase()" value="" onKeyPress="return valida(event,this,0,25)">
                       </div>
                    </div>    

              </div> <!-- FIN DEL ROW -->

              <div class="row"> <!-- INICIO ROW -->

                <div class="form-group">
                  <div class="col-sm-12 col-md-12">
                    <div class="form-group"><label class="control-label" for="id_address">Dirección (<span class="has">*</span>)</label>
                    <input class="form-control" data-toggle="tooltip" id="direccion" name="direccion" placeholder="Dirección" required="required" title="" type="text" value="" onblur="this.value=this.value.toUpperCase()" onkeypress="return valida(event,this,23,200)">
                    </div>                           
                  </div>
                </div>
              </div> <!-- FIN ROW -->

              <div class="row"> <!-- INICIO ROW -->

                <div class="col-sm-4 col-md-4">
                    <div class="form-group">
                      <label class="control-label" for="id_birth">Fecha de Nacimiento</label>
                      <input class="form-control" id="id_birth" name="fecha_nac" placeholder="Fecha de Nacimiento" title="" type="text" readonly="" value="">
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                  <div class="form-group">
                    <label class="control-label" for="id_country">Sexo</label>
                    <select class="form-control" name="sexo" id="sexo" required="required" >
                      <?php if ($número_filas=="0") { ?>
                        <option  selected="" value="0">Seleccione...</option>
                      <?php } if ($número_filas=="1") {  ?>
                        <option selected="" value="<?php echo $sexo_valor;?>"><?php  echo $sexo ?></option>
                      <?php } ?>
                        <option value="1">Femenino</option>
                        <option value="2">Masculino</option>
                    </select>
                  </div>
                </div>
    
              </div>  <!-- FIN ROW -->
                                      
              <div class="row"> <!-- INICIO ROW -->
                                       
                    
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="id_last_name">Teléfono Local </label>
                    <input data-toggle="tooltip" class="form-control " id="telefono" placeholder="0000-000-00-00" maxlength="35" name="telefono"  type="text" value="" onkeyup="mascara(this,'-',patron2,true)" onkeypress="return valida(event,this,10,14)">
                  </div>
                </div> 

                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="id_last_name">Teléfono Celular (<span class="has">*</span>)</label>
                    <input data-toggle="tooltip" class="form-control " name="celular" id="celular" placeholder="0000-000-00-00" required="yes" type="text" value="" onkeyup="mascara(this,'-',patron2,true)" onkeypress="return valida(event,this,10,14)">
                  </div>
                </div> 
  

              </div><!-- FIN ROW -->
     

              <div class="row"> <!-- INICIO ROW -->
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="id_first_name">Correo electrónico principal (<span class="has">*</span>)</label>
                    <input data-toggle="tooltip" class="form-control " name="correo" id="correo" placeholder="Correo electrónico principal" required="yes"  type="email" value="" onblur="this.value=this.value.toUpperCase()" onkeypress="return valida(event,this,5,50)">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="id_country">Concesionario</label>
                      <select name="estado" id="concecionario" class="form-control" required="yes">
                        <?php if ($número_filas=="0") { ?>
                          <option   selected="" value="0">Seleccione...</option>
                            <?php } if ($número_filas=="1") {  ?>
                              <option selected="" value="<?php echo $vec['id_concecionario'] ?>"><?php  echo $vec["nombre_concecionario"]; ?></option>
                            <?php } ?>
                              <?php  
                              //Aqui me conecto a la base de datos y ejecuto una consulta SQL para traer todos los paises;
                              $sql = "SELECT * FROM concecionarios ORDER BY nombre_concecionario";
                              $stmt = $conn -> prepare($sql);
                              $stmt -> execute();
                                if($stmt->rowCount()>0){
                                  while ($fila = $stmt->fetch( PDO::FETCH_ASSOC )) {
                                    ?>
                              <option value="<?php echo $fila['id_concecionario']; ?>"><?php echo $fila['nombre_concecionario']; ?></option>
                                  <?php
                                    }
                                   }
                                ?>
                      </select>
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

    var cedulaCliente         = $('#cedulaCliente').val();
    var nombreCliente         = $('#nombre').val();
    var nombreCliente2        = $('#nombre_2').val();
    var apellidoCliente       = $('#apellido').val();
    var apellidoCliente2      = $('#apellido_2').val();
    var estadoCliente         = $('#estado').val();
    var municipioCliente      = $('#municipio').val();
    var parroquiaCliente      = $('#parroquia').val(); 
    var ciudadCliente         = $('#ciudad').val();
    var direccionCliente      = $('#direccion').val(); 
    var nacimientoCliente     = $('#id_birth').val();  
    var sexoCliente           = $('#sexo').val();
    var telefonoCliente       = $('#telefono').val();
    var celularCliente        = $('#celular').val();
    var correoCliente         = $('#correo').val();
    var concecionarioCliente  = $('#concecionario').val();

  if (cedulaCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Cedula).","warning")
  } else if (nombreCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Primer Nombre).","warning")
  } else if (apellidoCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Primer Apellido).","warning")
  } else if (apellidoCliente2 == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Segundo Apellido).","warning")
  } else if (estadoCliente == '0') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Estado).","warning")
  } else if (municipioCliente == '0') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Municipio).","warning")
  } else if (parroquiaCliente == '0') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Parroquia).","warning")
  } else if (ciudadCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Ciudad).","warning")
  } else if (direccionCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Dirección).","warning")
  } else if (nacimientoCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Fecha Nacimiento).","warning")
  } else if (sexoCliente == '0') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Sexo).","warning")
  } else if (celularCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Celular).","warning") 
  } else if (correoCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Correo).","warning")
  } else if (concecionarioCliente == '') {
    swalAlert("¡ Advertencia !","Por favor complete el campo (Concecionario).","warning")               
  } else {

        $.ajax({
            url: '../class/registro.php',
            type: 'POST',
            dataType: 'json',
            data: {
                  action: 'GuardarDatosClientes',
                  "cedulaCliente"        : cedulaCliente,
                  "nombreCliente"        : nombreCliente,
                  "nombreCliente2"       : nombreCliente2,
                  "apellidoCliente"      : apellidoCliente,
                  "apellidoCliente2"     : apellidoCliente2,
                  "estadoCliente"        : estadoCliente,
                  "municipioCliente"     : municipioCliente,
                  "parroquiaCliente"     : parroquiaCliente,
                  "ciudadCliente"        : ciudadCliente,
                  "direccionCliente"     : direccionCliente,
                  "nacimientoCliente"    : nacimientoCliente,
                  "sexoCliente"          : sexoCliente,
                  "telefonoCliente"      : telefonoCliente,
                  "celularCliente"       : celularCliente,
                  "correoCliente"        : correoCliente,
                  "concecionarioCliente" : concecionarioCliente
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


</script>
    
</body>
</html>
