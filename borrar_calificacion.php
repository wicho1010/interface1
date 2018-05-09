  <?php 
         include 'conexion.php';
    if(isset($_GET['borrar'])){
    
    $borrar_id = $_GET['borrar'];
    
    $borrar = "DELETE FROM user WHERE ID_CALIFICACIONES='$borrar_id'";
    
    $ejecutar = mysqli_query($conn,$borrar); 
        
        if($ejecutar){
        
        echo "<script>alert('La calificación ha sido borrado!')</script>";
        echo "<script>window.open('calificaciones.php','_self')</script>";
        }
    
    }
    
    ?>
