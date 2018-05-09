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
<script type="text/javascript">
      $(document).ready(function(){
    habilitar(); 
});
</script>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Interface_solicitud_becas</title>

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
    
    <script type="text/javascript">
 


    function habilitar(){
   
       $("input[id='radio_si']").bind('change', function(){
            if($(this).is(":checked") ==true){
              $("input[id='cuenta']").prop('disabled',false);
            }
       });
        $("input[id='radio_no']").bind('change', function(){
            if($(this).is(":checked") ==true){
                $("input[id='cuenta']").prop('disabled',true);
            }
       });

    }
     
    </script>

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
                                <li class="active">
                                    <a href="solicitar_beca.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Solicitar beca</span>
                                    </a>
                                </li>

                                 <li>
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
                        <div class="col-md-10 col-md-offset-1">
                            <div class="card card-wizard" id="wizardCard">
                         <form id="wizardForm" action="registrar_beca.php" method="post" enctype="multipart/form-data">  <!-- EL PRIMER FORM -->
                                    <div class="card-header text-center">
                                        <h4 class="card-title">GREEN SCHOLARSHIP PROGRAM </h4>
                                       
                                        <p class="category">PROGRAMA DE BECAS GREEN A.C.</p>
                                    </div>
                                    <div class="card-content">
                                        <ul class="nav">
                                            <li><a href="#tab1" data-toggle="tab">Datos Familiares</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Datos generales</a></li>
                                            <li><a href="#tab3" data-toggle="tab">Historial Academico </a></li>
                                            <li><a href="#tab4" data-toggle="tab">Actividades Extra</a></li> 
                                            <li><a href="#tab5" data-toggle="tab">Reconocimientos Escolares</a></li>
                                            <li><a href="#tab6" data-toggle="tab">Propuesta Estudio</a></li>
                                            <li><a href="#tab7" data-toggle="tab">Guardar Formula</a></li>
                                        </ul>

                                        
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
                                                <h5 class="text-center">Informacón del Padre.</h5>
                                                 <h6 class="text-center">Llenar todos los campos, si no aplica en tu situación, colocar NA.</h6></br>
                                                <div class="row">
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                              <label class="control-label">
                                                                Parentesco Familiar:<star>*</star>
                                                            </label>
                                                              <select name="parentesco" class="form-control">
                                                               <!-- <option selected="" disabled="">-Información de -</option>
                                                                <option value="Padre">Padre</option>-->
                                                                <option value="Padre">Padre</option>
                                                                
                                                          
                                                            </select>



                                                          
                                                           <!-- <input type="hidden" value="1" name="opcion">-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Apellido P:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="apellidop"
                                                                   required="true"
                                                                   placeholder="ex: hernandez"
                                                                  onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                      <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Apellido M:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="apellidom"
                                                                   required="true"
                                                                   placeholder="ex: Andrew"
                                                                  onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                      <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Nombre:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="nombre"
                                                                   required="true"
                                                                   placeholder="ex: Andrew"
                                                                   onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                      <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Ocupación:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="ocupacion"
                                                                   required="true"
                                                                   placeholder="ex: mecanico"
                                                                   onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>

                                                      <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Lugar de trabajo:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="lugar_trabajo"
                                                                   required="true"
                                                                   placeholder="ex: fix car"
                                                                   onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>

                                                             <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Ingreso formal (por mes) En caso de no tener ingresos poner "0" <star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                    min="0"
                                                                   name="ingreso_formal"
                                                                   required="true"
                                                                   min="0"

                                                                   placeholder="ex: 1000"
                                                            />
                                                        </div>
                                                    </div>

                                                      <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Ingreso informal (por mes) En caso de no tener ingresos poner "0" <star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                   name="ingreso_informal"
                                                                   required="true"
                                                                    min="0"
                                                                   placeholder="ex: 2000"
                                                            />
                                                        </div>
                                                    </div>
                                               <h5 class="text-center">Informacón de la madre.</h5>


                                               <!--INICIO FORM2--> <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                              <label class="control-label">
                                                                Parentesco Familiar:<star>*</star>
                                                            </label>
                                                              <select name="parentesco2" class="form-control">
                                                                
                                                             
                                                                <option value="Madre">Madre</option>
                                                                
                                                          
                                                            </select>



                                                          
                                                           <!-- <input type="hidden" value="1" name="opcion">-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Apellido P:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="apellidop2"
                                                                   required="true"
                                                                   placeholder="ex: hernandez"
                                                                   onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                      <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Apellido M:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="apellidom2"
                                                                   required="true"
                                                                   placeholder="ex: Andrew"
                                                                  onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                      <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Nombre:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="nombre2"
                                                                   required="true"
                                                                   placeholder="ex: Andrew"
                                                                  onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                      <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Ocupación:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="ocupacion2"
                                                                   required="true"
                                                                   placeholder="ex: mecanico"
                                                                   onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>

                                                      <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Lugar de trabajo:<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="lugar_trabajo2"
                                                                   required="true"
                                                                   placeholder="ex: fix car"
                                                                   onkeypress="return validar(event)"
                                                            />
                                                        </div>
                                                    </div>

                                                             <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Ingreso formal (por mes) En caso de no tener ingresos poner "0" <star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                   name="ingreso_formal2"
                                                                    min="0"
                                                                   required="true"
                                                                   placeholder="ex: 1000"
                                                            />
                                                        </div>
                                                    </div>

                                                      <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Ingreso informal (por mes) En caso de no tener ingresos poner "0" <star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                   name="ingreso_informal2"
                                                                    min="0"
                                                                   required="true"
                                                                   placeholder="ex: 2000"
                                                            />
                                                        </div>
                                                    </div> <!--Fin de formuario2-->
                                                     
                                                </div>
                               
                                              <!--  <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Email<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="email"
                                                                   email="true"
                                                                   placeholder="ex: hello@creative-tim.com"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>-->
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <h5 class="text-center">Datos generales.</h5>
                                                <h6 class="text-center">Llenar todos los campos, si no aplica en tu situación, colocar NA.</h6></br>
                                            <div class="row">
                                
                                              <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">Tiempo de residencia<star>*</star></label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="tiempo_residencia"
                                                                   onkeypress="return validar2(event)"
                                                                   placeholder="ex: 10 años"
                                                            />
                                            </div>
                                            </div> <!--dIV DEL COLUMNA -->
                                            <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">Tiene casa propia?<star>*</star></label></br>
                                                          <input class="" type="radio" name="opcasa" value="Si"  >Si
                                                          <input class="" type="radio" name="opcasa" value="No" > No
                                                        </div>
                                                    </div><!--dIV DEL COLUMNA -->
                                                   

                                            </div> <!-- ROW -->

                                             <div class="row">
                                              <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                       <label class="control-label">
                                                                Materiales de tu casa<star>*</star>
                                                            </label>
                                                            <!--     IMPORTANT! - the "bootstrap select picker" is not compatible with jquery.validation.js, that's why we use the "default select" inside this wizard. We will try to contact the guys who are responsibble for the "bootstrap select picker" to find a solution. Thank you for your patience.
                                                             -->
                                                            <select name="materiales" class="form-control">
                                                                <option selected="" disabled="">-Materiales de tu casa -</option>
                                                                <option value="Lamina">Lamina</option>
                                                                <option value="Carton">Carton</option>
                                                                <option value="Concreto">Concreto</option>
                                                                <option value="Madera">Madera</option>
                                                                <option value="Tabique">Tabique</option>
                                                               
                                                          
                                                            </select>
                                            </div>
                                            </div> <!--dIV DEL COLUMNA -->

                                               <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Tiene auto<star>*</star>
                                                            </label></br>
                                                          <input type="radio" name="opauto" value="Si"  >Si
                                                          <input type="radio" name="opauto" value="No" > No
                                                        </div>
                                                    </div><!--dIV DEL COLUMNA -->
                                             </div> <!-- ROW -->

                                              <div class="row">
                                              <div class="col-md-5 col-md-offset-1">
                                                     <div class="form-group">
                                                            <label class="control-label">
                                                                Cuantas personas viven en tu familia<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                   name="cantidad_familia"
                                                                    min="0"
                                                                   required="true"
                                                                   placeholder="cantidad"
                                                            />
                                                        </div>
                                            </div> <!--dIV DEL COLUMNA -->

                                               <div class="col-md-5">
                                                         <div class="form-group">
                                                            <label class="control-label">
                                                                Cuantas personas viven en tu casa<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                   name="viven_casa"
                                                                    min="0"
                                                                   required="true"
                                                                   placeholder="ex: 3"
                                                            />
                                                        </div>
                                                    </div><!--dIV DEL COLUMNA -->
                                             </div> <!-- ROW -->

                                              <div class="row">
                                              <div class="col-md-5 col-md-offset-1">
                                                      <div class="form-group">
                                                            <label class="control-label">
                                                                Tienen cuenta bancaria?<star>*</star>
                                                            </label></br>
                                                           
                                                           <input type="radio" name="opbanco" value="Si" id="radio_si" onkeyUp="habliitar()">Si
                                                           <input type="radio" name="opbanco" value="No" id="radio_no" onkeyUp="habliitar()"> No
                                                           
                                                        </div>
                                            </div> <!--dIV DEL COLUMNA -->

                                               <div class="col-md-5">
                                                         <div class="form-group">
                                                            <label class="control-label">
                                                                Subir estado de cuenta<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="file"
                                                                   name="archivo"
                                                                   id="cuenta"
                                                                   accept="application/pdf"
                                                                   required="true"
                                                                   placeholder="ex: estado"
                                                                 
                                                            />
                                                        </div>
                                                    </div><!--dIV DEL COLUMNA -->
                                             </div> <!-- ROW -->

                                             <div class="row">
                                              <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Trabajas<star>*</star>
                                                            </label>
                                                          <input type="radio" name="optrabajas" value="Si" >Si
                                                          <input type="radio" name="optrabajas" value="No" > No</br>
                                                        </div>
                                            </div> <!--dIV DEL COLUMNA -->

                                               <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Que tipo de beca estas solicitando?<star>*</star>
                                                            </label>
                                                          <input type="radio" name="opbeca" value="completa" >Completa
                                                          <input type="radio" name="opbeca" value="parcial" >Parcial</br>
                                                        </div>
                                                    </div><!--dIV DEL COLUMNA -->
                                             </div> <!-- ROW -->

                                              <div class="row">
                                              <div class="col-md-5 col-md-offset-1">
                                                 <div class="form-group">
                                                            <label class="control-label">
                                                                Tienes internet?<star>*</star>
                                                            </label>
                                                          <input type="radio" name="opinternet" value="Si" >Si
                                                          <input type="radio" name="opinternet" value="No" > No</br>
                                                        </div>
                                            </div> <!--dIV DEL COLUMNA -->

                                               <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                hablas ingles?<star>*</star>
                                                            </label>
                                                            <input type="radio" name="opingles" value="Si"  >Si
                                                            <input type="radio" name="opingles" value="No" > No</br>
                                                        </div>
                                                    </div><!--dIV DEL COLUMNA -->
                                             </div> <!-- ROW -->
                                            <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group">
                                                              <label class="control-label">Porcentaje de ingles<star>*</star></label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                    min="0"
                                                                   name="porcentaje_ingles"
                                                                   
                                                                   placeholder="ex: 80"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!--FIN DE DIV DE LA TAB2-->


                                             




                                               
                                            <div class="tab-pane" id="tab3">
                                                <h5 class="text-center">Historial Academico</h5>
                                                <h6 class="text-center">Llenar todos los campos, si no aplica en tu situación, colocar NA.</h6></br>
                                                <div class="row">
                                                         <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                           
                                                          <label class="control-label">
                                                                Que estas cursando<star>*</star>
                                                            </label>
                                                            <!--     IMPORTANT! - the "bootstrap select picker" is not compatible with jquery.validation.js, that's why we use the "default select" inside this wizard. We will try to contact the guys who are responsibble for the "bootstrap select picker" to find a solution. Thank you for your patience.
                                                             -->
                                                            <select name="cursando" class="form-control" required="true">
                                                                <option selected="" disabled="">-Escuela -</option>
                                                                <option value="Universidad">Univiersiad</option>
                                                                <option value="Preparatoria">Preparatoria</option>
                                                                <option value="Secundaria">Secundaria</option>
                                                               
                                                          
                                                            </select>
                                                        </div>
                                                    </div>
                                                   <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Nombre de la escuela?:
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="nombre_escuela"
                                                                   required="true"
                                                                   placeholder="ex:ites"
                                                            
                                                                   onkeypress="return validar2(event)"
                                                            />
                                                        </div>
                                                    </div>

                                                     <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Dirección de la escuela:
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="direccion_escuela"
                                                                   required="true"
                                                                   placeholder="ex: guaymitas"
                                                                   onkeypress="return validar2(event)"
                                                            />
                                                        </div>
                                                    </div>

                                                       <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Años cursados:
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                   name="años_cursados"
                                                                    min="0"
                                                                   required="true"
                                                                   placeholder="ex: 3"
                                                            />
                                                        </div>
                                                    </div>

                                                     <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Promedio
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                   name="promedio"
                                                                    min="0"
                                                                   required="true"
                                                                   placeholder="ex: 90"
                                                            />
                                                        </div>
                                                    </div>
                                                    
                                                       <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Titulo:
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="titulo"
                                                                   required="true"
                                                                   placeholder="ex: certificado"
                                                                   onkeypress="return validar2(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                               




                                            </div>




                                             <div class="tab-pane" id="tab4">
                                                <h5 class="text-center">Actividades extra</h5>
                                                <h6 class="text-center">Llenar todos los campos, si no aplica en tu situación, colocar NA.</h6></br>
                                                <div class="row">
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Año de inicio
                                                            </label>
                                                            <input class="form-control"
                                                                   type="date"
                                                                   name="año_inicio"
                                                                   placeholder="ex:año"
                                                                   min="1990-01-01" max="<?php echo date("Y-m-d");?>" 
                                                            />
                                                           <!-- <input type="hidden" value="1" name="opcion">-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Año final
                                                            </label>
                                                            <input class="form-control"
                                                                   type="date"
                                                                   name="año_final"
                                                                   required="true"
                                                                   placeholder="ex: año"
                                                                   min="1990-01-01" max="<?php echo date("Y-m-d");?>" 
                                                            />
                                                        </div>
                                                    </div>
                                                     <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                               Total de horas
                                                            </label>
                                                            <input class="form-control"
                                                                   type="number"
                                                                    min="0"
                                                                   name="total_horas"
                                                                   placeholder="ex: 3"
                                                            />
                                                           <!-- <input type="hidden" value="1" name="opcion">-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Institución:
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="institucion"
                                                                   required="true"
                                                                   placeholder="ex: ites"
                                                                   onkeypress="return validar2(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Descripción de la actividades<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="descripcion"
                                                                   onkeypress="return validar2(event)"
                                                                   placeholder="ex: descripcion"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                             <div class="tab-pane" id="tab5">
                                                <h5 class="text-center">Reconocimientos</h5>
                                                <h6 class="text-center">Llenar todos los campos, si no aplica en tu situación, colocar NA.</h6></br>
                                                <div class="row">
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Institución
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="institucion"
                                                                   onkeypress="return validar2(event)"
                                                                   placeholder="ex: ites"
                                                            />
                                                           <!-- <input type="hidden" value="1" name="opcion">-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Descripción
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="descripcion"
                                                                   required="true"
                                                                   onkeypress="return validar2(event)"
                                                                   placeholder="ex: descripcion"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Tipo de reconocimiento<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="tipo_reconocimiento"
                                                                   onkeypress="return validar2(event)"
                                                               
                                                                   placeholder="ex: tipo de reconocimiento"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                             <div class="tab-pane" id="tab6">
                                                <h5 class="text-center">Propuesta de estudios</h5>
                                                <h6 class="text-center">Llenar todos los campos, si no aplica en tu situación, colocar NA.</h6></br>
                                                <div class="row">
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Carrera que te gustaria estudiar <star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="carrera_gusta"
                                                                      required="true"
                                                                   placeholder="ex: ing.sistemas"
                                                                   onkeypress="return validar(event)"
                                                            />
                                                           <!-- <input type="hidden" value="1" name="opcion">-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Universidad que te gustaria estudiar?<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="universidad_gusta"
                                                                   required="true"
                                                                   placeholder="ex: ites"
                                                                   onkeypress="return validar2(event)"
                                                            />
                                                        </div>
                                                    </div>
                                                      <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Tiempo completo:<star>*</star>
                                                            </label>
                                                       <input type="radio" name="optiempo" value="Si" >Si
                                                       <input type="radio" name="optiempo" value="No" > No</br>
                                                           <!-- <input type="hidden" value="1" name="opcion">-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                         Tienes contacto con la universidad?<star>*</star>
                                                            </label>
                                                         <input type="radio" name="opcontacto"  value="Si" >Si
                                                         <input type="radio" name="opcontacto" value="No" > No</br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                           Escribe un ensayo (dos páginas solamente) en donde hablas de ti, tus aspiraciones profesionales, que planeas estudiar y 
la razón por la que quieres tener una carrera universitaria.<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="file"
                                                                   name="archivo2"
                                                                   accept="application/pdf"
                                                                   placeholder="ex: descripcion"
                                                                   enctype="multipart/form-data"
                                                                   required="true"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tab7">
                                                <h2 class="text-center text-space">Felicidades has completado el cuestionario! <br><small>                                                  Click on "<b>Finish</b>" to join our community</small></h2>
                                            </div>






                                        </div> <!--FIN DE CONTENT -->
                                    </div>
                                    
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-default btn-fill btn-wd btn-back pull-left">Back</button>
                                        <button type="button" class="btn btn-info btn-fill btn-wd btn-next pull-right">Next</button>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd btn-finish pull-right">Finish</button>
                                        <div class="clearfix"></div>
                                    </div>
                                    </form> <!--Aqui termina el form del php para enviar -->
                                
                             


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
            habilitar();
        });
    </script>

</html>
