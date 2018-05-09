<?PHP


require 'conexion.php';
session_start();
include 'fuctions.php';
verificar_sesion();
$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];


$nom= $_POST ['nom_mae'];
$mat= $_POST ['mat'];
$escu= $_POST ['escu'];
$semes= $_POST ['semes'];
$cant= $_POST ['cant'];
$pre= $_POST ['pre'];
$descrip= $_POST ['descrip'];
$fech= $_POST ['fech'];
$vend= $_POST['vend'];

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
solicitud_libros(
  LIB_DESCRIPCION_LIBRO, LIB_MATERIA,LIB_NOM_MAESTRO,
  LIB_FECHA, LIB_CANTIDAD, LIB_PRECIO, LIB_VENDEDOR,
  LIB_STATUS, LIB_ID_BECARIO
)
VALUES ('$descrip','$mat','$nom','$fech','$cant','$pre','$vend','Pendiente','$id_bec')
";

$res = $conn->query($sql);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{header("Location: solicitud_libros.php");}
?>
