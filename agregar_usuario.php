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

echo "Usuario:".$var_usuario = $_POST['usuario'];
echo "<br>";
echo "Contraseña:".$var_contraseña = $_POST['contraseña'];
echo "<br>";
echo "Contraseña:".$var_roll = $_POST['roll'];
echo "<br>";
echo "Nombre:".$var_nombre = $_POST['nombre'];
echo "<br>";
echo "Apellido_p:".$var_apellidop = $_POST['apellido_p'];
echo "<br>";
echo "Apellido Materno:".$var_apellidom = $_POST['apellido_m'];
echo "<br>";
echo "Direccion:".$var_direccion = $_POST['direccion'];
echo "<br>";
echo "Colonia:".$var_colonia = $_POST['colonia'];
echo "<br>";
echo "Cp:".$var_cp = $_POST['cp'];
echo "<br>";
//echo "Subir estado:".$var_foto = $_FILES['foto']['tmp_name']; //Aqui esta el archivo file
//$destino = "assets/img". $_FILES['foto']['name'];
//move_uploaded_file($var_foto,$destino);
echo "<br>";
echo "Telefono:".$var_telefono = $_POST['telefono'];
echo "<br>";
echo "Celular:".$var_celular = $_POST['celular'];
echo "<br>";
echo "Lugar de nacimiento:".$var_lugar_nacimiento = $_POST['lugar_nacimiento'];
echo "<br>";
echo "Fecha de nacimiento:".$var_fecha_nac = $_POST['fecha_nac'];
$conversion = strtotime($var_fecha_nac);
$fechasalida = date('y-m-d',$conversion);
echo "<br>";


echo "Sexo:".$var_opsexo = $_POST['opsexo'];
echo "<br>";


$validar="SELECT USU_USUARIO FROM usuarios WHERE USU_USUARIO='$var_usuario' "; 
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){  
  
    echo "<script>alert('*ERROR* Ya existe ese usuario, intenta con otro!')</script>";
    echo "<script>window.open('registro.html','_self')</script>";
    
} 
// ------------ Si no esta registrado el usuario continua el script 
else 
{ 


$sql = "INSERT INTO usuarios (usu_usuario, usu_contra,usu_roll,usu_apellido_paterno,usu_apellido_materno,usu_nombre,usu_direccion,usu_colonia,usu_codigo_postal,usu_telefono,usu_celular,usu_lugar_nacimiento,usu_fecha_nac,usu_sexo)
VALUES ('$var_usuario' , '$var_contraseña', '$var_roll' , '$var_apellidop' , '$var_apellidom' ,'$var_nombre','$var_direccion','$var_colonia','$var_cp','$var_telefono','$var_celular','$var_lugar_nacimiento','$var_fecha_nac','$var_opsexo')";



if ($conn->query($sql) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
    //echo'<script type="text/javascript">
    //alert("Felicidades Te has registrado con exito!");
    //window.location.href="registro.html";
    //</script>';
	//header("Location: index.html");

        echo "<script>alert('Se a guardado el registro correctamente!')</script>";
        echo "<script>window.open('mostrar_empleados.php','_self')</script>";
        

} else {
      echo "<script>alert('No se pudo guardar correctamente, intentelo de nuevo!')</script>";
        echo "<script>window.open('registro_empleados.html','_self')</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

?>





