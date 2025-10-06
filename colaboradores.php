<?php
error_reporting(E_ALL);ini_set("display_errors", 1);
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
isset($_SESSION["logeado"])?'':header("location: index.php?salir=1");

require "includes/error_reporting.php";

$idget = isset($_GET['id'])?$_GET['id']:'no';
if($idget!='no'){
$_SESSION['id'] = $idget;
}ELSE{
$_SESSION['id'] = $_SESSION['idem'];
}

//if($_SESSION['NIVEL_ACCESO_CRM']=='MAXIMO' and $_SESSION['STATUS_CARGA_INFORMACION']=='COLABORADOR'){}else{exit;}

		  require "colaboradores/controlador.php";
	require "colaboradores/variables.php";
?><!doctype html>
<html lang="en" class="light-theme">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- loader-->
	  <link href="assets/css/pace.min.css" rel="stylesheet" />
	  <script src="assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />
        <style type="text/css">
            #content {

            }
            #close {

            }
            .content2 {
                margin: 0px auto;
                min-height: 100px;
                box-shadow: 0 2px 5px #666666;
                padding: 10px;
            }
			
	#drop_file_zone {
	    background-color: #EEE;
	    border: #999 1px solid;
	    padding: 8px;
	}			

	#nono {
	  display: none;
	}
	
input[type=text] {
    text-transform: uppercase;
}


.fixed2{
position:fixed;
top:65px;
background-color:#fff;
margin-left:500px;
box-shadow:0 0 10px #222;
-webkit-box-shadow:0 0 10px #222;
-moz-box-shadow:0 0 10px #222;
z-index:1;
}

#ACTUALIZADO{
color:green;
    text-transform: uppercase;
	font-size:25px;
	font-weight: bold;
}
  #ERROR{
color:red;
    text-transform: uppercase;
	font-size:25px;
	font-weight: bold;
}

		td ,tr, table, textarea {
    text-transform: uppercase;
}

        </style>
    <title>DATOS DE COLABORADORES</title>
  </head>
  <body>
    

 <!--start wrapper-->
    <div class="wrapper">
       <!--start sidebar -->
	    <aside class="sidebar-wrapper" data-simplebar="true">
      <?php require "includes/menuLateral.php"; /*php menu lateral*/ ?>
		</aside>
     <!--end sidebar -->

        <!--start top header-->
          <header class="top-header">
		  <?php 
		  
		  require "colaboradores/notificaciones.php"; /*php notificaciones*/ ?>
          </header>
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <!--start breadcrumb-->
          <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		  <?php 	

	require "colaboradores/mapeo1.php"; /*php mapa*/ ?>
          </div>
          <!--end breadcrumb-->


          <div class="row">
            <div class="col-xl-12 mx-auto"> 
<?php
                                                                            

	/*require "colaboradores/expansores.php";*/
	if($conexion->variablespermisos('','ESTATUS_BAJA_ALTA','ver')=='si'){ 
  require "colaboradores/STATUS.php";
  }
 if($conexion->variablespermisos('','INFORMACION_PERSONAL','ver')=='si'){   
  require "colaboradores/INFORMACION_PERSONAL.php";
}
 if($conexion->variablespermisos('','DATOS_FISCALCOLABORADOR','ver')=='si'){
  require "colaboradores/DIRECCION_EMPRESA_PROVEEDORES_1.php";
  }
   if($conexion->variablespermisos('','DATOS_BANCOCOLABORADOR','ver')=='si'){
  require "colaboradores/DATOS_BANCARIOS_1.php";
    }
 if($conexion->variablespermisos('','NUEVODATO','ver')=='si'){
require "colaboradores/NUEVODATO.php";
}
  if($conexion->variablespermisos('','DATOS_DE_COLABORADORES2','ver')=='si'){
 require "colaboradores/DATOSCOLABORADOR.php";
}
 /*if($conexion->variablespermisos('','DATOS_DE_COLABORADORES','ver')=='si'){
	require "colaboradores/DATOS_DE_COLABORADORES.php";
}*/
if($conexion->variablespermisos('','DIRECCION_DE_CASA_1','ver')=='si'){
	require "colaboradores/DIRECCION_DE_CASA_1.php";
}
if($conexion->variablespermisos('','DIRECCION_DE_CASA_2','ver')=='si'){
	require "colaboradores/DIRECCION_DE_CASA_2.php";
}
if($conexion->variablespermisos('','FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_1','ver')=='si'){
	require "colaboradores/FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_1.php";
}
if($conexion->variablespermisos('','FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_2','ver')=='si'){
	require "colaboradores/FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_2.php";
}
if($conexion->variablespermisos('','FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_4','ver')=='si'){
	require "colaboradores/FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_4.php";
}
if($conexion->variablespermisos('','EMPRESA','ver')=='si'){
	require "colaboradores/EMPRESA.php";
}
//if($conexion->variablespermisos('','ABILIDADES','ver')=='si'){
	//require "colaboradores/ABILIDADES.php";
