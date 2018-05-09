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
     session_start();
     include 'fuctions.php';
   verificar_sesion();
?>

<?php
include 'conexion.php';

 
 echo "Asistencia:".$var_asistencia = $_POST['asistencia'];
 echo "<br>";
 echo "Fecha:".$fecha_actual= $_POST['fecha'];      //date("d/m/Y");  // ("d/m/Y")
 $conversion = strtotime($fecha_actual);
 $fechasalida = date('y-m-d',$conversion);
 echo "<br>";
 echo "idbec:".$id= $_POST['idbec'];
 //echo "<br>";


$validar="SELECT ASI_FECHA FROM asistencia WHERE ASI_FECHA='$fecha_actual' AND ASI_ID_BECARIO='$id'"; 
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){  
  
    echo "<script>alert('*ERROR* Ya se ha registrado la asistencia!, espera hasta mañana')</script>";
    echo "<script>window.open('asistencia.php','_self')</script>";
    
} 
// ------------ Si no esta registrado el usuario continua el script 
else 
{ 

$sql = "INSERT INTO ASISTENCIA (ASI_ASISTENCIA, ASI_FECHA,ASI_ID_BECARIO)
VALUES ('$var_asistencia' , '$fecha_actual', '$id')";



if ($conn->query($sql) === TRUE) {
   // echo "El registro ha sido agregado correctamente";
    //echo'<script type="text/javascript">
    //alert("Felicidades Te has registrado con exito!");
    //window.location.href="registro.html";
    //</script>';
	//header("Location: index.html");
         echo "<script>alert('Se a guardado la asistencia correctamente!')</script>";
        echo "<script>window.open('asistencia.php','_self')</script>";
        

} else {
     // echo "<script>alert('No se pudo guardar correctamente, intentelo de nuevo!')</script>";
       // echo "<script>window.open('asistencia.php','_self')</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

}
?>





