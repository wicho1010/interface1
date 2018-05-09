<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>GSP Cabo</title>
		<!-- Bootstrap core CSS     -->
 		<link href="assets/css/clock.css" rel="stylesheet" />
     <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
	<!-- CODIGO PHP DE INICIO -->
	<?php
		include_once 'assets/db/connect.php';
		session_start();
		$id_usuario = $_SESSION["clave"];
		$sql= "SELECT USU_NOMBRE, USU_APELLIDO_PATERNO, USU_ROLL from usuarios where ID_USUARIO = '$id_usuario'";
		$resultado = $conexion->query($sql);
		if($resultado->num_rows > 0){
			while($row = $resultado->fetch_assoc()){
			$var_nombre = $row["USU_NOMBRE"];
			$var_apellido = $row["USU_APELLIDO_PATERNO"];
			$tipo = $row["USU_ROLL"];
			$user = $var_nombre. " ".$var_apellido;
			}
		}
	?>
	<div class="wrapper">
	    <div class="sidebar" data-background-color="brown" data-active-color="danger">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="#" class="simple-text logo-mini">
					gsp
				</a>
				<a href="#" class="simple-text logo-normal">
					GSP Cabo
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="info">
						<div class="photo">
		                    <img src="assets/img/faces/face-2.jpg" />
		                </div>
	                    <a data-toggle="collapse" class="collapsed">
	                        <span>
								<?php
									echo $user;
								?>
							</span>
						<div class="clearfix"></div>
	                </div>
	            </div>
	            <ul class="nav">
	                <li class="active">
	                    <a href="admin.php" aria-expanded="true">
	                        <i class="ti-panel"></i>
	                        <p>Dashboard
                            </p>
	                    </a>
	                </li>
					<li>
						<a href="perfil_admin.php">
							<i class="ti-user"></i>
							<p>Perfil de Usuario
							</p>
						</a>
					</li>
					<li>
						<a data-toggle="collapse" href="#formsExamples">
	                        <i class="ti-calendar"></i>
	                        <p>
								Agenda

	                        </p>
	                    </a>
	                </li>
	                <li>
										<a data-toggle="collapse" href="#tablesExamples">
	                  	<i class="ti-clipboard"></i>
	                    	<p>
								Control de Empleados
	                     	</p>
	                   </a>
	                </li>
									<li>
										<a href="teams.php">
	                        <i class="ti-agenda"></i>
	                        <p>
								Gestion de Equipos
	                        </p>
	                    </a>
	                </li>
									<li>
	                    <a href="../charts.html">
	                        <i class="ti-book"></i>
	                        <p>Reportes</p>
	                    </a>
	                </li>
									<li>
	                    <a href="assets/db/logout.php">
	                        <i class="ti-book"></i>
	                        <p>Cerrar Sesion</p>
	                    </a>
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
							Inicio
						</a>
	                </div>
	            </div>
	        </nav>
					<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-offset-3 col-sm-6-offset-3 col-md-6">
	                        <div class="card">
	                            <div class="card-content">
																<div id = "clock-rim">
																  <div id = "clock-base">
																    <div id = "notch-container"></div>
																    <div id = "brand">GSP<br/>Cabo</div>
																    <div id = "hour"></div>
																    <div id = "minute"></div>
																    <div id = "second"></div>
																    <div id = "center"></div>
																  </div>
																</div>
	                            </div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<span id="fecha"></span>
										<div class="clock">
										<div class="numbers">
										<p class="hours"></p>
										<p class="placeholder"></p>
										</div>
										<div class="colon">
										<p>:</p>
										</div>
										<div class="numbers">
										<p class="minutes"></p>
										<p class="placeholder"></p>
										</div>
										<div class="colon">
										<p>:</p>
										</div>
										<div class="numbers">
										<p class="seconds"></p>
										<p class="placeholder"></p>
										</div>
										<div class="am-pm">
										<div>
										<p class="am">am</p>
										</div>
										<div>
										<p class="pm">pm</p>
										</div>
										</div>
									</div>
								</div>
	                        </div>
	                    </div>
	                </div>
								</div>
                </div>
								<div class="row">
									<div class="col-lg-offset-3 col-sm-6-offset-3 col-md-6">
										<?php
										$sql= "SELECT CONT_HORA_SALIDA FROM control_empleados WHERE CON_ID_EMPLEADO = $id_usuario";
										$resultado = $conexion->query($sql);
										$style = "";
										$aux = '0';
										if($resultado->num_rows > 0){
											while($row = $resultado->fetch_assoc()){
												if($resultado != $aux){
													$style = "style='display:none;'";
												}
											}
										}
