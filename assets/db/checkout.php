
<?php
include'connect.php';
session_start();

$id_usuario = $_SESSION["clave"];
$var_nombre = $_SESSION["USUARIO"];


$sql = "UPDATE control_empleados SET CONT_HORA_SALIDA = CURTIME() WHERE CON_ID_EMPLEADO =  '$id_usuario'";

    if ($conexion->query($sql) === TRUE) {
        echo '<script language="javascript">
window.location.href="/../schoolar/admin.php";
alert("REGISTRO EXITOSO");
</script>';

    } else {
         echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    $conexion->close();
    ?>
