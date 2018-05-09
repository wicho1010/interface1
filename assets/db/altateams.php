  
<?php
include'connect.php';

 $sql = "SELECT * FROM becario";
 $resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
         while ($row= $resultado->fetch_assoc()) {
       
          $var_id         =     $row['ID_BECARIO'];
          $var_apellidop  =     $row['BEC_STATUS'];
          $var_apellidom  =     $row['BEC_ID_USUARIO'];
         
        }

    }   else {
echo "¡ No se ha encontrado ningún registro !";
}



echo "Usuario:".$var_team_name = $_POST['team_nombre'];
echo "<br>";
echo "Contraseña:".$var_integrantes = $_POST['integrantes'];
echo "<br>";
echo "Nombre:".$var_tipo = $_POST['tipo'];
echo "<br>";
echo "id:".$var_id_bec = $_POST['id_bec'];
echo "<br>";


$sql = "INSERT INTO equipos (EQU_NOMBRE_EQUIPO,
                                    EQU_NUM_INTEGRA,
                                    EQU_TIPO_EQUIPO,  
                                     EQU_ID_BECARIO) VALUES ('$var_team_name' ,
                                                            '$var_integrantes', 
                                                            '$var_tipo' , 
                                                            '$var_id_bec' )";


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
    echo '<script language="javascript">
window.location.href="/../schoolar/crearequipos.php";
alert("REGISTRO EXITOSO");
</script>';
  //header("Location: calificaciones.php");

} else {
    // echo "<script>alert('No existe ese numero de becario!')</script>";
     //echo "<script>window.open('crearequipos.php','_self')</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>


   <!-- if ($conexion->query($sql) === TRUE) {
        echo '<script language="javascript">
window.location.href="/../schoolar/crearequipos.php";
alert("REGISTRO EXITOSO");
</script>';-->

 