<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
   <link rel="icon" type="image/png" sizes="96x96" href="assets/img/gsp.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Coordinador/Agenda</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
  
  <script language="javascript" src="javascript/reloj_actual.js" ></script>

</head>
<body  >

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="coordinador.php" class="simple-text">
                    Schoolar
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="coordinador.php">
                        <i class="ti-user"></i>
                        <p>Perfil de Usuario</p>
                    </a>
                </li>
                <li>
                    <a href="control_emple.php">
                        <i class="ti-id-badge"></i>
                        <p>Control empleados</p>
                    </a>
                </li>
                <li class="active">
                    <a href="agenda.php">
                        <i class="ti-agenda"></i>
                        <p>Agenda</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Reportes</p>
                    </a>
                </li>
                  <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Equipos</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Coordinador</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class=""></i>
                                <p><?php echo"Bienvenido a Schoolar:@".$_SESSION['nombre'];?> </p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a  class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
                                    <p>Notifications</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="destroy.php">
                                <i class="ti-settings"></i>
                                <p>Logout</p>
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
 <h4 class="title">Programar un Evento</h4>
</div>

<div class="content table-responsive table-full-width">
         
<!-- CODIGO DE FORMULARIO-->
<!--<div class="col-md-10"> -->

<form class="form-horizontal" action="prog_event.php" method="post">
 

<div class="form-group">
    <label  class="col-sm-2 control-label">Nombre del Evento</label>
    <div class="col-sm-5">
      <input type="text" class="form-control border-input"  placeholder="Lugar" name="titulo">
    </div>
  </div>



  <!--Actividades-->
  <div class="form-group">
    <label class="col-sm-2 control-label">Tipo de Evento</label>
    <div class="col-sm-5">
 <select name="tipo_event"  class="form-control border-input" required="true" >
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
    <div class="col-sm-2">
       <input type="date" name="fecha_ini" class="form-control border-input" required="true" autocomplete="off">
     </div>
  </div>
<!--fin fecha inicio-->

<!--Fecha fin-->
<div class="form-group">
    <label class="col-sm-2 control-label">Fecha Termino</label>
    <div class="col-sm-2">
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
    <label  class="col-sm-2 control-label">Descripción del Evento</label>
    <div class="col-sm-5">
     <textarea name="descripcion" required="" class="form-control border-input"  placeholder="Ingrese la descripcion del evento" name="descrip"></textarea>      
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info btn-fill btn-wd">Programar Evento</button>
    </div>
  </div>
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
                            <a href="https://www.facebook.com/greenscholarshipprogram/">
                                <i class="ti-facebook"></i>
                            Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/">
                                 <i class="ti-twitter"></i>
                               Twitter
                            </a>
                        </li>
                        <li>
                            <a href="">
                             <i class="ti-google"></i>
                             G+
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>,Desarollado con <i class="fa fa-heart heart"></i> by <a>Interface.COM</a>
                </div>
            </div>
        </footer>


    </div>
</div>


</body>

    <script src="assets/js/bootstrap-selectpicker.js"></script>
    <!--   Core JS Files   -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    

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

    <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
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

    <script type="text/javascript">
        $().ready(function(){
            $('#registerFormValidation').validate();
            $('#loginFormValidation').validate();
            $('#allInputsFormValidation').validate();
        });
    </script>


    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
 
</html>

