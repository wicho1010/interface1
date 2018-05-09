
<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
?>


<?php    

include 'conexion.php';

 $id_usuarios = $_SESSION["clave"];
 $sql = "SELECT USU_APELLIDO_PATERNO,USU_APELLIDO_MATERNO,USU_NOMBRE,USU_DIRECCION,USU_COLONIA,USU_CODIGO_POSTAL,USU_IMG_PERFIL,USU_TELEFONO,USU_CELULAR,USU_LUGAR_NACIMIENTO,USU_FECHA_NAC,USU_SEXO,USU_USUARIO FROM USUARIOS WHERE ID_USUARIO = '$id_usuarios' ";
 $resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
         while ($row= $resultado->fetch_assoc()) {
       
          $var_nombre     =     $row['USU_NOMBRE'];
          //$var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
          //$var_apellidom  =     $row['USU_APELLIDO_MATERNO'];
          //$var_direccion  =     $row['USU_DIRECCION'];
          //$var_colonia    =     $row['USU_COLONIA'];
          //$var_lugarnac   =     $row['USU_LUGAR_NACIMIENTO'];
          //$var_telefono   =     $row['USU_TELEFONO'];
          //$var_celular    =     $row['USU_CELULAR'];
          //$var_codigopost =     $row['USU_CODIGO_POSTAL'];
          $var_foto       =     $row['USU_IMG_PERFIL'];
          //$var_fechanac   =     $row['USU_FECHA_NAC'];
          //$var_sexo       =     $row['USU_SEXO'];
          //$var_usu        =     $row['USU_USUARIO'];
        }

    }   else {
echo "¡ No se ha encontrado ningún registro !";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Team Interface</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


     <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
            <div class="logo">
                <a href="aspirante.php" class="simple-text logo-mini">
                    CT
                </a>

                <a href="aspirante.php" class="simple-text logo-normal">
                      SCHOOLAR
                </a>
            </div>
            <div class="sidebar-wrapper">

                <div class="user">
                    <div class="info">
                        <div class="photo">
                            <img src="<?php echo $var_foto ?>" />
                        </div>

                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                <?php echo $_SESSION['nombre'];?>
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">c</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="nav">
                    <li class="">
                        <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
                            <i class="ti-user"></i>
                            <p>Perfil de Administrador
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="dashboardOverview">
                            <ul class="nav">
                                <li class="">
                                    <a href="">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Editar Perfil</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                

                        <li class="active">
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda"></i>
                            <p>
                                Control de empleados
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li class="active">
                                    <a href="registro_empleados.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Agregar empleados</span>
                                    </a>
                                </li>

                                 <li>
                                    <a href="mostrar_empleados.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Mostrar empelados </span>
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </li>
                
                   <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard"></i>
                            <p>
                                Gestion de equipos
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">

                                <li>
                                    <a href="asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Agregar equpos</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Mostrar equipos</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                        <li>
                            <a href="teams.php">
                            <i class="ti-agenda"></i>
                            <p>
                                Gestion de Equipos
                            </p>
                        </a>
                    </li>


                   
                    


                    <!--<li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard"></i>
                            <p>
                                Noticias
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">

                                <li>
                                    <a href="forms/regular.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Noticia1</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="forms/extended.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia Ingles</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>-->
                    <li>
                      
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                          
                                <li>
                               
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#Dashboard">
                           Administrador
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">

    

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p><?php echo "Bienvenido: ".$_SESSION['nombre'];?></p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <span class="notification">5</span>
                                    <p class="hidden-md hidden-lg">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#not1">Notification 1</a></li>
                                    <li><a href="#not2">Notification 2</a></li>
                                    <li><a href="#not3">Notification 3</a></li>
                                    <li><a href="#not4">Notification 4</a></li>
                                    <li><a href="#another">Another notification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="destroy.php" class="btn-rotate" onclick="demo.showSwal('warning-message-and-confirmation')">
                                   <i class="ti-settings" ></i>
                                <p>logout</p>

                                <!--onclick="demo.showSwal('warning-message-and-confirmation')"-->
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

                             




<?php 
include 'conexion.php';
        if(isset($_GET['editar'])){
            
            $editar_id = $_GET['editar']; 
            
            $consulta = "SELECT * FROM usuarios WHERE ID_USUARIO='$editar_id'";
            $ejecutar = mysqli_query($conn, $consulta); 
            
            $row=mysqli_fetch_array($ejecutar); 
            
          $id_c       =     $row['ID_USUARIO'];
          $var_usu1       =     $row['USU_USUARIO']; 
          $var_contra1      =    $row['USU_CONTRA']; 
          $var_roll       =     $row['USU_ROLL'];       
          $var_apellidop1  =     $row['USU_APELLIDO_PATERNO'];
          $var_apellidom1  =     $row['USU_APELLIDO_MATERNO'];
          $var_nombre1     =     $row['USU_NOMBRE'];
          $var_direccion1  =     $row['USU_DIRECCION'];
          $var_colonia1    =     $row['USU_COLONIA'];
          $var_codigopost1 =     $row['USU_CODIGO_POSTAL'];
          $var_foto1       =     $row['USU_IMG_PERFIL'];
          $var_telefono1   =     $row['USU_TELEFONO'];
          $var_celular1    =     $row['USU_CELULAR'];
          $var_lugarnac1   =     $row['USU_LUGAR_NACIMIENTO'];
          $var_fechanac1   =     $row['USU_FECHA_NAC'];
          $var_sexo1       =     $row['USU_SEXO'];


                
            }
?>

           








<!--<?php    

include 'conexion.php';

 $id_usuarios = $_SESSION["clave"];
 $sql = "SELECT USU_APELLIDO_PATERNO,USU_APELLIDO_MATERNO,USU_NOMBRE,USU_DIRECCION,USU_COLONIA,USU_CODIGO_POSTAL,USU_IMG_PERFIL,USU_TELEFONO,USU_CELULAR,USU_LUGAR_NACIMIENTO,USU_FECHA_NAC,USU_SEXO,USU_USUARIO FROM USUARIOS WHERE ID_USUARIO = '$id_usuarios' ";
 $resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
         while ($row= $resultado->fetch_assoc()) {
       
          $var_nombre     =     $row['USU_NOMBRE'];
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
          $var_apellidom  =     $row['USU_APELLIDO_MATERNO'];
          $var_direccion  =     $row['USU_DIRECCION'];
          $var_colonia    =     $row['USU_COLONIA'];
          $var_lugarnac   =     $row['USU_LUGAR_NACIMIENTO'];
          $var_telefono   =     $row['USU_TELEFONO'];
          $var_celular    =     $row['USU_CELULAR'];
          $var_codigopost =     $row['USU_CODIGO_POSTAL'];
          $var_foto       =     $row['USU_IMG_PERFIL'];
          $var_fechanac   =     $row['USU_FECHA_NAC'];
          $var_sexo       =     $row['USU_SEXO'];
          $var_usu        =     $row['USU_USUARIO'];
        }

    }   else {
echo "¡ No se ha encontrado ningún registro !";
}

