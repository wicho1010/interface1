
<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();

$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];
$fech_in = "";
$fech_fin = "";
$nom_act = "";
$img = "";

//consulta para obtener el id del becario
$query = "SELECT
B.ID_BECARIO, U.USU_IMG_PERFIL
FROM
becario B, usuarios U
WHERE
U.ID_USUARIO = $var_clave
AND
B.BEC_ID_USUARIO = U.ID_USUARIO;";

$resultado = $conn->query($query);


if($resultado->num_rows > 0){

 while($row = $resultado->fetch_assoc()) {

 $id_bec = $row["ID_BECARIO"];
 $img = $row["USU_IMG_PERFIL"];
}
}

$query = "SELECT ACT_TITULO_ACTVI, ACT_FECHA_INICIO, ACT_FECHA_TERMINO, ACT_ID_BECARIO
                   FROM actividades where ACT_ID_BECARIO = $id_bec";

$resultado = $conn->query($query);


?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href= "assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href= "assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolar actividades</title>

	<!-- Canonical SEO -->


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href= "assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href= "assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href= "assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href= "assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
    <!--
    Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
    Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
  -->
    <div class="logo">
      <a class="simple-text logo-mini">
        SC
      </a>

      <a class="simple-text logo-normal">
        Schoolar
      </a>
    </div>
      <div class="sidebar-wrapper">
      <div class="user">
                <div class="photo">
                    <img src= "<?php echo $img ?>" />
                </div>
                <div class="info">
          <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>
                <?php echo $var_name ?>
                          <b class="caret"></b>
            </span>
                    </a>
          <!--<div class="clearfix"></div>

                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                <a href="#profile">
                  <span class="sidebar-mini">Mp</span>
                  <span class="sidebar-normal">My Profile</span>
                </a>
              </li>
                            <li>
                <a href="#edit">
                  <span class="sidebar-mini">Ep</span>
                  <span class="sidebar-normal">Edit Profile</span>
                </a>
              </li>
                            <li>
                <a href="#settings">
                  <span class="sidebar-mini">S</span>
                  <span class="sidebar-normal">Settings</span>
                </a>
              </li>
                        </ul>
                    </div>-->
                </div>
            </div>

            <!--Contenido del panel desplegable-->

            <ul class="nav">

                <li>
                    <a href="user.php">
                        <i class="ti-user"></i>
                        <p>Perfil de usuario</p>
                    </a>
                </li>
                <li class="active">
                    <a href="actividades.html">
                        <i class="ti-star"></i>
                        <p>Actividades</p>
                    </a>
                </li>

                <!-- Panel desplegable -->
                <li>
                            <a data-toggle="collapse" href="#dashboardOverview">
                                <i class="ti-pencil-alt"></i>
                                <p>Solicitudes
                                      <b class="caret"></b>
                                  </p>
                            </a>
                              <div class="collapse" id="dashboardOverview">
                    <ul class="nav">
                      <li>
                        <a href="solicitud_libros.php">
                          <i class="ti-bookmark-alt"></i>
                          <span class="sidebar-normal">Solicitud de libros</span>
                        </a>
                      </li>
                      <li>
                        <a href="solicitud_fondos.php">
                          <i class="ti-money"></i>
                          <span class="sidebar-normal">Solicitud de fondos</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                        </li>


            <!--    <li>
                    <a href="">
                        <i class="ti-comments"></i>
                        <p>Grupos</p>
                    </a>
                </li>-->
            </ul>

            <!-- fin Contenido del panel desplegable -->
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
                    <a class="navbar-brand" href="#charts">Actividades</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="destroy.php" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                <i class="ti-share-alt"></i>
                <p>Logout</p>
                            </a>
                        </li>
                      
            <li>
                            <a href="#settings" class="btn-rotate">
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

<!-- Panel desplegable -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="card card-calendar">
                    <div class="card-content">
                       <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin Panel desplegable -->

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a>
                                Program Schoolar
                            </a>
                        </li>
                        <li>
                            <a>
                               Blog
                            </a>
                        </li>
                        <li>
                            <a>
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a>Schoolar</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

	<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
	<script src= "assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src= "assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src= "assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src= "assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src= "assets/js/jquery.validate.min.js"></script>

	<!-- Promise Library for SweetAlert2 working on IE -->
	<script src= "assets/js/es6-promise-auto.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src= "assets/js/moment.min.js"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src= "assets/js/bootstrap-datetimepicker.js"></script>

	<!--  Select Picker Plugin -->
	<script src= "assets/js/bootstrap-selectpicker.js"></script>

	<!--  Switch and Tags Input Plugins -->
	<script src= "assets/js/bootstrap-switch-tags.js"></script>

	<!-- Circle Percentage-chart -->
	<script src= "assets/js/jquery.easypiechart.min.js"></script>

	<!--  Charts Plugin -->
	<script src= "assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src= "assets/js/bootstrap-notify.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src= "assets/js/sweetalert2.js"></script>

	<!-- Vector Map plugin -->
	<script src= "assets/js/jquery-jvectormap.js"></script>

	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

	<!-- Wizard Plugin    -->
	<script src= "assets/js/jquery.bootstrap.wizard.min.js"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src= "assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
	<script src= "assets/js/jquery.datatables.js"></script>

	<!--  Full Calendar Plugin    -->
	<script src= "assets/js/fullcalendar.min.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src= "assets/js/paper-dashboard.js?v=1.2.1"></script>

    <!--   Sharrre Library    -->
    <script src= "assets/js/jquery.sharrre.js"></script>

    <!--   Full calendar    -->
    <link href='assets/css/fullcalendar.min.css' rel='stylesheet' />
    <link href='assets/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='assets/js/moment.min.js'></script>
    <script src='assets/js/jquery.min.js'></script>
    <script src='assets/js/fullcalendar.min.js'></script>



	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

  <script>

  	$(document).ready(function() {
  		$('#calendar').fullCalendar({
  			editable: true,
  			eventLimit: true, // allow "more" link when too many events
  			events: [
          <?php
          if($resultado->num_rows > 0){
        while($row = mysqli_fetch_array($resultado)) {
          echo "
          {

            title: '" .$row["ACT_TITULO_ACTVI"]."',
            start: '" .$row["ACT_FECHA_INICIO"]."',
            end: '".$row["ACT_FECHA_TERMINO"]."'

          },";
        }}?>
  			]
  		});
  	});
  </script>

</html>
