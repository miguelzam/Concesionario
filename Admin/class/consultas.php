<?php
	session_start();
	include('../conexion/conexion.php');
	if(isset($_POST["validar"])){
		
		if($_POST["function"] == "get_historial"){
			$fecha = $_POST["fecha"];
			$search = $_POST["search"];
			$type = $_POST["type"];
			get_historial_factura($fecha,$search,$type);

		}else if($_POST["function"] == "delete_cliente"){
			$id = $_POST["id"];
			delete_cliente($id);
		}
		
	}




	function delete_cliente($id){
		$sql = "UPDATE clientes SET estatus = 'eliminado'  WHERE cedula = '$id'";						
		$stmt = $conn -> prepare($sql);
        $stmt -> execute();
		if($stmt->rowCount()>0){
			return true;
		}else{
			return "NO_DATA";
		}		
	}




?>