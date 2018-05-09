<?php
     session_start();
     include 'fuctions.php';
   verificar_sesion();

?>

<?php
include 'conexion.php';
echo "Id_foranea:".$var_id_foranea6 = $_SESSION['clave'];
$sql8 = "SELECT ID_ASPIRANTES FROM aspirantes";

//$sql7 ="INSERT INTO aspirantes (ASP_STATUS,ASP_ID_USUARIO) VALUES ('1','$var_id_foranea6')";
 
//if ($conn->query($sql7) === TRUE) {
$resultado = $conn->query($sql8);
if ($resultado->num_rows > 0) {
	$var_id_aspirante ="";
         while ($row= $resultado->fetch_assoc()) {
         	$var_id_aspirante     =     $row['ID_ASPIRANTES'];
          
}
}
//} 
//Tabla 1 datos familiares
echo "Parentesco:".$var_parentesco = $_POST['parentesco'];
echo "<br>";
echo "Apellido_p:".$var_apellido_p = $_POST['apellidop'];
echo "<br>";
echo "Apellido_m:".$var_apellido_m = $_POST['apellidom'];
echo "<br>";
echo "Nombre:".$var_nombre = $_POST['nombre'];
echo "<br>";
echo "Ocupacon:".$var_ocupacion = $_POST['ocupacion'];
echo "<br>";
echo "Lugar de trabajo:".$var_lugar = $_POST['lugar_trabajo'];
echo "<br>";
echo "Ingreso fomral:".$var_formal = $_POST['ingreso_formal'];
echo "<br>";
echo "Ingreso informal:".$var_informal = $_POST['ingreso_informal'];
echo "<br>";
echo "Id_foranea:".$var_id_foranea1 = $_SESSION['clave'];
echo "<br>";
//PArte de madre
echo "Parentesco2:".$var_parentesco2 = $_POST['parentesco2'];
echo "<br>";
echo "Apellido_p2:".$var_apellido_p2 = $_POST['apellidop2'];
echo "<br>";
echo "Apellido_m2:".$var_apellido_m2 = $_POST['apellidom2'];
echo "<br>";
echo "Nombre2:".$var_nombre2 = $_POST['nombre2'];
echo "<br>";
echo "Ocupacon2:".$var_ocupacion2 = $_POST['ocupacion2'];
echo "<br>";
echo "Lugar de trabajo2:".$var_lugar2 = $_POST['lugar_trabajo2'];
echo "<br>";
echo "Ingreso fomral2:".$var_formal2 = $_POST['ingreso_formal2'];
echo "<br>";
echo "Ingreso informal2:".$var_informal2 = $_POST['ingreso_informal2'];
echo "<br>";
echo "Id_foranea2:".$var_id_foranea2 = $_SESSION['clave'];
echo "<br>";

//Tabla 2 datos familiares

echo "Residencia:".$tiempo_tiempo_residencia = $_POST['tiempo_residencia'];
echo "<br>";
echo "Casa propia:".$var_opcasa = $_POST['opcasa'];
echo "<br>";
echo "Materiales casa:".$var_materiales = $_POST['materiales'];
echo "<br>";
echo "Tiene auto:".$opauto = $_POST['opauto'];
echo "<br>";
echo "Cuantas personas forman:".$var_cantidad_familia = $_POST['cantidad_familia'];
echo "<br>";
echo "Cuantas personas viven:".$var_viven_casa = $_POST['viven_casa'];
echo "<br>";
echo "Tiene cuenta bancaria:".$var_opbanco = $_POST['opbanco'];
echo "<br>";
echo "Subir estado:".$var_archivo = $_FILES['archivo']['tmp_name']; //Aqui esta el archivo file
$destino = "assets/img". $_FILES['archivo']['name'];
move_uploaded_file($var_archivo,$destino);
echo "<br>";
echo "Trabajas:".$var_optrabajas = $_POST['optrabajas'];
echo "<br>";
echo "Tipo de beca:".$var_opbeca = $_POST['opbeca'];
echo "<br>";
echo "Tienes internet:".$var_opinternet = $_POST['opinternet'];
echo "<br>";
echo "Hablas ingles:".$var_opingles = $_POST['opingles'];
echo "<br>";
echo "Cuanto porcentaje:".$var_porcentaje_ingles = $_POST['porcentaje_ingles'];
echo "<br>";
echo "Id_foranea:".$var_id_foranea2 = $_SESSION['clave'];
echo "<br>";
//Tabla 3 datos familiares
echo "Que estas cursando:".$var_cursando= $_POST['cursando'];
echo "<br>";
echo "Nombre de la escuela:".$var_nombre_escuela = $_POST['nombre_escuela'];
echo "<br>";
echo "Direccion de la escuela:".$var_direccion_escuela = $_POST['direccion_escuela'];
echo "<br>";
echo "Años cursados :".$var_años_cursados = $_POST['años_cursados'];
echo "<br>";
echo "Promedio:".$var_promedio = $_POST['promedio'];
echo "<br>";
echo "Titulo:".$var_titulo = $_POST['titulo'];
echo "<br>";
echo "Id_foranea:".$var_id_foranea3 = $_SESSION['clave'];
echo "<br>";


