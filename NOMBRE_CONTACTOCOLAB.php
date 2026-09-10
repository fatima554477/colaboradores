
<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar11" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar11" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CONTACTOS</p>
<div  id="mensajeNOMBRECONTACTO12"><div class="progress" style="width: 25%;">

									<div class="progress-bar" role="progressbar" style="width: <?php echo $contactosporcentaje; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $contactosporcentaje; ?>%</div>
									
								</div></div>
								</strong>
	        <div id="target11" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
            


	<form class="row g-3 needs-validation was-validated" novalidate="" id="NOMBRECONTACTOform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 
       

    <table class="table mb-0 table-striped">

                        <tr>

                         <th style="text-align:center" scope="col">CONTACTOS</th>
                        </tr>
                            </table>
                            
                    <?php if($conexion->variablespermisos('','NOMBRE_DE_CONTACTO','guardar')=='si'){ ?>
                            
 
 
              <table class="table mb-0 table-striped">
                    <tr>
                               
                               <th style="text-align:center" scope="col"></th>
                               <th style="text-align:center" scope="col">INFORMACIÓN O ARCHIVO</th>   
                    
                           
                               </tr>

   
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NOMBRE DEL CONTACTO:</th>
    <td  style="background:#ebf8fa;width: 700px"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $NOMBRE_CONTACTO_COLAB ?>" name="NOMBRE_CONTACTO_COLAB"></td>
    </tr>
	
	
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">CELULAR DEL CONTACTO:</th>
    <td  style="background:#ebf8fa;width: 700px"><input type="text" maxlength="20" class="form-control formato-numero" id="CEL_CONTACTO_COLAB" required=""  value="<?php echo $CEL_CONTACTO_COLAB ?>"name="CEL_CONTACTO_COLAB" onkeyup="formato_telefono('CEL_CONTACTO_COLAB')"></td>
    </tr>
	
	
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">TELÉFONO DIRECTO:</th>
    <td  style="background:#ebf8fa"><input type="text" maxlength="20" class="form-control formato-numero" id="validationCustom03" required=""  value="<?php echo $TELEFONO_CONTACCOLAB; ?>" name="TELEFONO_CONTACCOLAB"  onkeyup="formato_telefono('TELEFONO_CONTACCOLAB')"></td>
    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NÚMERO DE EXTENSIÓN :</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $NUMERO_EXTENSION_COLAB; ?>" name="NUMERO_EXTENSION_COLAB" onkeyup="formato_telefono('NUMERO_EXTENSION_COLAB')"></td>
    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">EMAIL DE CONTACTO :</th>
    <td  style="background:#ebf8fa"><input type="text"class="form-control" id="validationCustom03" required=""  value="<?php echo $EMAIL_CONTACTO_COLAB; ?>" name="EMAIL_CONTACTO_COLAB"></td>

    </tr>
     <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">TARJETA DE PRESENTACIÓN:</th>
    <td  style="background:#ebf8fa"><input type="file"class="form-control" id="validationCustom03" required=""  value="<?php echo $TARJETA_COLAB; ?>" name="TARJETA_COLAB"></td>

    </tr> 

    </table>  
       
  <table>

<tr style="background:#ebf8fa;">
<th style="text-align:center" scope="col">OBSERVACIONES</th>
<td ><textarea style="width:400px;" name="OBSERVACIONES_COLAB" class="form-control" aria-label="With textarea"><?php echo $OBSERVACIONES_COLAB; ?></textarea></td><br></br>
           <th style="text-align:center;background:#ebf8fa;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#ebf8fa">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="FECHA_CONTACTOS_COLAB">
           
           </td>
           </tr>
          </table>  
 
  
                     <table><tr>
                    <input type="hidden" value="validaNOMBRECONTACTO" name="validaNOMBRECONTACTO"/>

              <th>  <button class="btn btn-sm btn-outline-success px-5"   type="button" id="enviarNOMBRECONTACTO">GUARDAR</button><div style="
 position: absolute;
    top: 63%; 
    right: 50%;
    transform: translate(50%,-50%);
    text-transform: uppercase;
    font-family: verdana;
    font-size: 2em;
    font-weight: 800;
    color: #f5f5f5;
    text-shadow: 1px 1px 1px #919191,
        1px 2px 1px #919191,
        1px 3px 1px #919191,
        1px 4px 1px #919191,
        1px 5px 1px #919191,
        1px 6px 1px #919191,
        1px 7px 1px #919191,
        1px 8px 1px #919191,
        1px 9px 1px #919191,
        1px 10px 1px #919191,
    1px 18px 6px rgba(16,16,16,0.4),
    1px 22px 10px rgba(16,16,16,0.2),
    1px 25px 35px rgba(16,16,16,0.2),
    1px 30px 60px rgba(16,16,16,0.4);"  id="mensajeNOMBRECONTACTO"> </th>
               </tr><?php } ?></table>      
           
          
            </form>
            <?php if($conexion->variablespermisos('','NOMBRE_DE_CONTACTO','email')=='si'){ ?>
            <form name="form_emai_CONTACTOS" id="form_emai_CONTACTOS">
          
            
         <table><tr>
            <td><textarea placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  style="width:500px;" name="CONTACTO_ENVIAR_IMAIL" id="CONTACTO_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $CONTACTO_ENVIAR_IMAIL; ?></textarea></td><br>
              <td> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarimailCONT">ENVIAR POR EMAIL</button>    <?php } ?></td>   
         
          </tr></table>   
          

     
             

<?php
$querycontras = $conexion->listadocontactocola();
?>

<br />
<div class='table-responsive'>
<div align='right'>
</div>
<br />
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%"  id='resetCONTACTOS' name='resetCONTACTOS'>
<tr style="text-align:center">
<th width="15%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>  
<th width="20%"style="background:#c9e8e8">NOMBRE DEL CONTACTO</th>
<th width="20%"style="background:#c9e8e8">CELULAR </th>
<th width="20%"style="background:#c9e8e8">TELÉFONO DIRECTO</th>
<th width="20%"style="background:#c9e8e8">NÚMERO DE EXTENSIÓN</th>
<th width="20%"style="background:#c9e8e8">EMAIL DE CONTACTO</th>
<th width="20%"style="background:#c9e8e8">TARJETA DE PRESENTACIÓN</th>
<th width="20%"style="background:#c9e8e8">OBSERVACI0NES</th>
<th width="20%"style="background:#c9e8e8">FECHA DE ÚLTIMA CARGA</th>
</tr>
                                                
<?php
$urlTARJETA_PRE ='';
while($row = mysqli_fetch_array($querycontras))
{	
	$urlTARJETA_COLAB = $conexion->descargararchivo($row["TARJETA_COLAB"]);
?>

<tr style="background:#f5f9fc;text-align:center">
<td style="text-align:center" >
<input type="checkbox" style="width:26%" class="form-check-input" name="contacCOLAB[]" id="contacCOLAB" value="<?php echo $row["id"]; ?>"/> </td>
<td ><?php echo strtoupper($row["NOMBRE_CONTACTO_COLAB"]); ?></td>
<td ><?php echo $row["CEL_CONTACTO_COLAB"]; ?></td>
<td ><?php echo $row["TELEFONO_CONTACCOLAB"]; ?></td>
<td ><?php echo $row["NUMERO_EXTENSION_COLAB"]; ?></td>
<td ><?php echo $row["EMAIL_CONTACTO_COLAB"]; ?></td>
<td ><?php echo $urlTARJETA_COLAB; ?></td>
<td ><?php echo strtoupper($row["OBSERVACIONES_COLAB"]); ?></td>
<td ><?php echo $row["FECHA_CONTACTOS_COLAB"]; ?></td>
<td><?php if($conexion->variablespermisos('','NOMBRE_DE_CONTACTO','modificar')=='si'){ ?><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataCONTACTOSmodifica" /><?php } ?></td>
<td>
<?php if($conexion->variablespermisos('','NOMBRE_DE_CONTACTO','borrar')=='si'){ ?><input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataCONTACTOSborrar" /><?php } ?></td>
</tr>
<?php
}
?>
</table>
</tbody>
</div>
</div>
</div>   

</form></div></div>
        






















 
 
 
 
 
 
 
 