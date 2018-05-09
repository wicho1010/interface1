
 <!doctype html>
 <?php
 session_start();
 include 'fuctions.php';
 include 'conexion.php';
 verificar_sesion();

 $ahora = time(); //obtenemos la fecha actual a partir de la función time().
 $formateado= date('Y-m-d', $ahora) ; // obtenemos la cadena en el formato YYYY-MM-DD

//variables
 $var_name=$_SESSION['nombre'];
 $var_clave= $_SESSION['clave'];


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

 //consulta para llenar la tabla
 $consulta = "SELECT
 *
 FROM
 solicitud_fondos
 WHERE
 FON_ID_BECARIO = $id_bec;";


?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href= "assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href= "assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolar Fondos</title>

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
        <!--  <div class="clearfix"></div>

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
											<li>
												<a href="solicitud_libros.php">
													<i class="ti-bookmark-alt"></i>
													<span class="sidebar-normal">Solicitud de libros</span>
												</a>
											</li>
											<li class="active">
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
                    <a class="navbar-brand">Solicitudes - Solicitud de fondos</a>
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
                                <h4 class="title">Solicitud de fondos</h4>
                                <p class="category">Aquí puedes Rellenar el formulario para solicitar fondos extras</p></br>
                            </div>
                            <form action="guard_fondo" method="post" name="datos">
                            <div class="row">
														<div class="col-md-3">
																<div class="form-group">
																		<label for="exampleInputEmail1">Nombre's</label>
																		<input type="text" name="user" readonly class="form-control border-input" value="<?php echo $var_name ?>" required>
																</div>
														</div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre del evento</label>
                                    <input type="text" name="nom" class="form-control border-input" placeholder="Nombre del evento" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Requisito</label>
                                    <input type="number" name="req" class="form-control border-input" placeholder="Requisito monetario" required>
                                </div>
                            </div>



														<div class="col-md-2">
																<div class="form-group">
																		<label for="exampleInputEmail1">Organizador</label>
																		<input type="text" name="org" class="form-control border-input" placeholder="Nombre del organizador" required>
																</div>
														</div>
														<div class="col-md-3">
																<div class="form-group">
																		<label for="exampleInputEmail1">Ubicación</label>
																		<input type="text" name="ubi" class="form-control border-input" placeholder="Ubicación" required>
																</div>
                              </div>
														</div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Objetivo del evento</label>
                                    <input type="text" name="obj" class="form-control border-input" placeholder="Objetivo Gral" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fecha inicia</label>
                                    <input type="date" name="fech_in" class="form-control border-input" value="<?php echo $formateado ?>" required>
                                </div>
                            </div>
														<div class="col-md-3">
																<div class="form-group">
																		<label for="exampleInputEmail1">Fecha finaliza</label>
																		<input type="date" name="fech_fin" class="form-control border-input" contenteditable="false" value="<?php echo $formateado ?>" required>
																</div>
														</div>
                          </div></br>

                            <div class="text-center">
                              <button type="submit" class="btn btn-success btn-fill btn-wd">Guardar</button>
                            </div></br>
                          </form>

                                  <table id="bootstrap-table" class="table">
                                  <!--data-single-select= "true"
                                   data-click-to-select="true"-->
																	<thead>
                                      <!--<th data-field="state" data-checkbox="true"></th>-->
																			<th data-field="id">id</th>
																		<th data-field="nombre" data-sortable="true">Nombre</th>
																		<th data-field="fecha" data-sortable="true">Fecha</th>
																		<th data-field="estatus" data-sortable="true">Estatus</th>
                                    <th class="disabled-sorting">Acción</th>

																	</thead>
                                  <?php
                                    $ejecutar = mysqli_query($conn, $consulta);
                                  while($fila=mysqli_fetch_array($ejecutar)){
                                      $id_b          = $fila['ID_SOL_FONDOS'];
                                      $nom         = $fila['FON_NOMBRE_EVENTO'];
                                      $fech  = $fila['FON_FECHA_INI'];
                                      $estatu        = $fila['FON_ESTATUS'];
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

<!-- fin contenido principal -->
<script>
function enviarmod(id){
  $.ajax({
      // la URL para la petición
      url : 'mod.php',

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
        $("#swal-input1").val(data.data.name);
        $("#swal-input2").val(data.data.req);
        $("#swal-input3").val(data.data.organizador);
        $("#swal-input4").val(data.data.ubicacion);
        $("#swal-input5").val(data.data.objetivo);
        $("#swal-input6").val(data.data.fecha_i);
        $("#swal-input7").val(data.data.fecha_f);
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
        url: 'borrar_fon.php',
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
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
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




  <script type="text/javascript">

  function alerta(id){


  swal({
 title: 'Editar solicitud',
 html:

 '<form action="actual_fondo" method="post" name="data">'+
 //'<label for="exampleInputEmail1">id</label>' +
 '<input name="swal-input0" type="hidden" id="swal-input0" class="form-control border-input">' +
 '<label for="exampleInputEmail1">Nombre del evento</label>' +
 '<input name="swal-input1" id="swal-input1" class="form-control border-input">' +
 '<label for="exampleInputEmail1">Requisito</label>' +
 '<input name="swal-input2" id="swal-input2" class="form-control border-input">' +
 '<label for="exampleInputEmail1">Organizador</label>' +
 '<input name="swal-input3" id="swal-input3" class="form-control border-input">' +
 '<label for="exampleInputEmail1">Ubicación</label>' +
 '<input name="swal-input4" id="swal-input4" class="form-control border-input">' +
 '<label for="exampleInputEmail1">Objetivo del evento</label>' +
 '<input name="swal-input5" id="swal-input5" class="form-control border-input">' +
 '<label for="exampleInputEmail1">Fecha inicio</label>' +
 '<input name="swal-input6" id="swal-input6" class="form-control border-input">' +
 '<label for="exampleInputEmail1">Fecha fin</label>' +
 '<input name="swal-input7" id="swal-input7" class="form-control border-input"></br>'+
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
<!--<script>
function borrar() {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        )},
            $.ajax({
                url: "borrar_fon.php",
                type: "POST",
                data: {id: 5},
                dataType: "html",
                success: function () {
                    swal("Done!","It was succesfully deleted!","success");
                }
            });
    }
</script>-->
<script>
/*
		var $table = $('#bootstrap-table');

	        function operateFormatter(value, row, index) {
	            return [

		                '<a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
		                    '<i class="ti-pencil-alt"></i>',
		                '</a>',
		                '<a rel="tooltip" title="Borrar" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
		                    '<i class="ti-close"></i>',
		                '</a>',
					'</div>',
	            ].join('');
	        }

                $().ready(function(){
                    window.operateEvents = {
                      'click .edit': function (e, value, row, index) {

  var info = JSON.stringify(row['id']);
//var eco = info["id"];
//alert('info: '+ info);


                       swal({
  title: 'Editar solicitud',
  html:

    '<label for="exampleInputEmail1">Nombre del evento</label>' +
    '<input id="swal-input1" class="form-control border-input" value="">' +
    '<label for="exampleInputEmail1">Requisito</label>' +
    '<input id="swal-input2" class="form-control border-input">' +
    '<label for="exampleInputEmail1">Organizador</label>' +
    '<input id="swal-input3" class="form-control border-input">' +
    '<label for="exampleInputEmail1">Ubicación</label>' +
    '<input id="swal-input4" class="form-control border-input">' +
    '<label for="exampleInputEmail1">Objetivo del evento</label>' +
    '<input id="swal-input5" class="form-control border-input">' +
    '<label for="exampleInputEmail1">Fecha inicio</label>' +
    '<input id="swal-input6" class="form-control border-input">' +
    '<label for="exampleInputEmail1">Fecha fin</label>' +
    '<input id="swal-input7" class="form-control border-input">',

    showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Actualizar solicitud',
  focusConfirm: false,
}).then(function (result) {
  swal(
    'Actualizado!',
    'La solicitud ha sido actualizada',
    'success'
  )
}).catch(swal.noop);



                      },
	                'click .remove': function (e, value, row, index) {
                      swal({
  title: 'Estás seguro?',
  text: "No podrás revertir la acción!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Borrar!'
}).then((result) => {
  if (result.value) {
    $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
    });
    swal(
      'Borrado!',
      'La solicitud ha sido eliminada',
      'success'
    )

  }
});

	                }
	            };

	            $table.bootstrapTable({
	                toolbar: ".toolbar",
	                clickToSelect: true,
	                showRefresh: true,

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
	                    refresh: 'fa fa-refresh',
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
*/
	</script>

</html>
