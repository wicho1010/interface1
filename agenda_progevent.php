<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Coordinador</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>

    
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
                            <img src="assets/img/faces/face-2.jpg" />
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
                                        <span class="sidebar-normal">Configuración de cuenta</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="nav">
                    <li>
                        <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
                            <i class="ti-user"></i>
                            <p>Perfil de Usuario
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="dashboardOverview">
                            <ul class="nav">
                                <li >
                                    <a href="coordinador.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Editar Perfil</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="ti-id-badge"></i>
                            <p>Control Empleados
                               <b class="caret"></b>
                            </p>
                        </a>
                    </li >


                        <li class="active">
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda"></i>
                            <p>
                                Agenda
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="tablesExamples">
                            <ul class="nav">
                                <li class="active">
                                    <a href="agenda_progevent.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Programar un Evento</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../tables/extended.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Eventos Programados</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard"></i>
                            <p>
                                Reportes
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">

                                <li>
                                    <a href="forms/regular.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Bitacora de Limpieza</span>
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
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#mapsExamples">
                            <i class="ti-comments-smiley"></i>
                            <p>
                                Equipos
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="../maps/google.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Ver Equipos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../maps/vector.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Nuevo Equipo</span>
                                    </a>
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
                           Coordinador
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
                                    <p class="hidden-md hidden-lg">
                                        Settings
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
 <h4 class="card-title">Programar un Evento</h4>
 <br>
</div>

<div class=" card content">
         
<!-- CODIGO DE FORMULARIO-->
<!--<div class="col-md-10"> -->

<form class="form-horizontal"  action="prog_event.php" method="post">
 

<div class="form-group">
    <label  class="col-sm-2 control-label">Nombre del Evento</label>
    <div class="col-sm-5">
      <input type="text" class="form-control border-input"  placeholder="Lugar" name="titulo" required="true">
    </div>
  </div>
 

  <!--Actividades-->
  <div class="form-group">
    <label class="col-sm-2 control-label">Tipo de Evento</label>
    <div class="col-sm-5">
 <select name="tipo_evnt"  class="form-control border-input" required="true"  name="tipo_event" >
            <option selected value="0">Seleccionar...</option>
                <option value="1">Actividad</option>
                 <option value="2">Seminario</option>
                </select>

     </div>
  </div>
<!--fin div Actividades-->

<!--Fecha de inicio-->
<div class="form-group">
    <label  class="col-sm-2 control-label">Fecha Inicio</label>
    <div class="col-sm-3">
       <input type="date" name="fecha_ini" class="form-control border-input" required="true" autocomplete="off">
     </div>
  </div>
<!--fin fecha inicio-->

<!--Fecha fin-->
<div class="form-group">
    <label class="col-sm-2 control-label">Fecha Termino</label>
    <div class="col-sm-3">
       <input type="date" name="fecha_fin" class="form-control border-input" required="true" autocomplete="off">
     </div>
  </div>
<!--fin fecha fins-->


  <div class="form-group">
    <label  class="col-sm-2 control-label">Lugar</label>
    <div class="col-sm-5">
      <input type="text" class="form-control border-input"  placeholder="Lugar" name="lugar">
    </div>
  </div>


  <div class="form-group">
    <label  class="col-sm-2 control-label">Descripción</label>
    <div class="col-sm-5">
     <textarea name="descripcion" required="" class="form-control border-input"  placeholder="Ingrese la descripcion del evento" name="descrip"></textarea>      
    </div>
  </div>

                <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-info btn-fill btn-wd">Programar Evento</button>
                         </div>
                         </div>
                        <br>
                        <br>
                </form>      





                    </div><!-- cierra el div content final -->
                </div> <!-- cierra el div card -->
            </div><!-- cierra el div col-md-12 -->
          </div><!-- cierra el div row-->
        </div> <!-- cierra el div container-fluid-->
     </div><!-- cierra el div content-->

</div><!-- cierra el div del panel responsive-->






























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
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="">Interface</a>
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