?>
										<div class="card" <?php echo $style; ?> >
											<div class="card-header">
												<h4 class="card-title">
													CONTROL DE ENTRADAS Y SALIDAS
												</h4>
												<p class="category"></p>
											</div>
											 <div class="card-footer">


												 <form class="" action="assets/db/checkin.php" method="post">
													<?php
														$sql= "SELECT CONT_HORA_ENTRADA FROM control_empleados WHERE CON_ID_EMPLEADO = $id_usuario";
														$resultado = $conexion->query($sql);
														if($resultado->num_rows > 0){
															while($row = $resultado->fetch_assoc()){
															}
														}
														else {
															echo "<button type='submit' class='btn btn-info btn-fill btn-wd pull-left' name='button'>Hacer CHECK-IN</button>";
														}
													 ?>
 												</form>
 												<form class="" action="assets/db/checkout.php" method="post">
													<?php
														include 'assets/db/connect.php';
														$sql= "SELECT CONT_HORA_SALIDA FROM control_empleados WHERE CON_ID_EMPLEADO = $id_usuario";
														$aux = 0;
														$resultado = $conexion->query($sql);
														while($row = $resultado->fetch_assoc()){
															if($row == $aux) {
																echo "<button type='submit' class='btn btn-info btn-fill btn-wd pull-left' name='button'>Hacer CHECK-OUT</button>";
															}
														}
													 ?>
 												</form>
 <div class="clearfix">

 </div>

 											</div>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-offset-3 col-sm-6-offset-3 col-md-6">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">
													CONTROL DE ENTRADAS Y SALIDAS
												</h4>
												<p class="category"></p>
											</div>
											<div class="card-content table-responsive table-full-width">
												<table class="table table-striped">
													<thead>
														<th>ID EMPLEADO</th>
														<th>NOMBRE EMPLEADO</th>
														<th>HORA ENTRADA</th>
														<th>HORA SALIDA</th>
													</thead>
													<tbody>
															<?php
																$sql= "SELECT empleados.ID_EMPLEADO, usuarios.USU_NOMBRE, control_empleados.CONT_HORA_ENTRADA, control_empleados.CONT_HORA_SALIDA
																FROM usuarios, empleados, control_empleados
																WHERE empleados.ID_EMPLEADO = control_empleados.CON_ID_EMPLEADO
																AND usuarios.ID_USUARIO = empleados.EMP_ID_USUARIO";
																$resultado = $conexion->query($sql);
																if($resultado->num_rows > 0){
																	while($row = $resultado->fetch_assoc()){
																		echo "<tr>". "\n";
																		echo "<td>".$row["ID_EMPLEADO"]."</td> \n";
																		echo "<td>".$row["USU_NOMBRE"]."</td> \n";
																		echo "<td>".$row["CONT_HORA_ENTRADA"]."</td> \n";
																		echo "<td>".$row["CONT_HORA_SALIDA"]."</td> \n";
																		echo "</tr>"."\n";
																	}
																}
															 ?>

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
	        </div>
            <footer class="footer">
                <div class="container-fluid">
                </div>
            </footer>
	    </div>
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
	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>
	<!-- Sweet Alert 2 plugin -->
	<script src="assets/js/sweetalert2.js"></script>
	<!-- Vector Map plugin -->
	<script src="assets/js/jquery-jvectormap.js"></script>
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
		<!--   Sharrre Library    -->
		<script src="assets/js/clock.js"></script>
</html>
