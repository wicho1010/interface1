<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();


$response = array();
if(isset($_POST['id'])){
  $id_m = $_POST['id'];


  $consulta = "SELECT * FROM solicitud_libros WHERE ID_SOL_LIBROS = $id_m";


   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "id" => $id_m,
    "nom"  =>  $row["LIB_NOM_MAESTRO"],
    "mat"  =>  $row["LIB_MATERIA"],
    "vende" => $row["LIB_VENDEDOR"],
    "canti"  =>  $row["LIB_CANTIDAD"],
    "prec"  =>  $row["LIB_PRECIO"],
    "descrip"  =>  $row["LIB_DESCRIPCION_LIBRO"],
    "fech"  =>  $row["LIB_FECHA"]

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
