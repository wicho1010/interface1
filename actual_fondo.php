<?PHP


require 'conexion.php';

include 'fuctions.php';
$id = $_POST ['swal-input0'];
$nom= $_POST ['swal-input1'];
$req= $_POST ['swal-input2'];
$org= $_POST ['swal-input3'];
$ubi= $_POST ['swal-input4'];
$obj= $_POST ['swal-input5'];
$fech_in= $_POST ['swal-input6'];
$fech_fin= $_POST ['swal-input7'];

//consulta para obtener el id del becario
$query = "UPDATE
solicitud_fondos
SET
FON_NOMBRE_EVENTO = '$nom',
FON_REQUISITO = '$req',
FON_ORGANIZADOR = '$org',
FON_UBICACION = '$ubi',
FON_OBJETIVO_EVENT = '$obj',
FON_FECHA_INI = '$fech_in',
FON_FECHA_FIN = '$fech_fin'
WHERE
ID_SOL_FONDOS='$id';";

$res = $conn->query($query);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{header("Location: solicitud_fondos.php");}
?>
