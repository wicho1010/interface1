<?php
session_start();
include 'connect.php';
if(isset($_POST['submit']))
{
	if ( (isset($_POST['usuario'])) || (isset($_POST['contraseña'])) ){
    $var_user = $_POST['usuario'];
		$var_contra = $_POST['contraseña'];
		$query = "SELECT ID_USUARIO,USU_ROLL,USU_APELLIDO_PATERNO,USU_NOMBRE FROM usuarios where USU_USUARIO ='$var_user' and USU_CONTRASENA = '$var_contra' ";
		if (!$resultado = $conexion->query($query)){
    // Oh no! The query failed.
    echo "Sorry, the website is experiencing problems.";
    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
		}
			if($resultado->num_rows > 0){
				while($row = $resultado->fetch_assoc()) {
					$var_nombre = $row["USU_NOMBRE"];
					$var_apellidop = $row["USU_APELLIDO_PATERNO"];
					$log_nom = $var_nombre. " ".$var_apellidop;
					$tipo = $row["USU_ROLL"];
						switch ($tipo){
							case 1:
							//Aspirantes
							$_SESSION['clave'] = $row["ID_USUARIO"];
							//$id = $row["ID_USUARIO"];//
							$_SESSION['nombre']=$var_nombre;
							echo "<script>alert('Ingresado correctamente!')</script>";
							echo "<script>window.open('aspirante.php','_self')</script>";
								break;
							case 2:
							//Coordinador
							$_SESSION['clave'] = $row["ID_USUARIO"];
							$_SESSION['nombre']=$var_nombre;
							echo "<script>alert('Bienvenido !')</script>";
							echo "<script>window.open('/../schoolar/admin.php','_self')</script>";
								break;
							case 3:
							//Ingles
							$_SESSION['clave'] = $row["ID_USUARIO"];
							$_SESSION['nombre']=$var_nombre;
							//header("location:ingles.php");
							echo "<script>alert('Ingresado correctamente al modulo de ingles!')</script>";
							echo "<script>window.open('ingles.php','_self')</script>";
								break;
							default:
							echo "<script>alert('Usuario o contraseña invalidos!')</script>";
							echo "<script>window.open('/../schoolar/index.html','_self')</script>";
			}


    	 	}//aqui termina el while

		}

	}

}

?>
