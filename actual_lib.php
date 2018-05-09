<?PHP


require 'conexion.php';

include 'fuctions.php';
$id = $_POST ['swal-input0'];
$nom_maes= $_POST ['swal-input1'];
$mat= $_POST ['swal-input2'];
$vend= $_POST ['swal-input3'];
$cant= $_POST ['swal-input4'];
$prec= $_POST ['swal-input5'];
$descrip= $_POST ['swal-input6'];
$fech= $_POST ['swal-input7'];

//consulta para obtener el id del becario
$query = "UPDATE
solicitud_libros
SET
LIB_NOM_MAESTRO = '$nom_maes',
LIB_MATERIA = '$mat',
LIB_VENDEDOR = '$vend',
LIB_CANTIDAD = '$cant',
LIB_PRECIO = '$prec',
LIB_DESCRIPCION_LIBRO = '$descrip',
LIB_FECHA = '$fech'

WHERE
ID_SOL_LIBROS = '$id';";

$res = $conn->query($query);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{header("Location: solicitud_libros.php");}
?>