//}
if($conexion->variablespermisos('','TARJETA_CREDITO_EMPRESARIAL','ver')=='si'){
	require "colaboradores/TARJETA_CREDITO_EMPRESARIAL.php";
}

 if($conexion->variablespermisos('','CONTRASENAS2','ver')=='si'){ 
 require "colaboradores/fetch_page_nuevo2.php";
 
 }
if($conexion->variablespermisos('','CONTRASENAS','ver')=='si'){
  require "colaboradores/CONTRASENAS.php";
}



if($conexion->variablespermisos('','VACACIONES','ver')=='si'){
  require "colaboradores/VACACIONES.php";
}
if($conexion->variablespermisos('','CONVENIO_PRESTAMO','ver')=='si'){
  require "colaboradores/CONVENIO_PRESTAMO.php";
}
if($conexion->variablespermisos('','COMPROBACIONES_PENDIENTES','ver')=='si'){
  require "colaboradores/COMPROBACIONES_PENDIENTES.php";
}
if($conexion->variablespermisos('','DESCUENTO_DE_COMPROBACIONES','ver')=='si'){
  require "colaboradores/DESCUENTO_DE_COMPROBACIONES.php";
}
if($conexion->variablespermisos('','MATERIAL_EQUIPO_ASIGNADO','ver')=='si'){
  require "colaboradores/MATERIAL_EQUIPO_ASIGNADO.php";
}
if($conexion->variablespermisos('','UNIFORMES','ver')=='si'){
  require "colaboradores/UNIFORMES.php";
}
if($conexion->variablespermisos('','POLIZAS','ver')=='si'){
  require "colaboradores/POLIZAS.php";
}
if($conexion->variablespermisos('','RESUMEN_DE_MATERIALES','ver')=='si'){
  require "colaboradores/RESUMEN_DE_MATERIALES.php";

} ?>
            </div>
          </div>
             

          </div>
          <!-- end page content-->
         </div>
         


         <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
         <!--End Back To Top Button-->
  
         <!--start switcher-->
         <div class="switcher-body">
		 <?php require "includes/coloresEncabezado.php"; ?>
         </div>
         <!--end switcher-->


         <!--start overlay-->
          <div class="overlay"></div>
         <!--end overlay-->

     </div>
  <!--end wrapper-->

    <!-- JS Files-->
			<?php require "includes/convertirma.php"; ?>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="//code.angularjs.org/snapshot/angular.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jspdf.umd.min.js"></script> 
    <script src="js/html2canvas.min.js"></script> 
    <script src="js/convertir.js"></script>                
    <script src="html2pdf.bundle.min.js"></script>
    <script src="colaboradores/script.js"></script> 
    <script src="assets/js/jquery.min.js"></script>
	<?php require "colaboradores/script.php"; ?>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>