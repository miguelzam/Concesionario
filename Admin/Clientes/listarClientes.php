<?php
//error_reporting(0);
include('../conexion/conexion.php');
require_once('../login/comprobarweb.php');

$sql = "SELECT * FROM clientes
        INNER JOIN concecionarios ON clientes.concecionario=concecionarios.id_concecionario
        WHERE estatus = 'activo'";
$stmt = $conn -> prepare($sql);
$stmt -> execute();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Consultec | Sistema de concesionarios</title>
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
        Listar
        <small>Clientes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Listado de Clientes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="col-lg-12">
    <div class="row" >
        <table class="table table-bordered"">
            <thead>
                      <tr class="tr-dark">
                          <th scope="col" class="p-8-20">Cedula</th>
                          <th scope="col" class="p-8-20">Nombre</th>
                          <th scope="col" class="p-8-20">Concesionario</th>
                          <th scope="col" class="p-8-20">Estatus</th>

                      </tr>
                    </thead>
         <tbody>
        <?php while ($Clientes = $stmt->fetch( PDO::FETCH_ASSOC )){ ?>
        <tr>
            <td ><?php echo $Clientes["cedula"]; ?></td>
            <td><?php echo $Clientes["nombre"]." ".$Clientes["nombre_2"]." ".$Clientes["apellido"]." ".$Clientes["apellido_2"]; ?></td>
            <td><?php echo $Clientes["nombre_concecionario"]; ?></td>
            <td><?php echo $Clientes["estatus"]; ?></td>

            <td >
              <a type="button" id="" class="btn p-5-10" href='modificar.php?Cliente=<?php echo $Clientes["cedula"]; ?>'><i id="" class="fa fa-eye"></i></a>
              <button type="button"  class="btnBorrar btn btn p-5-10" attrId="<?php echo $Clientes["cedula"]; ?>"><i class="fa fa-trash"></i></button></td>
        </tr>
        <?php } ?>
        </tbody>
        </table>


        </div>
      </div> 
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

<script type="text/javascript">
  
  $(document).on("click",".btnBorrar",function(){
          
          var cedulaCliente = $(this).attr("attrId")

          swal({title: "Esta seguro",text: "¿Esta seguro que desea eliminar este cliente?",type: "warning",showCancelButton: true,cancelButtonText: "No",confirmButtonColor: "#3992e6",confirmButtonText: "Si",closeOnConfirm: false,showLoaderOnConfirm: true
          }, function(){
      
            $.ajax({
            url: '../class/registro.php',
            type: 'POST',
            dataType: 'json',
            data: {
                  action: 'EliminarClientes',
                  "cedulaCliente"        : cedulaCliente

                  },
        
            }).done(function(resp){
                if(!resp){
            swalAlert("¡ Ups !","Ocurrió un error inesperado.","error");
                }else{
            swalAlert("¡ Buen trabajo !","La operación se hizo satisfactoriamente.","success",2000);
              location.reload()
                                    
                }                                         
            console.log(resp);

          
            });
           
          });
      
      });


  $(document).on("click",".btnVer",function(){
          
          var cedulaCliente = $(this).attr("attrId")

          swal({title: "Esta seguro",text: "¿Esta seguro que desea eliminar este cliente?",type: "warning",showCancelButton: true,cancelButtonText: "No",confirmButtonColor: "#3992e6",confirmButtonText: "Si",closeOnConfirm: false,showLoaderOnConfirm: true
          }, function(){
      
            $.ajax({
            url: '../class/registro.php',
            type: 'POST',
            dataType: 'json',
            data: {
                  action: 'EliminarClientes',
                  "cedulaCliente"        : cedulaCliente

                  },
        
            }).done(function(resp){
                if(!resp){
            swalAlert("¡ Ups !","Ocurrió un error inesperado.","error");
                }else{
            swalAlert("¡ Buen trabajo !","La operación se hizo satisfactoriamente.","success",2000);
              location.reload()
                                    
                }                                         
            console.log(resp);

          
            });
           
          });
      
      });


</script>

    
</body>
</html>
