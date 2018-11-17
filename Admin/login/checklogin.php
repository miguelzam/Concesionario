<?php
	//iniciar una sesion para guardar las coockies
	session_start();
	//realizar la conexión a la base de datos
	require_once('../conexion/conexion.php');
	//recoger los valores de username y password
	$username = $_POST['username'];
    $password=md5($_POST['password']);
	//realizar el query
	$sql="SELECT * FROM  `miembros` WHERE  `usuario` LIKE  '$username' AND  `userpass` LIKE  '$password'";
	//guardar resultado de la query
	$stmt = $conn -> prepare($sql);
            $stmt -> execute();
	if($stmt->rowCount()>0){
	//comprobar si he conseguido algún valor, ni no he conseguido nada seguramente ha fallado el enlace a la BD

		if($stmt->rowCount()>0){
			//Me he logado correctamente, ahora me falta cargar los pemisos
			//crear una sesesion (cookie) para guardar los datos)
			session_regenerate_id();
			//acceder al array de los datos obtenidos de la base de datos
			while ($Miembros = $stmt->fetch( PDO::FETCH_ASSOC )){
			//guardar en la sesión con id desconocido, diferentes variables, con diferentes permisos (0,1)
				$_SESSION['SESS_MEMBER_ID']  = $Miembros['usuario'];
				$_SESSION['SESS_USERNAME']   = $Miembros['nombre_completo'];
				
				//cargar todos los tipos de permisos
			}
			//finalizar la sesión de creación de cookies
			session_write_close();
			//si me he logado bien, ir directamente a la pagina index
			header("location:../index.php");
			exit();
		}else {
		   //si me he logado mal ir de nuevo a la pagina de logueo
			header("location: login.php");
			exit();
		}
	}
?>