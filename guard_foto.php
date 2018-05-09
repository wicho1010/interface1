<?PHP
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();
$var_clave= $_SESSION['clave'];
if(isset($_POST['btnguar'])){
  $archivo = $_FILES['fotico']['tmp_name'];
  $destino = "assets/img/". $_FILES['fotico']['name'];
  move_uploaded_file($archivo, $destino);

  $query = "UPDATE usuarios SET
                   USU_IMG_PERFIL='$destino' WHERE ID_USUARIO = '$var_clave'";

  $resultado = $conn->query($query);
  header("location:user.php");
}
