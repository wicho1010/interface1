
<?php
 include 'conexion.php';
 session_start();
 include 'fuctions.php';
 verificar_sesion();

 $var_clave= $_SESSION['clave'];
 if(isset($_POST['boton_foto'])){
 	$archivo = $_FILES ['foto']['tmp_name'];
 	$destino = "assets/img". $_FILES['foto']['name'];
 	move_uploaded_file($archivo,$destino);
 	$query = "UPDATE usuarios SET USU_IMG_PERFIL='$destino' WHERE ID_USUARIO= '$var_clave'  ";

 	$resultado= $conn->query($query);
    header("location: aspirante.php");
 }
 ?>

