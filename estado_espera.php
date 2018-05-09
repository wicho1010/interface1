<!doctype html>
<html lang="en"><?php
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
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Schoolar</title>

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
                    <div class="photo">
                         <img src="<?php echo $var_foto ?>" />
                    </div>
                    <div class="info">
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
                                    <a href="aspirante.php">
                                        <span class="sidebar-mini">Cc</span>
                                        <span class="sidebar-normal">Configuración de cuenta</span>
                                    </a>
                                </li>
                             
                                <li>
                                    <a href="destroy.php">
                                        <span class="sidebar-mini">L</span>
                                        <span class="sidebar-normal">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                 <li class="active">
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda" ></i>
                            
                            <p>
                                Solicitar beca
                               <b class="caret"></b>
                            </p>
                            </li>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li class="">
                                    <a href="solicitar_beca.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Solicitar beca</span>
                                    </a>
                                </li>

                                 <li class="active">
                                    <a href="solicitar_beca.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Resultados beca </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                   <!-- <li>
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
                                        <span class="sidebar-normal">Becados green</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="forms/extended.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Acerca de Green</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li> -->














                   
               
                 
              
                    <li>
                      
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                      
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
                        <a class="navbar-brand" href="#wizard">Aspirantes</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <form class="navbar-form navbar-left navbar-search-form" role="search">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" value="" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p> <?php
                               echo "Bienvenido:".$_SESSION["nombre"];
                                     ?> </p>
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
                            <div class="card card-timeline card-plain">
                                <div class="card-header">
                                    <h4 class="card-title">Avisos para aspirantes </h4>
                                </div>
                                <div class="card-content">
                                    <ul class="timeline">
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge danger">
                                              <i class="ti-gallery"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                  <span class="label label-danger">Proceso finalizado</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>*Requisitos: Comprobar necesidad económica, tener promedio mayor a 9.0 en la preparatoria, asistir diariamente a clases de inglés, cumplir con servicio comunitario, no tener otros compromisos. </p>
                                                </div>
                                                  
                                                <h6  href="http://gspcabo.com/?page_id=16">
                                                    <i class="ti-time"></i>
                                                    GREEN SCHOLARSHIP PROGRAM 
                                                </h6>
                                          </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                                <i class="ti-check-box"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                  <span class="label label-success">Espere resultados </span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>he Green Scholarship recipients are awarded based on need, character, personal merit and commitment. Merit is demonstrated through leadership in school, civic and extracurricular activities, academic achievement, and motivation to serve and succeed.
Candidates must meet the following general requirements:

• Have financial need.
• Completed high school with a minimum average GPA of 9.0 out of 10.0.</p>
<img src="assets/img/beca.jpg" alt="..."/>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge info">
                                                <i class="ti-credit-card"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                  <span class="label label-info">Pongase en contacto con la directiva</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>GSP Sede Morelos Local 3 y 4. entre Revolución y CarranzaCol. Centro, CP.23450 ,BCS, México. Tel:+52 (624) 105 0985</p>
                                                    <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                                                    <center>
                                                    <img src="assets/img/beca2.jpg" alt="..."/>
                                                    </center>
                                                    <hr>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                          <i class="ti-settings"></i> <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                                          <li><a href="#action">Action</a></li>
                                                          <li><a href="#another">Another action</a></li>
                                                          <li><a href="#else">Something else here</a></li>
                                                          <li class="divider"></li>
                                                          <li><a href="#link">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                              <i class="ti-gallery"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                  <span class="label label-warning">Another One</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                                                    <center>
                                                    <img align="center" src="assets/img/beca3.jpg" style="center" alt="..."/>
                                                     </center>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
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
                                <a href="http://www.google.com">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Schoolar</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown">
            <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title">Sidebar Background</li>
                <li class="adjustments-line text-center">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <span class="badge filter badge-brown active" data-color="brown"></span>
                        <span class="badge filter badge-white" data-color="white"></span>
                    </a>
                </li>
    
                <li class="header-title">Sidebar Active Color</li>
                <li class="adjustments-line text-center">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                            <span class="badge filter badge-primary" data-color="primary"></span>
                            <span class="badge filter badge-info" data-color="info"></span>
                            <span class="badge filter badge-success" data-color="success"></span>
                            <span class="badge filter badge-warning" data-color="warning"></span>
                            <span class="badge filter badge-danger active" data-color="danger"></span>
                    </a>
                </li>
    
                <li class="button-container">
                    <div class="">
                        <a href="http://www.creative-tim.com/product/paper-dashboard?ref=pdp-free-demo" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                        <a href="http://www.creative-tim.com/product/paper-dashboard-pro" target="_blank" class="btn btn-danger btn-block btn-fill">Buy for $39</a>
                    </div>
                </li>
    
                <li class="header-title">Thank you for sharing!</li>
    
                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> </button>
                    <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"></i></button>
                </li>
    
            </ul>
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
        $(document).ready(function(){
            demo.initWizard();
        });
    </script>

</html>
