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
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>

                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
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
                            <p>Perfil de Usuario
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="dashboardOverview">
                            <ul class="nav">
                                <li class="">
                                    <a href="ingles.php">
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
                                Calificaciones
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">

                               <li>
                                    <a href="calificaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Tabla de Calificaciones </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="asignar_calificaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Agregar Calificaciones</span>
                                    </a>
                                </li>

                                 <li class="active">
                                    <a href="editar_calificaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Editar Calificaciones </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard"></i>
                            <p>
                                Asistencia 
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">

                                <li>
                                    <a href="asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia de Ingles</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia Ingles</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
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
                           Ingles
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
                                <a href="destroy.php" class="btn-rotate">
                                   <i class="ti-settings"></i>
                                <p>logout</p>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

                             















    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                    <div class="content">             
<div class="header">
    <br>
 <h4 class="card-title">Editar calificaciones</h4>
 <br>
</div>

<div class=" card content">
         
<!-- CODIGO DE FORMULARIO-->
<!--<div class="col-md-10"> -->




<?php 
include 'conexion.php';
        if(isset($_GET['editar'])){
            
            $editar_id = $_GET['editar']; 
            
            $consulta = "SELECT * FROM calificaciones WHERE ID_CALIFICACIONES='$editar_id'";
            $ejecutar = mysqli_query($conn, $consulta); 
            
            $fila=mysqli_fetch_array($ejecutar); 
            
          


                //$id_c          = $fila['ID_CALIFICACIONES'];
                $nivel         = $fila['CAL_NIVEL_INGLES'];
                $calificacion  = $fila['CAL_CALIFICACION']; 
                $unidad        = $fila['CAL_UNIDAD']; 
                $promedio      = $fila['CAL_PROMEDIO'];
                $id            = $fila['CAL_ID_BECARIO'];
            
            }
?>

<form class="form-horizontal"  action="" method="post">
 

<!--<div class="form-group">
    <label  class="col-sm-2 control-label">Nombre del Evento</label>
    <div class="col-sm-5">
      <input type="text" class="form-control border-input"  placeholder="Lugar" name="titulo" required="true">
    </div>
  </div>
 

  <!--Actividades                         value="<?php echo $nivel ;?>"-->
  <div class="form-group">
    <label class="col-sm-2 control-label">Nivel de ingles</label>
    <div class="col-sm-5">
 <select name="nivel"  class="form-control border-input" required="true"  name="tipo_event" value="<?php echo $nivel ;?>" >
            <option selected value="0">Seleccionar...</option>
                <option value="1">Alto</option>
                 <option value="2">Medio</option>
                 <option value="2">Bajo</option>
                </select>

     </div>
  </div>
<!--fin div Actividades-->

<!--Fecha de inicio               value="<?php echo  $calificacion;?>"-->
<div class="form-group">
    <label  class="col-sm-2 control-label">Calificación</label>
    <div class="col-sm-3">
       <input type="text" name="calificacion" class="form-control border-input" placeholder="Calificación" required="true" autocomplete="off"  value="<?php echo  $calificacion;?>">
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

 <!--Actividades        value="<?php echo  $unidad ;?>"ssss-->
  <div class="form-group">
    <label class="col-sm-2 control-label">Unidad</label>
    <div class="col-sm-5">
 <select name="unidad"  class="form-control border-input" required="true"  name="tipo_event"  value="<?php echo  $unidad ;?>">
            <option selected value="0">Seleccionar...</option>
                <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                  <option value="4">4</option>
                   <option value="5">5</option>
                    <option value="6">6</option>

                </select>

     </div>
  </div>
<!--fin div Actividades        value="<?php echo $promedio ;?>"       value="<?php echo   $id  ;?>"-->


  <div class="form-group">
    <label  class="col-sm-2 control-label">Promedio</label>
    <div class="col-sm-5">
      <input type="text" class="form-control border-input"  placeholder="Promedio" name="promedio" value="<?php echo $promedio ;?>" >
    </div>
  </div>

    <div class="form-group">
    <label  class="col-sm-2 control-label">No becario</label>
    <div class="col-sm-5">
      <input type="integer" class="form-control border-input"  placeholder="id" name="id_foraneo"  value="<?php echo   $id  ;?>"  readonly="readonly">
    </div>
  </div>


 

                <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-info btn-fill btn-wd" name="actualizar">Editar calificación</button>
                         </div>
                         </div>
                        <br>
                        <br>
                </form>      

<?php 
include 'conexion.php';
    if(isset($_POST['actualizar'])){
    
      


                $var_nivel         = $_POST['nivel'];
                $var_calificacion  = $_POST['calificacion']; 
                $var_unidad        = $_POST['unidad']; 
                $var_promedio      = $_POST['promedio'];
               // $var_id            = $_POST['id_foranea2'];


        
        $actualizar = "UPDATE calificaciones SET CAL_NIVEL_INGLES='$var_nivel', CAL_CALIFICACION='$var_calificacion', CAL_UNIDAD='$var_unidad',CAL_PROMEDIO='$var_promedio'  WHERE  ID_CALIFICACIONES='$editar_id'";
        
        $ejecutar = mysqli_query($conn, $actualizar);
    
        if($ejecutar){
        
        echo "<script>alert('Datos actualizados!')</script>";
        echo "<script>window.open('calificaciones.php','_self')</script>";
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
                                <a href="http://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                   Blog
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
    <script src="ssets/js/jquery.sharrre.js"></script>

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>



    <script type="text/javascript">
        $(document).ready(function(){
            demo.initOverviewDashboard();
            demo.initCirclePercentage();

        });
    </script>

</html>