//Tabla 4 datos familiares
echo "Mes año inicio:".$var_año_inicio= $_POST['año_inicio'];
echo "<br>";
echo "Mes año final:".$var_año_final = $_POST['año_final'];
echo "<br>";
echo "Total de horas::".$var_total_horas = $_POST['total_horas'];
echo "<br>";
echo "Institución:".$var_institucion = $_POST['institucion'];
echo "<br>";
echo "Descripción de la actividades:".$var_descripcion = $_POST['descripcion'];
echo "<br>";
echo "Id_foranea:".$var_id_foranea4 = $_SESSION['clave'];
echo "<br>";
//Tabla 5 datos familiares
echo "Institución:".$var_institucion= $_POST['institucion'];
echo "<br>";
echo "descripción:".$var_descripcion = $_POST['descripcion'];
echo "<br>";
echo "Tipo de reconocimiento:".$var_reconocimiento = $_POST['tipo_reconocimiento'];
echo "<br>";
echo "Id_foranea:".$var_id_foranea5 = $_SESSION['clave'];
echo "<br>";
//Tabla 6 datos familiares

echo "Carrera que te gustaria estudiar:".$var_carrera_gusta= $_POST['carrera_gusta'];
echo "<br>";
echo "Universidad que te gustaria estudiar:".$var_universidad_gusta = $_POST['universidad_gusta'];
echo "<br>";
echo "Tiempo completo:".$var_optiempo = $_POST['optiempo'];
echo "<br>";
//echo "Explicar razones:".$var_razones = $_POST['razones'];
echo "<br>";
echo "Tienes contacto con la universidad?:".$var_opcontacto = $_POST['opcontacto'];
echo "<br>";
echo "Has estado en contacto con la universidad:".$var_opcontacto_uni = $_POST['opcontacto'];
echo "<br>";
echo "Archivo2:".$var_archivo2 = $_FILES['archivo2']['tmp_name'];
$destino = "assets/img". $_FILES['archivo2']['name'];
move_uploaded_file($var_archivo2,$destino);
echo "<br>";
echo "Id_foranea:".$var_id_foranea6 = $_SESSION['clave'];
echo "<br>";



$sql = "INSERT INTO datos_familiares (FAM_PARENTESCO, 
	FAM_APELL_PATERNO,
	FAM_APELLIDO_MATERNO,
	FAM_NOMBRE,
	FAM_OCUPACION,
	FAM_LUGAR_TRABAJO,
	FAM_ING_FORMAL,
	FAM_ING_INFORMAL,
	FAM_ID_ASPIRANTES
)

VALUES ('$var_parentesco' ,
 '$var_apellido_p' , 
 '$var_apellido_m' , 
 '$var_nombre' ,
 '$var_ocupacion' ,
 '$var_lugar',
 '$var_formal',
 '$var_informal',
 '$var_id_aspirante ')";
//Insecion 1 madre
$sql1 = "INSERT INTO datos_familiares (FAM_PARENTESCO, 
	FAM_APELL_PATERNO,
	FAM_APELLIDO_MATERNO,
	FAM_NOMBRE,
	FAM_OCUPACION,
	FAM_LUGAR_TRABAJO,
	FAM_ING_FORMAL,
	FAM_ING_INFORMAL,
	FAM_ID_ASPIRANTES
)

