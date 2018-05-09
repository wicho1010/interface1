<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();


$response = array();
if(isset($_POST['id'])){
  $id_m = $_POST['id'];


  $consulta = "SELECT * FROM solicitud_fondos WHERE ID_SOL_FONDOS = $id_m";


   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "id" => $id_m,
    "name"  =>  $row["FON_NOMBRE_EVENTO"],
    "req"  =>  $row["FON_REQUISITO"],
    "organizador"  =>  $row["FON_ORGANIZADOR"],
    "ubicacion" => $row["FON_UBICACION"],
    "objetivo" => $row["FON_OBJETIVO_EVENT"],
    "fecha_i"  =>  $row["FON_FECHA_INI"],
    "fecha_f"  =>  $row["FON_FECHA_FIN"]

  );
   }
   }

  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id_m;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}

echo json_encode($response);

 ?>
