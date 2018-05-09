<?PHP


require 'conexion.php';
session_start();
include 'fuctions.php';
verificar_sesion();
$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];


$nom= $_POST ['nom'];
$req= $_POST ['req'];
$org= $_POST ['org'];
$ubi= $_POST ['ubi'];
$obj= $_POST ['obj'];
$fech_in= $_POST ['fech_in'];
$fech_fin= $_POST ['fech_fin'];

//consulta para obtener el id del becario
$query = "SELECT
ID_BECARIO
FROM
becario
WHERE
BEC_ID_USUARIO = $var_clave;";

$resultado = $conn->query($query);


if($resultado->num_rows > 0){

 while($row = $resultado->fetch_assoc()) {

 $id_bec = $row["ID_BECARIO"];
}
}


$sql = "INSERT INTO
solicitud_fondos(
  FON_NOMBRE_EVENTO, FON_REQUISITO, FON_ORGANIZADOR,
  FON_FECHA_INI, FON_FECHA_FIN, FON_UBICACION,
  FON_OBJETIVO_EVENT, FON_ESTATUS, FON_ID_BECARIO
)
VALUES ('$nom','$req','$org','$fech_in','$fech_fin','$ubi','$obj','Pendiente','$id_bec')
";

$res = $conn->query($sql);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{header("Location: solicitud_fondos.php");}
?>