?> -->


<script> 
function validar(e) { 
tecla = (document.all) ? e.keyCode : e.which; 
if (tecla==8) return true; //Tecla de retroceso (para poder borrar) 
// dejar la línea de patron que se necesite y borrar el resto 
patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
//patron = /\d/; // Solo acepta números 
//patron = /[\w\s]/; // Acepta números y letras 
//patron = /\D/; // No acepta números 
// 

te = String.fromCharCode(tecla); 
return patron.test(te); 
} 
</script>
<!-- onkeypress="return validar(event)"-->
<script> 
function validar2(e) { 
tecla = (document.all) ? e.keyCode : e.which; 
if (tecla==8) return true; //Tecla de retroceso (para poder borrar) 
// dejar la línea de patron que se necesite y borrar el resto 
//patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
//patron = /\d/; // Solo acepta números 
//patron = /\w/; // Acepta números y letras 
patron = /[\w\s]/;// Acepta números y letras y espacio
//patron = /\D/; // No acepta números 
// 

te = String.fromCharCode(tecla); 
return patron.test(te); 
} 
</script> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                    <div class="content">             
<div class="header">
    <br>
 <h4 class="card-title">Agregar Usuarios</h4>
 <br>

 
</div>

<div class=" card content">
         
<!-- CODIGO DE FORMULARIO-->
<!--<div class="col-md-10"> -->

<form class="form-horizontal"  action="" method="post">
 