VALUES ('$var_parentesco2' ,
 '$var_apellido_p2' , 
 '$var_apellido_m2' , 
 '$var_nombre2' ,
 '$var_ocupacion2' ,
 '$var_lugar2',
 '$var_formal2',
 '$var_informal2',
 '$var_id_aspirante')";

//Insercion 2

$sql2 = "INSERT INTO datos_generales (GEN_TIEMPO_RESI, 
	GEN_CASA_PROP,
	GEN_DESCRP_CASA,
	GEN_AUTO,
	GEN_PERSONAS_FAMILIA,
	GEN_PERSONAS_CASA,
	GEN_BANCARIAS,
	GEN_ESTADO_CUENTA,
	GEN_TRABAJO,
	GEN_TIPO_BECA,
	GEN_INTERNET,
	GEN_HABLAR_ING,
	GEN_PORCENTAJE,
	GEN_ID_ASPIRANTES
)

VALUES ('$tiempo_tiempo_residencia' ,
 '$var_opcasa' , 
 '$var_materiales' , 
 '$opauto' ,
 '$var_cantidad_familia' ,
 '$var_viven_casa',
 '$var_opbanco',
 '$var_archivo',
 '$var_optrabajas',
 '$var_opbeca',
 '$var_opinternet',
 '$var_opingles',
 '$var_porcentaje_ingles',
 '$var_id_aspirante')";

//Insercion 3
$sql3 = "INSERT INTO escolaridad (ESC_CURSANDO_ESC,ESC_NOMBRE_ESC, 
	ESC_DOMICILIO_ESC,
	ESC_YEARS_CURSADOS,
	ESC_PROMEDIO,
	ESC_TITULO,
	ESC_ID_ASPIRANTES)

VALUES ('$var_cursando',
 '$var_nombre_escuela' ,
 '$var_direccion_escuela' , 
 '$var_años_cursados' , 
 '$var_promedio' ,
 '$var_titulo' ,
 '$var_id_aspirante'
)";
//Insercion 4

$sql4 = "INSERT INTO act_extra (EXT_INSTITUCION,
	EXT_DESCRIP_ACTV, 
	EXT_TOTAL_HORAS,
	EXT_FECHA_INI,
	EXT_FECHA_FINAL,
	EXT_ID_ASPIRANTES)

VALUES ('$var_institucion' , 
 '$var_descripcion' ,
 '$var_total_horas' , 
 '$var_año_inicio',
 '$var_año_final' ,

 '$var_id_aspirante'
)";
//Insercion 5
$sql5 = "INSERT INTO reconocimientos (REC_INSTITUCION,
	REC_DESCRIPCION, 

	REC_TIPO_RECONOCIMIENTO,

	REC_ID_ASPIRANTES)

VALUES ('$var_institucion' , 
 '$var_descripcion' ,
 '$var_reconocimiento', 
 '$var_id_aspirante'
)";

//Insercion 6
$sql6 = "INSERT INTO pro_estudio (PROP_CARRERA_CURSAR,
	PROP_UNIVERSIDAD, 
	PROP_TIEMPO,
	PROP_DESCRIPCION,
	PROP_CONTAC_UNI,
	PROP_ID_ASPIRANTES)

VALUES ('$var_carrera_gusta' , 
 '$var_universidad_gusta' ,
 '$var_optiempo' , 
 '$var_archivo2',
 '$var_opcontacto',
 '$var_id_aspirante'
)";

