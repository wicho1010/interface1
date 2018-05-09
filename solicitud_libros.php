<!doctype html>
<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();

$ahora = time(); //obtenemos la fecha actual a partir de la función time().
$formateado= date('Y-m-d', $ahora) ; // obtenemos la cadena en el formato YYYY-MM-DD

$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];

//variables
$id_bec="";
$id_lib="";
$descrip = "";
$fech ="";
$stat = ""; 


//consulta para obtener el id del becario
$query = "SELECT
B.ID_BECARIO, U.USU_IMG_PERFIL
FROM
becario B, usuarios U
WHERE
U.ID_USUARIO = $var_clave
AND
B.BEC_ID_USUARIO = U.ID_USUARIO";

$resultado = $conn->query($query);


if($resultado->num_rows > 0){

 while($row = $resultado->fetch_assoc()) {

 $id_bec = $row["ID_BECARIO"];
 $img = $row["USU_IMG_PERFIL"];
}
}

$query2 = "SELECT
ID_SOL_LIBROS, LIB_DESCRIPCION_LIBRO, LIB_FECHA, LIB_STATUS
FROM
solicitud_libros
WHERE
LIB_ID_BECARIO = $id_bec;";

$res = $conn->query($query2);

 ?>

<html lang="en">
<head>
 <meta charset="utf-8" />
 <link rel="apple-touch-icon" sizes="76x76" href= "assets/img/apple-icon.png">
 <link rel="icon" type="image/png" sizes="96x96" href= "assets/img/favicon.png">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

 <title>Schoolar Libros</title>

 <!-- Canonical SEO -->
	 <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>

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
	         <!-- <div class="clearfix"></div>

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
	            <ul class="nav">

	                <li>
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
									<li class="active">
					                    <a data-toggle="collapse" href="#dashboardOverview">
					                        <i class="ti-pencil-alt"></i>
					                        <p>Solicitudes
				                                <b class="caret"></b>
				                            </p>
					                    </a>
				                        <div class="collapse" id="dashboardOverview">
											<ul class="nav">
												<li class="active">
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

                          <!-- <li>
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
	                    <a class="navbar-brand">Solicitudes - Solicitud de libros</a>
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

	<!-- Contenido principal-->

				<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">


                            <div class="card-content">
                            <div class="header">
                                <h4 class="title">Solicitud de libros</h4>
                                <p class="category">Aquí puedes Rellenar el formulario para solicitar libros academicos</p></br>
                            </div>
                            <form action="guard_libro" method="post" name="datos">
                            <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre del maestro</label>
                                    <input type="text" name="nom_mae" class="form-control border-input" placeholder="Nombre completo del profesor" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Materia</label>
                                    <input type="text" name="mat" class="form-control border-input" placeholder="Nombre de la materia" required>
                                </div>
                            </div>



														<div class="col-md-3">
																<div class="form-group">
																		<label for="exampleInputEmail1">Escuela</label>
																		<input type="text" name="escu" class="form-control border-input" placeholder="Nombre escuela" required>
																</div>
														</div>
														<div class="col-md-2">
																<div class="form-group">
																		<label for="exampleInputEmail1">Semestre</label>
																		<input type="text" name="semes" class="form-control border-input" placeholder="Semestre actual" required>
																</div>
														</div>
                            <div class="col-md-3">
																<div class="form-group">
																		<label for="exampleInputEmail1">Vendedor</label>
																		<input type="text" name="vend" class="form-control border-input" required>
																</div>
														</div>
                          </div>
                          <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cantidad</label>
                                    <input type="number" maxlength="1" name="cant" class="form-control border-input" placeholder="Cantidad de libros" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Precio</label>
                                    <input type="number" name="pre" class="form-control border-input" placeholder="Precio en dolares" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Descripción</label>
                                    <input type="text" name="descrip" class="form-control border-input" placeholder="Descripción del libro" required>
                                </div>
                            </div>
														<div class="col-md-3">
																<div class="form-group">
																		<label for="exampleInputEmail1">Fecha</label>
																		<input type="date" name="fech" class="form-control border-input" readonly value="<?php echo $formateado ?>">
																</div>
														</div>
                          </div>
                        </br>

                            <div class="text-center">
                              <button type="submit" class="btn btn-success btn-fill btn-wd">Guardar</button>
                            </div>
                        </br>
                      </form>

                                  <table id="bootstrap-table" class="table table-striped">
																	<thead>

																			<th data-field="id">id</th>
																		<th data-field="name" data-sortable="true">Libro</th>
																		<th data-field="fecha" data-sortable="true">Fecha</th>
																		<th data-field="status" data-sortable="true">Estatus</th>
                                      <th class="disabled-sorting">Acción</th>

																	</thead>
                                  <?php
                                  include "conexion.php";
                                  $consulta = "SELECT
                                  *
                                  FROM
                                  solicitud_libros
                                  WHERE
                                  LIB_ID_BECARIO = $id_bec;";



                                    $ejecutar = mysqli_query($conn, $consulta);
                                  while($fila=mysqli_fetch_array($ejecutar)){
                                      $id_b          = $fila['ID_SOL_LIBROS'];
                                      $nom         = $fila['LIB_DESCRIPCION_LIBRO'];
                                      $fech  = $fila['LIB_FECHA'];
                                      $estatu        = $fila['LIB_STATUS'];
                              ?>
                                                    <tbody>
                                                  <tr>
                                                        <td><?php echo $id_b ?></td>
                                                        <td><?php echo $nom ?></td>
                                                      <td><?php echo $fech ?></td>
                                                      <td><?php echo $estatu ?></td>
                                                      <td>

                                                    <button onclick="alerta(<?php echo $id_b ?>), enviarmod(<?php echo $id_b ?>);" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></button>
                                                    <button onclick="borrar(<?php echo $id_b ?>)" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                                                    <!--<a href="borrar_fon.php?id=<?php echo $id_b; ?>" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>-->
                                                    </td >
                                        </tr>
                                      <?php } ?>
																	</tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

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
					<script src="../assets/js/demo.js"></script>