<!--<div class="form-group">
    <label  class="col-sm-2 control-label">Nombre del Evento</label>
    <div class="col-sm-5">
      <input type="text" class="form-control border-input"  placeholder="Lugar" name="titulo" required="true">
    </div>
  </div>

 

  <!--Actividades-->
  <div class="form-group">
    <label  class="col-sm-2 control-label">Correo</label>
    <div class="col-sm-3">

       <input type="text" name="usuario" class="form-control border-input" value="<?php echo $var_usu1  ?>" min="0" required="true" autocomplete="off" placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-3">

       <input type="text" name="contraseña" class="form-control border-input" value="<?php echo $var_contra1?>"min="0" required="true" autocomplete="off" placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Roll</label>
    <div class="col-sm-4">
 <select name="roll"  class="form-control border-input" required="true" value"<?php echo $var_roll ?>" name="tipo_event" >
            <option selected value="0">Seleccionar...</option>
                <option value="2">Coordinador</option>
                 <option value="3">Becario</option>
                 <option value="4">Ingles</option>
                 <option value="5">Administrador</option>
                </select>

     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Apellido P:</label>
    <div class="col-sm-3">

<input type="text" name="apellido_p" class="form-control border-input"value="<?php echo $var_apellidop1 ?>" min="0" required="true" autocomplete="off"  placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Apellido_m</label>
    <div class="col-sm-3">

       <input type="text" name="apellido_m" class="form-control border-input" min="0" required="true" autocomplete="off" value="<?php echo $var_apellidom1 ?>" placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Nombre:</label>
    <div class="col-sm-3">

       <input type="text" name="nombre" class="form-control border-input" min="0" required="true" autocomplete="off" value="<?php echo $var_nombre1 ?>"  placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Dirección:</label>
    <div class="col-sm-3">

       <input type="text" name="direccion" class="form-control border-input" min="0" required="true" autocomplete="off" value="<?php echo $var_direccion1 ?>" placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Colonia</label>
    <div class="col-sm-3">

       <input type="text" name="colonia" class="form-control border-input" min="0" required="true" autocomplete="off"  value="<?php echo $var_colonia1 ?>"placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Codigo Postal:</label>
    <div class="col-sm-3">

       <input type="number" name="cp" class="form-control border-input" min="0" required="true" autocomplete="off" value="<?php echo $var_codigopost1 ?>"placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Telefono:</label>
    <div class="col-sm-3">

       <input type="number" name="telefono" class="form-control border-input" min="0" required="true" autocomplete="off"value="<?php echo $var_telefono1 ?>" placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Celular:</label>
    <div class="col-sm-3">

       <input type="number" name="celular" class="form-control border-input" min="0" required="true" autocomplete="off" value="<?php echo $var_celular1 ?>"placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Lugar de nacimiento:</label>
    <div class="col-sm-3">

       <input type="text" name="lugar_nacimiento" class="form-control border-input" min="0" required="true" autocomplete="off"value="<?php echo $var_lugarnac1 ?>" placeholder="calificación">
     </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Fecha de nacimiento:</label>
    <div class="col-sm-3">

       <input type="date" name="fecha_nac" class="form-control border-input" min="0"  autocomplete="off" value="<?php echo $var_lugarnac1 ?>" placeholder="calificación">
     </div>
  </div>
<!--fin div Actividades-->

<!--Fecha de inicio-->
<div class="form-group">
    <label  class="col-sm-2 control-label">Sexo</label>
    <div class="col-sm-3">

       <input type="text" name="opsexo" class="form-control border-input" min="0" required="true" autocomplete="off" value="<?php echo $var_sexo1 ?>" placeholder="calificación">
     </div>
  </div>
<!--fin fecha inicio-->

<!--Fecha fin
<div class="form-group">
    <label class="col-sm-2 control-label">Unidad</label>
    <div class="col-sm-3">
       <input type="date" name="fecha_fin" class="form-control border-input" required="true" autocomplete="off">
     </div>
  </div>
<!--fin fecha fins-->

 <!--Actividades-->



 

                <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-info btn-fill btn-wd"name="actualizar">Actualizar usaurio</button>
                         </div>
                         </div>
                        <br>
                        <br>
                </form>      


