<?PHP


require 'coneccion.php';
session_start();
include 'fuctions.php';
verificar_sesion();
$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];

$usuario= $_POST ['user'];
$nom= $_POST ['nom'];
$apep= $_POST ['apep'];
$apem= $_POST ['apem'];
$cp= $_POST ['cp'];
$dire= $_POST ['dire'];
$cel= $_POST ['cel'];
$tel= $_POST ['tel'];
$col= $_POST ['col'];
$fech= $_POST ['fech'];
$lug= $_POST ['lug'];
$sex= $_POST ['sex'];

$sql = "UPDATE
usuarios
SET
USU_USUARIO = '$usuario', USU_NOMBRE= '$nom', USU_SEXO='$sex', USU_CELULAR='$cel',
USU_COLONIA = '$col', USU_TELEFONO = '$tel', USU_DIRECCION ='$dire', USU_FECHA_NAC = '$fech',
USU_LUGAR_NACIMIENTO = '$lug', USU_CODIGO_POSTAL = '$cp', USU_APELLIDO_PATERNO = '$apep',
USU_APELLIDO_MATERNO = '$apem'
WHERE
ID_USUARIO= $var_clave;";

$res = $conn->query($sql);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
header("Location: user.php");
?>