<script>
          function enviarmod(id){
            $.ajax({
                // la URL para la petición
                url : 'mod2.php',
                // la información a enviar
                // (también es posible utilizar una cadena de datos)
                data : {
                   id : id
                },
                // especifica si será una petición POST o GET
                type : 'POST',
                // el tipo de información que se espera de respuesta
                dataType : 'json',
                // código a ejecutar si la petición es satisfactoria;
                // la respuesta es pasada como argumento a la función
                success : function(data) {
                  $("#swal-input0").val(data.data.id);
                  $("#swal-input1").val(data.data.nom);
                  $("#swal-input2").val(data.data.mat);
                  $("#swal-input3").val(data.data.vende);
                  $("#swal-input4").val(data.data.canti);
                  $("#swal-input5").val(data.data.prec);
                  $("#swal-input6").val(data.data.descrip);
                  $("#swal-input7").val(data.data.fech);
                },

                // código a ejecutar si la petición falla;
                // son pasados como argumentos a la función
                // el objeto de la petición en crudo y código de estatus de la petición
                error : function(xhr, status) {

                },

                // código a ejecutar sin importar si la petición falló o no
                complete : function(xhr, status) {

                }
            });
          }
          </script>

          <script>
          function borrar(id){
          swal({
             title: 'Are you sure?',
             text: "You won't be able to revert this!",
             type: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             showLoaderOnConfirm: true,
             preConfirm: function() {
               return new Promise(function(resolve) {

                 $.ajax({
                  url: 'borrar_lib.php',
                  type: 'POST',
                  data: 'delete='+id,
                  dataType: 'json'
               })
               .done(function(response){
                  swal('Deleted!', response.message, response.status);
                location.reload();
               })
               .fail(function(){
                  swal('Oops...', 'Something went wrong with ajax !', 'error');
               });
               });
             },
             allowOutsideClick: false
          });
          }
          </script>

          <script type="text/javascript">

          function alerta(id){


          swal({
          title: 'Editar solicitud',
          html:

          '<form action="actual_lib" method="post" name="data">'+
          '<input type="hidden" name="swal-input0" id="swal-input0" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Nombre del maestro</label>' +
          '<input name="swal-input1" id="swal-input1" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Materia</label>' +
          '<input name="swal-input2" id="swal-input2" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Vendedor</label>' +
          '<input name="swal-input3" id="swal-input3" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Cantidad</label>' +
          '<input name="swal-input4" id="swal-input4" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Precio</label>' +
          '<input name="swal-input5" id="swal-input5" class="form-control border-input"></br>'+
          '<label for="exampleInputEmail1">Descripción</label>' +
          '<input name="swal-input6" id="swal-input6" class="form-control border-input"></br>'+
          '<label for="exampleInputEmail1">Fecha</label>' +
          '<input type="date" name="swal-input7" id="swal-input7" class="form-control border-input"></br>'+
          '<Button type="submit" class= "btn btn-info btn-fill btn-wd">Actualizar</Button>'+
          '</form>',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: '</form> Actualizar solicitud',
          cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
          showConfirmButton: false,
          focusConfirm: false,
          buttonsStyling: false,
          reverseButtons: true
          }).then(function (result) {

          swal(
          'Actualizado!',
          'La solicitud ha sido actualizada',
          'success'
          )
          }).catch(swal.noop);

          };
          </script>
          <!--
				  <script type="text/javascript">

						var $table = $('#bootstrap-table');

					        function operateFormatter(value, row, index) {
					            return [
									'<div class="table-icons">',
						                '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
											'<i class="ti-image"></i>',
										'</a>',
						                '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
						                    '<i class="ti-pencil-alt"></i>',
						                '</a>',
						                '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
						                    '<i class="ti-close"></i>',
						                '</a>',
									'</div>',
					            ].join('');
					        }

					        $().ready(function(){
					            window.operateEvents = {
					                'click .view': function (e, value, row, index) {
					                    info = JSON.stringify(row);

					                    swal('You click view icon, row: ', info);
					                    console.log(info);
					                },
					                'click .edit': function (e, value, row, index) {
					                    info = JSON.stringify(row);

					                    swal('You click edit icon, row: ', info);
					                    console.log(info);
					                },
					                'click .remove': function (e, value, row, index) {
					                    console.log(row);
					                    $table.bootstrapTable('remove', {
					                        field: '#',
					                        values: [row.id]
					                    });
					                }
					            };

					            $table.bootstrapTable({
					                toolbar: ".toolbar",
					                clickToSelect: true,
					                //showRefresh: true,

					                showToggle: true,
					                showColumns: true,
					                pagination: true,

					                pageSize: 8,
					                clickToSelect: false,
					                pageList: [8,10,25,50,100],

					                formatShowingRows: function(pageFrom, pageTo, totalRows){
					                    //do nothing here, we don't want to show the text "showing x of y from..."
					                },
					                formatRecordsPerPage: function(pageNumber){
					                    return pageNumber + " rows visible";
					                },
					                icons: {
					                   // refresh: 'fa fa-refresh',
					                    toggle: 'fa fa-th-list',
					                    columns: 'fa fa-columns',
					                    detailOpen: 'fa fa-plus-circle',
					                    detailClose: 'ti-close'
					                }
					            });

					            //activate the tooltips after the data table is initialized
					            $('[rel="tooltip"]').tooltip();

					            $(window).resize(function () {
					                $table.bootstrapTable('resetView');
					            });
							});

					</script>-->

				</html>