<?php 
include 'conexion.php';
    if(isset($_POST['actualizar'])){
    
      


          $id_c            =     $_POST['ID_USUARIO'];
          $var_usu1        =     $_POST['USU_USUARIO']; 
          $var_contra1     =    $_POST['USU_CONTRA']; 
          $var_roll        =     $_POST['USU_ROLL'];       
          $var_apellidop1  =     $_POST['USU_APELLIDO_PATERNO'];
          $var_apellidom1  =     $_POST['USU_APELLIDO_MATERNO'];
          $var_nombre1     =     $_POST['USU_NOMBRE'];
          $var_direccion1  =     $_POST['USU_DIRECCION'];
          $var_colonia1    =     $_POST['USU_COLONIA'];
          $var_codigopost1 =     $_POST['USU_CODIGO_POSTAL'];
          $var_foto1       =     $_POST['USU_IMG_PERFIL'];
          $var_telefono1   =     $_POST['USU_TELEFONO'];
          $var_celular1    =     $_POST['USU_CELULAR'];
          $var_lugarnac1   =     $_POST['USU_LUGAR_NACIMIENTO'];
          $var_fechanac1   =     $_POST['USU_FECHA_NAC'];
          $var_sexo1       =     $_POST['USU_SEXO'];
               // $var_id            = $_POST['id_foranea2'];

$conversion = strtotime($var_fechanac1);
$fechasalida = date('y-m-d',$conversion);



        
        $actualizar = "UPDATE usuarios SET USU_USUARIO='$var_usu1', 
        USU_CONTRA='$var_contra1', 
        USU_ROLL='$var_roll',
        USU_APELLIDO_PATERNO='$var_apellidop1',
        USU_APELLIDO_MATERNO='$var_apellidom1',
        USU_NOMBRE='$var_nombre1',
        USU_DIRECCION='$var_direccion1',
        USU_COLONIA='$var_colonia1',
        USU_CODIGO_POSTAL='$var_codigopost1',
        USU_TELEFONO='$var_telefono1',
        USU_CELULAR='$var_celular1',
        USU_LUGAR_NACIMIENTO='$var_lugarnac1',
        USU_FECHA_NAC='$var_fechanac1',
        USU_SEXO='$var_sexo1' WHERE  ID_USUARIO='$editar_id'";
        
        $ejecutar = mysqli_query($conn, $actualizar);
    
        if($ejecutar){
        
        echo "<script>alert('Datos actualizados!')</script>";
        echo "<script>window.open('mostrar_empleados.php','_self')</script>";
        } else {
            echo "Error: " . $actualizar . "<br>" . $conn->error;
}
        }
    
    
    ?> 



                    </div><!-- cierra el div content final -->
                </div> <!-- cierra el div card -->
            </div><!-- cierra el div col-md-12 -->
          </div><!-- cierra el div row-->
        </div> <!-- cierra el div container-fluid-->
     </div><!-- cierra el div content-->
      
</div>   <!-- cierra el div del panel -->

  





                                 
                                        


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="http://www.facebook.com">
                                   Facebook
                                </a>
                            </li>
                            <li>
                               <a href="http://gspcabo.com/?page_id=16">
                                   Green Schoolarship
                                </a>
                            </li>
                            <li>
                                <a href="http://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Interface</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="fixed-plugin">
       
    </div>

</body>

    <!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
    <script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Forms Validations Plugin -->
    <script src="assets/js/jquery.validate.min.js"></script>

    <!-- Promise Library for SweetAlert2 working on IE -->
    <script src="assets/js/es6-promise-auto.min.js"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="assets/js/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="assets/js/bootstrap-datetimepicker.js"></script>

    <!--  Select Picker Plugin -->
    <script src="assets/js/bootstrap-selectpicker.js"></script>

    <!--  Switch and Tags Input Plugins -->
    <script src="assets/js/bootstrap-switch-tags.js"></script>

    <!-- Circle Percentage-chart -->
    <script src="assets/js/jquery.easypiechart.min.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
    <script src="assets/js/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

    <!-- Wizard Plugin    -->
    <script src="assets/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="assets/js/bootstrap-table.js"></script>

    <!--  Plugin for DataTables.net  -->
    <script src="assets/js/jquery.datatables.js"></script>

    <!--  Full Calendar Plugin    -->
    <script src="assets/js/fullcalendar.min.js"></script>

    <!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js?v=1.2.1"></script>

    <!--   Sharrre Library    -->
    <script src="assets/js/jquery.sharrre.js"></script>

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    
</html>
