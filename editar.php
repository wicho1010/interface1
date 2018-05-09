<?php 
 include 'conexion.php';
		if(isset($_GET['editar'])){
			
			$editar_id = $_GET['editar']; 
			
			$consulta = "SELECT * FROM user WHERE ID_USER='$editar_id'";
			$ejecutar = mysqli_query($conn, $consulta); 
			
			$fila=mysqli_fetch_array($ejecutar); 
			
			$usuario = $fila['USU_USER']; 
			$pass = $fila['USU_PASSWORD']; 
			$email = $fila['USE_ROLL'];
			
			}
?>
		
<br/>
<form method="post" action="">
		<input type="text" name="nombre" value="<?php echo $usuario;?>"/><br/>
		<input type="password" name="passw" value="<?php echo $pass;?>"/><br/>
		<input type="text" name="email" value="<?php echo $email ;?>"/><br/>
		<input type="submit" name="actualizar" value="ACTUALIZAR DATOS"/>
	 
</form>
	<?php 
	 include 'conexion.php';
	if(isset($_POST['actualizar'])){
	
		$actualizar_nombre = $_POST['nombre'];
		$actualizar_password = $_POST['passw'];
		$actualizar_email = $_POST['email'];
		
		$actualizar = "UPDATE user SET USU_USER='$actualizar_nombre', USU_PASSWORD='$actualizar_password', USE_ROLL='$actualizar_email' WHERE ID_USER='$editar_id'";
		
		$ejecutar = mysqli_query($con, $actualizar);
	
		if($ejecutar){
		
		echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('formulario.php','_self')</script>";
		}
	}
	
	?> 