<?php

require_once"conexion.php";

$var_titulo        = $_POST['titulo'];
$var_tipoevent     = $_POST['tipo_event'];
$var_fechaini      = $_POST['fecha_ini'];
$var_fechafin      = $_POST['fecha_fin'];
$var_lugar         = $_POST['lugar'];
$var_descripcion   = $_POST['descrip'];


$conversion1 = strtotime($var_fechaini);
$fechasalida1 = date('y-m-d',$conversion1);

$conversion2 = strtotime($var_fechafin);
$fechasalida2 = date('y-m-d',$conversion2);


$sql = "INSERT INTO actividades (MUNICIPIO, COLONIA,UBICACION,USUARIOS_USU_ID) VALUES('$var_municipio','$var_colonia','$var_ubicacion',' $id_usuarios' )";

		if($conn->query($sql) === TRUE){
			header( "location:coordinador.php");
		}
		else {
			echo ("Error: ". mysqli_error($conn));
		}
		$conn->close();

?>
