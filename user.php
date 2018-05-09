
<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();

$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];
$usu = "";
$apep = "";
$apem = "";
$sex = "";
$dire = "";
$col = "";
$cp = "";
$img = "";
$fech = "";
$lug = "";
$cel = "";
$tel = "";
$team = "";

//consulta para obtener el nombre del equipo por id
$consu = "SELECT E.EQU_NOMBRE_EQUIPO
FROM
usuarios U, equipos E, becario B
WHERE
U.ID_USUARIO = '$var_clave'
AND
B.BEC_ID_USUARIO = U.ID_USUARIO AND E.EQU_ID_BECARIO = B.ID_BECARIO;";

$res = $conn->query($consu);
if($res->num_rows > 0){
while($row = $res->fetch_assoc()){
	$team = $row["EQU_NOMBRE_EQUIPO"];
}
}

//consulta para rellenar los campos del equipo

$consu_team = "SELECT U.USU_NOMBRE
FROM
usuarios U, equipos E, becario B
WHERE
E.EQU_NOMBRE_EQUIPO = '$team'
AND
B.BEC_ID_USUARIO = U.ID_USUARIO
AND
E.EQU_ID_BECARIO = B.ID_BECARIO;";

$res_team = $conn->query($consu_team);

//Consulta para rellenar los campos del usuario
$query = "SELECT USU_APELLIDO_PATERNO, USU_APELLIDO_MATERNO, USU_USUARIO,
									USU_SEXO, USU_DIRECCION, USU_COLONIA, USU_CODIGO_POSTAL,
									USU_IMG_PERFIL,USU_TELEFONO, USU_CELULAR, USU_FECHA_NAC,
									USU_LUGAR_NACIMIENTO
									 FROM usuarios where ID_USUARIO = $var_clave";

$resultado = $conn->query($query);


if($resultado->num_rows > 0){

 while($row = $resultado->fetch_assoc()) {
 $usu = $row["USU_USUARIO"];
 $apep = $row["USU_APELLIDO_PATERNO"];
	$apem = $row["USU_APELLIDO_MATERNO"];
	$sex = $row["USU_SEXO"];
	$dire = $row["USU_DIRECCION"];
	$col = $row["USU_COLONIA"];
	$cp = $row["USU_CODIGO_POSTAL"];
	$img = $row["USU_IMG_PERFIL"];
	$tel = $row["USU_TELEFONO"];
	$cel = $row["USU_CELULAR"];
	$fech = $row["USU_FECHA_NAC"];
	$lug = $row["USU_LUGAR_NACIMIENTO"];



}//aqui termina el while

}else{ header("location:index.html");}


 ?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href= "assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href= "assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolar usuario</title>


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
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        PS
      </a>

      <a class="simple-text logo-normal">Schoolar</a>
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
                  <!--   <div class="clearfix"></div>

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
                    </div> -->
                </div>
            </div>
						<ul class="nav">

                <li class="active">
                    <a href="user.php">
                        <i class="ti-user"></i>
                        <p>Perfil de usuario</p>
                    </a>
                </li>
                <li>
                    <a href="actividades.php">
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


                <!--<li>
                    <a href="">
                        <i class="ti-comments"></i>
                        <p>Grupos</p>
                    </a>
                </li>-->

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
						<a class="navbar-brand">Usuarios</a>
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

<!--Contenido principal -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="<?php echo $img ?>" alt="..."/>
                                  <h4 class="title"><?php echo $var_name ?><br />
                                     <a href="#"><small>@CORREO</small></a>
                                  </h4>
																	<form action="guard_foto" method="post" enctype="multipart/form-data">
																	<input name="fotico" class="btn btn-wd btn-rotate" type="file" required accept="image/png/jpg"> </input>
																	<button name="btnguar"type="submit" class="btn btn-wd">Guardar</button>
																</form>
                                </div>

                            </div>
                            <hr>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Equipo: <?php echo $team ?></h4>
                            </div>
                            <div class="card-header">

                                <ul class="list-unstyled team-members">
																	<?php
																	if($res_team->num_rows > 0){
																	while($row = $res_team->fetch_assoc()){
																	

																			echo "
                                            <li>
                                                <div class='row'>
                                                    <div class='col-xs-3'>
                                                        <div class='avatar'>
                                                            <img src='assets/img/faces/face-0.jpg' alt='Circle Image' class='img-circle img-no-padding img-responsive'>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-6'>
                                                        ".$row["USU_NOMBRE"]."
                                                        <br />
                                                    </div>
                                                </div>
																							";}} ?>
                                        </ul>
                            </div>
                        </div>
                    </div>





                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Profile</h4>
                            </div>
                            <div class="card-content">
                                <form action="actual_perfil" method="post" name="datos">
                                    <div class="row">

																			<div class="col-md-4">
																					<div class="form-group">
																							<label for="exampleInputEmail1">Usuario</label>
																							<input type="text" name="user" class="form-control border-input" placeholder="Usuario" value="<?PHP echo $usu ?>">
																					</div>
																			</div>
																			<div class="col-md-4">
																					<div class="form-group">
																							<label for="exampleInputEmail1">Nombres</label>
																							<input type="text" name="nom" class="form-control border-input" placeholder="Nombre completo" value="<?php echo $var_name ?>">
																					</div>
																			</div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Apellido paterno</label>
                                                <input type="text" name="apep" class="form-control border-input" placeholder="Apellido"value="<?php echo $apep ?>" >
                                            </div>
                                        </div>
                                    </div>

																		<div class="row">

																			<div class="col-md-4">
																					<div class="form-group">
																							<label for="exampleInputEmail1">Apellido materno</label>
																							<input type="text" name="apem" class="form-control border-input" placeholder="Apellido" value="<?php echo $apem?>" >
																					</div>
																			</div>
																			<div class="col-md-4">
																					<div class="form-group">
																							<label for="exampleInputEmail1">Sexo</label>
																							<select name="sex" class="form-control border-input">

																								<option value="Masculino">Masculino</option>
  																						<option value="Femenino">Femenino</option>
  																					<option value="Indistinto">Indistinto</option>
																										</select>
																							<!--<input type="text" class="form-control border-input" placeholder="Orientación sexual">-->
																					</div>
																			</div>
																				<div class="col-md-4">
																						<div class="form-group">
																								<label for="exampleInputEmail1">Edad</label>
																								<input type="number" class="form-control border-input" placeholder="Edad">
																						</div>
																				</div>
																		</div>

																		<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input type="number" name="cel" class="form-control border-input" placeholder="Celular" value="<?php echo $cel?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefono</label>
                                                <input type="number" name="tel" class="form-control border-input" placeholder="Telefono" value="<?php echo $tel?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input type="text" name="dire" class="form-control border-input" placeholder="Dirección" value="<?php echo $dire?>" >
                                            </div>
                                        </div>
                                    </div>

																		<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Colonia</label>
                                                <input type="text" name="col" class="form-control border-input" placeholder="Colonia" value="<?php echo $col ?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fecha de nacimiento</label>
                                                <input type="date" name="fech" class="form-control border-input" placeholder="Fecha" value="<?php echo $fech?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Lugar de nacimiento</label>
                                                <input type="text" name="lug" class="form-control border-input" placeholder="Lugar" value="<?php echo $lug?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Codigo postal</label>
                                                <input type="number" maxlength="5" name="cp" class="form-control border-input" placeholder="ZIP Code"value="<?php echo $cp?>" >
                                            </div>
                                        </div>
                                    </div>




                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Actualizar perfil</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>





<!--fin Contenido principal -->

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
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a>Program Schoolar</a>
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

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>



</html>
