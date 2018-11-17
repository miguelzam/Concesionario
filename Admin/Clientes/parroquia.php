<?php
   require_once("../conexion/conexion.php");  
   //Aqui me conecto a la base de datos y ejecuto una consulta SQL para traer todos los paises;
   $sql ="SELECT * FROM parroquias WHERE codmunicipio = ".$_POST['codmunicipio'];
   $stmt = $conn -> prepare($sql);
   $stmt -> execute();
   if($stmt->rowCount()>0){

      ?>
      <option value="0">Seleccione...</option>
      <?php
      while ($fila = $stmt->fetch( PDO::FETCH_ASSOC )) {
      ?>
      <option value="<?php echo $fila['codparroquia'] ?>"><?php echo $fila['parroquia'] ?></option>
      <?php
      }
   } else {
      ?>
      <option value="0">No se han encontrado registros asociados...</option>
      <?php
   }
?>

