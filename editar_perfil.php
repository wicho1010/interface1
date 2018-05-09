<?php

require_once"conexion.php";

session_start();
$var_id         = $_SESSION['clave'];
$var_nombre     = $_POST['nombre'];
$var_apellidop  = $_POST['ape_pat'];
$var_apellidom  = $_POST['ape_mat'];
$var_direccion  = $_POST['direccion'];
$var_colonia    = $_POST['colonia'];
$var_lugarnac   = $_POST['lug_nac'];
$var_telefono   = $_POST['telefono'];
$var_celular    = $_POST['celular'];
$var_codigopost = $_POST['codigop'];
$var_fechanac   = $_POST['fecha_nac'];
$var_sexo       = $_POST['sexo'];



$conversion = strtotime($var_fechanac);
$fechasalida = date('y-m-d',$conversion);



$sql = " UPDATE USUARIOS SET                             USU_NOMBRE ='$var_nombre',
														USU_APELLIDO_PATERNO='$var_apellidop',
														USU_APELLIDO_MATERNO='$var_apellidom',
														USU_DIRECCION= '$var_direccion',
														USU_COLONIA= '$var_colonia',
														USU_LUGAR_NACIMIENTO='$var_lugarnac',
														USU_TELEFONO='$var_telefono',
														USU_CELULAR='$var_celular',
														USU_CODIGO_POSTAL='$var_codigopost',
														USU_FECHA_NAC='$fechasalida',
														USU_SEXO='$var_sexo'
														WHERE ID_USUARIO = '$var_id' ";
		if($conn->query($sql) === TRUE){

  echo "<script>alert('Actualización correcta!')</script>";
  echo "<script>window.open('aspirante.php','_self')</script>";

  //header("location:aspirante.php");
	}else {
		echo "<script>alert('No se actualizo!')</script>";
        echo "<script>window.open('aspirante.php','_self')</script>";
	}
			//header( "location:aspirante.php");
			
		//}
		//else {
		//	echo ("Error: ". mysqli_error($conn));
		//}
		$conn->close();

?>
