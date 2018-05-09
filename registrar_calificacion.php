<!--?php
$nom = $_POST['nombre'];
$ape_p = $_POST['apellidop'];
$ape_m = $_POST['apellidom'];
$carr = $_POST['carrera'];
$tel = $_POST['telefono'];
$pass= $_POST['passwordss'];
$usu = $_POST['usuario'];
$sexo = $_POST['opsexo'];
$ciudad = $_POST['cabociudad'];

?> -->

<?php
include 'conexion.php';

echo "Nivel:".$var_nivel = $_POST['nivel'];
echo "<br>";
echo "Calificacion:".$var_calificacion = $_POST['calificacion'];
echo "<br>";
echo "Unidad:".$var_unidad = $_POST['unidad'];
echo "<br>";
echo "Promedio:".$var_promedio = $_POST['promedio'];
echo "<br>";
echo "Id_foranea:".$var_id_foranea = $_POST['id_foranea2'];
echo "<br>";




$sql = "INSERT INTO calificaciones (CAL_NIVEL_INGLES,
                                    CAL_CALIFICACION,
                                    CAL_UNIDAD,  
                                     CAL_PROMEDIO,
                                     CAL_ID_BECARIO) VALUES ('$var_nivel' ,
                                                            '$var_calificacion', 
                                                            '$var_unidad' , 
                                                            '$var_promedio' , 
                                                            '$var_id_foranea' )";


 //echo'<script type="text/javascript">
    //alert("Felicidades Te has registrado con exito!");
    //window.location.href="calificaciones.php";
    //</script>';

if ($conn->query($sql) === TRUE) {
   // echo "El registro ha sido agregado correctamente";
    //echo'<script type="text/javascript">
    //alert("Felicidades Te has registrado con exito!");
    //window.location.href="registro.html";
    //</script>';
    echo "<script>alert('Se agrego correctamente!')</script>";
     echo "<script>window.open('calificaciones.php','_self')</script>";
	//header("Location: calificaciones.php");

} else {
     echo "<script>alert('No existe ese numero de becario!')</script>";
     echo "<script>window.open('asignar_calificaciones.php','_self')</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>





