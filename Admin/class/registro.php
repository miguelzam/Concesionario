<?php
	session_start();
	include('../conexion/conexion.php');

  	$key=$_POST['action'];
//**************************************Acciones******************************************
if($key=='GuardarDatosClientes'){

$cedulaCliente        = $_POST['cedulaCliente'];
$nombreCliente        = $_POST['nombreCliente'];
$nombreCliente2       = $_POST['nombreCliente2'];
$apellidoCliente      = $_POST['apellidoCliente'];
$apellidoCliente2     = $_POST['apellidoCliente2'];
$estadoCliente        = $_POST['estadoCliente'];
$municipioCliente     = $_POST['municipioCliente'];
$parroquiaCliente     = $_POST['parroquiaCliente'];
$ciudadCliente        = $_POST['ciudadCliente'];
$direccionCliente     = $_POST['direccionCliente'];
$nacimientoCliente    = $_POST['nacimientoCliente'];
$sexoCliente          = $_POST['sexoCliente'];
$telefonoCliente      = $_POST['telefonoCliente'];
$celularCliente       = $_POST['celularCliente'];
$correoCliente        = $_POST['correoCliente'];
$estatusCliente       = 'activo';
$concecionarioCliente = $_POST['concecionarioCliente'];

	try {
			$sql = "INSERT INTO clientes (cedula,nombre,nombre_2,apellido,apellido_2,estado,municipio,parroquia,ciudad,direccion,fecha_nac,sexo,telefono,celular,correo,estatus,concecionario) values ('$cedulaCliente','$nombreCliente','$nombreCliente2','$apellidoCliente','$apellidoCliente2','$estadoCliente','$municipioCliente','$parroquiaCliente','$ciudadCliente','$direccionCliente','$nacimientoCliente','$sexoCliente','$telefonoCliente','$celularCliente','$correoCliente','$estatusCliente','$concecionarioCliente')";
			$stmt = $conn -> prepare($sql);
            $stmt -> execute();

			if($stmt->rowCount()>0){
				echo json_encode(array('error'=> false,'tipo'=>'1' ));
				return "true";
			}else{
				echo json_encode(array('error' => true));
			}

		}catch(PDOException $e) {
			echo  $e->getMessage(); 
		}
}

if($key=='EliminarClientes'){

$cedulaCliente        = $_POST['cedulaCliente'];


	try {
			$sql = "UPDATE clientes SET estatus = 'Inactivo' WHERE cedula = '$cedulaCliente'";
			$stmt = $conn -> prepare($sql);
            $stmt -> execute();

			if($stmt->rowCount()>0){
				echo json_encode(array('error'=> false,'tipo'=>'1' ));
				return "true";
			}else{
				echo json_encode(array('error' => true));
			}

		}catch(PDOException $e) {
			echo  $e->getMessage(); 
		}
}

if($key=='ActualizarDatosClientes'){

$cedulaCliente        = $_POST['cedulaCliente'];
$nombreCliente        = $_POST['nombreCliente'];
$nombreCliente2       = $_POST['nombreCliente2'];
$apellidoCliente      = $_POST['apellidoCliente'];
$apellidoCliente2     = $_POST['apellidoCliente2'];
$estadoCliente        = $_POST['estadoCliente'];
$municipioCliente     = $_POST['municipioCliente'];
$parroquiaCliente     = $_POST['parroquiaCliente'];
$ciudadCliente        = $_POST['ciudadCliente'];
$direccionCliente     = $_POST['direccionCliente'];
$nacimientoCliente    = $_POST['nacimientoCliente'];
$sexoCliente          = $_POST['sexoCliente'];
$telefonoCliente      = $_POST['telefonoCliente'];
$celularCliente       = $_POST['celularCliente'];
$correoCliente        = $_POST['correoCliente'];
$concecionarioCliente = $_POST['concecionarioCliente'];

	try {
			$sql = "UPDATE clientes SET nombre='$nombreCliente',nombre_2='$nombreCliente2',apellido='$apellidoCliente',apellido_2='$apellidoCliente2',estado='$estadoCliente',municipio='$municipioCliente',parroquia='$parroquiaCliente',ciudad='$ciudadCliente',direccion='$direccionCliente',fecha_nac='$nacimientoCliente',sexo='$sexoCliente',telefono='$telefonoCliente',celular='$celularCliente',correo='$correoCliente',concecionario='$concecionarioCliente' ";
			$stmt = $conn -> prepare($sql);
            $stmt -> execute();

			if($stmt->rowCount()>0){
				echo json_encode(array('error'=> false,'tipo'=>'1' ));
				return "true";
			}else{
				echo json_encode(array('error' => true));
			}

		}catch(PDOException $e) {
			echo  $e->getMessage(); 
		}
}

if($key=='GuardarUsuario'){

$usuario        = $_POST['usuario'];
$password       = md5($_POST['password']);

	try {
			$sql = "INSERT INTO miembros (usuario,userpass) values ('$usuario','$password')";
			$stmt = $conn -> prepare($sql);
            $stmt -> execute();

			if($stmt->rowCount()>0){
				echo json_encode(array('error'=> false,'tipo'=>'1' ));
				return "true";
			}else{
				echo json_encode(array('error' => true));
			}

		}catch(PDOException $e) {
			echo  $e->getMessage(); 
		}
}

if($key=='GuardarConcesionario'){

$concesionario = $_POST['concesionario'];

	try {
			$sql = "INSERT INTO concecionarios (nombre_concecionario) values ('$concesionario')";
			$stmt = $conn -> prepare($sql);
            $stmt -> execute();

			if($stmt->rowCount()>0){
				echo json_encode(array('error'=> false,'tipo'=>'1' ));
				return "true";
			}else{
				echo json_encode(array('error' => true));
			}

		}catch(PDOException $e) {
			echo  $e->getMessage(); 
		}
}

?>