$nuevo_usuario="SELECT ASP_ID_USUARIO FROM aspirantes WHERE ASP_ID_USUARIO='$var_id_foranea6'"; 
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($nuevo_usuario);
if ($resultado->num_rows > 0){  
 
    echo "<script>alert('*ERROR* Ya has registrado la beca!')</script>";
    echo "<script>window.open('solicitar_beca.php','_self')</script>";

} 
// ------------ Si no esta registrado el usuario continua el script 
else 
{ 

//if ($var_id_foranea6==$var_id_aspirante) {
//	echo "Ya has registrado la beca";
	//echo "<script>alert('Ya has registrado la beca!')</script>";
    //echo "<script>window.open('solicitar_beca.php','_self')</script>";
//} else {
// status 1=pendiente 2=aceptado 3=denega-do
     
$sql8 ="INSERT INTO aspirantes (ASP_STATUS,ASP_ID_USUARIO) VALUES ('Pendiente','$var_id_foranea6')";

 
if ($conn->query($sql) === TRUE) {
    echo "El registro ha sido agregado correctamente";


	//header("Location: solicitar_beca.php");
	//if ($conn->query($sql2) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
    if ($conn->query($sql1) === TRUE) {
    echo "El registro ha sido agregado correctamente";
	//header("Location: solicitar_beca.php");
	//if ($conn->query($sql2) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
	if ($conn->query($sql2) === TRUE) {
    echo "El registro ha sido agregado correctamente";
	//header("Location: solicitar_beca.php");
	//if ($conn->query($sql2) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
    if ($conn->query($sql3) === TRUE) {
    echo "El registro ha sido agregado correctamente";
//header("Location: solicitar_beca.php");
	//if ($conn->query($sql2) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
     if ($conn->query($sql4) === TRUE) {
    echo "El registro ha sido agregado correctamente";
//header("Location: solicitar_beca.php");
	//if ($conn->query($sql2) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
    if ($conn->query($sql5) === TRUE) {
    	 echo "El registro ha sido agregado correctamente";
    	//header("Location: solicitar_beca.php");
	//if ($conn->query($sql2) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
    if ($conn->query($sql6) === TRUE) {
    echo "El registro ha sido agregado correctamente";
		//header("Location: solicitar_beca.php");
	//if ($conn->query($sql2) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
	//if ($conn->query($sql7) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
        if ($conn->query($sql8) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
		//header("Location: solicitar_beca.php");
	//if ($conn->query($sql2) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
	//if ($conn->query($sql7) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
   echo "<script>alert('*EXITO* Se ha registrado la beca correctamente!')</script>";
  echo "<script>window.open('estado_espera.php','_self')</script>";
	//header("Location: solicitar_beca.php");


} else {
    echo "Error: " . $sql8 . "<br>" . $conn->error;
}

} else {
	echo "<script>alert('Se inserto un dato erroneo o un campo vacio en 'Propuesta de estudios'!')</script>";
     echo "<script>window.open('solicitar_beca.php','_self')</script>";
    //echo "Error: " . $sql6 . "<br>" . $conn->error;
}

} else {
	echo "<script>alert('Se inserto un dato erroneo o un campo vacio en 'Reconocimientos'!')</script>";
     echo "<script>window.open('solicitar_beca.php','_self')</script>";
    //echo "Error: " . $sql5 . "<br>" . $conn->error;
}

} else {
	echo "<script>alert('Se inserto un dato erroneo o un campo vacio en 'Actividades extra'!')</script>";
     echo "<script>window.open('solicitar_beca.php','_self')</script>";
    //echo "Error: " . $sql4 . "<br>" . $conn->error;
}

} else {
	echo "<script>alert('Se inserto un dato erroneo o un campo vacio en 'Esolaridad'!')</script>";
     echo "<script>window.open('solicitar_beca.php','_self')</script>";
    //echo "Error: " . $sql3 . "<br>" . $conn->error;
}

} else {
	echo "<script>alert('Se inserto un dato erroneo o un campo vacio en 'Datos generales'!')</script>";
     echo "<script>window.open('solicitar_beca.php','_self')</script>";
    //echo "Error: " . $sql2 . "<br>" . $conn->error;
}

} else {
	echo "<script>alert('Se inserto un dato erroneo o un campo vacio en Familiares!')</script>";
     echo "<script>window.open('solicitar_beca.php','_self')</script>";
    //echo "Error: " . $sql1 . "<br>" . $conn->error;
}

} else {
	echo "<script>alert('Se inserto un dato erroneo o un campo vacio en Familiares!')</script>";
     echo "<script>window.open('solicitar_beca.php','_self')</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();


?>


