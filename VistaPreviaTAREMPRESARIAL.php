<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  
//select.php  CONTRASENA_DE1
$identioficador = isset($_POST["personal_id"])?$_POST["personal_id"]:'';
if($identioficador != '')
{
 $output = '';
	require "controlador.php";

$conexion = NEW colaboradores();
$queryVISTAPREV = $conexion->listadoTARJETAEMPRESARIAL2($identioficador);
 $output .= ' 
 <div id="respuestaser"></div>
 <form  id="tarjeta2form2" > 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {
	
		if($row["T_SUBIR_ARCHIVO_RELACIONADO"]!=""){$T_SUBIR_ARCHIVO_RELACIONADO =  "<a target='_blank' href='includes/archivos/".$row["T_SUBIR_ARCHIVO_RELACIONADO"]."'>Visualizar!</a>"; 
		}	else{
			$T_SUBIR_ARCHIVO_RELACIONADO = "";
		}

		if($row["T_SUBIR_INE_ATRAS"]!=""){$T_SUBIR_INE_ATRAS =  "<a target='_blank' href='includes/archivos/".$row["T_SUBIR_INE_ATRAS"]."'>Visualizar!</a>"; 
		}	else{
			$T_SUBIR_INE_ATRAS = "";
		}

		if($row["T_SUBIR_INE"]!=""){$T_SUBIR_INE =  "<a target='_blank' href='includes/archivos/".$row["T_SUBIR_INE"]."'>Visualizar!</a>"; 
		}	else{
			$T_SUBIR_INE = "";
		}

		if($row["T_SUBIR_COMPROBABTE"]!=""){$T_SUBIR_COMPROBABTE =  "<a target='_blank' href='includes/archivos/".$row["T_SUBIR_COMPROBABTE"]."'>Visualizar!</a>"; 
		}	else{
			$T_SUBIR_COMPROBABTE = "";
		}

		if($row["T_FOTO_TARJETA_ATRAS"]!=""){$T_FOTO_TARJETA_ATRAS =  "<a target='_blank' href='includes/archivos/".$row["T_FOTO_TARJETA_ATRAS"]."'>Visualizar!</a>"; 
		}	else{
			$T_FOTO_TARJETA_ATRAS = "";
		}

		if($row["T_FOTO_TARJETA"]!=""){$T_FOTO_TARJETA =  "<a target='_blank' href='includes/archivos/".$row["T_FOTO_TARJETA"]."'>Visualizar!</a>"; 
		}	else{
			$T_FOTO_TARJETA = "";
		}			
     $output .= '
     <tr>  
            <td width="30%"><label>FECHA DE ENTREGA DE TARJETA:</label></td>  
            <td width="70%"><input type="date" class="form-control"  name="FECHA_ENTREGA_TARJETA" value="'.$row["FECHA_ENTREGA_TARJETA"].'"></td>  
        </tr>
        <tr>  
            <td width="30%"><label>FECHA DEVOLUCION DE TARJETA:</label></td>  
            <td width="70%"><input type="date" class="form-control"  name="FECHA_DEVOLUCION_TARJETA" value="'.$row["FECHA_DEVOLUCION_TARJETA"].'"></td>  
        </tr>
        <tr>  
            <td width="30%"><label>TARJETA: (ACTIVA O INACTIVA)</label></td>  
            <td width="70%"><input type="text" name="TTARJETA" value="'.$row["TTARJETA"].'"></td>  
        </tr>
        <tr>  
            <td width="30%"><label>BANCO:</label></td>  
            <td width="70%"><input type="text" name="TBANCO" value="'.$row["TBANCO"].'"></td>  
        </tr>
		
		

		
		
        <tr>  
            <td width="30%"><label>TIPO TARJETA:</label></td>  
            <td width="70%"><input type="text" name="T_TIPO_TARJETA" value="'.$row["T_TIPO_TARJETA"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>NUMERO DE TARJETA:</label></td>  
            <td width="70%">
			
			<input type="text" name="T_NUMERO_TARJETA" value="'.$row["T_NUMERO_TARJETA"].'">
			
			</td>  
        </tr>
		
        <tr>  
            <td width="30%"><label>FECHA DE VENCIMIENTO:</label></td>  
            <td width="70%"><input type="date" class="form-control" name="T_FECHA_VENCIMIENTO" value="'.$row["T_FECHA_VENCIMIENTO"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label> CODIGO DE SEGURIDAD:</label></td>  
            <td width="70%"><input type="text" name="T_CODIGO_SEGURIDAD" value="'.$row["T_CODIGO_SEGURIDAD"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>LIMITE DE CREDITO:</label></td>  
            <td width="70%"><input type="text" name="T_LIMITE_CREDITO" value="'.$row["T_LIMITE_CREDITO"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>FECHA DE CORTE:</label></td>  
            <td width="70%"><input type="date" class="form-control"  name="T_FECHA_CORTE" value="'.$row["T_FECHA_CORTE"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>FECHA LIMITE:</label></td>  
            <td width="70%"><input type="date" class="form-control"  name="T_FECHA_LIMITE" value="'.$row["T_FECHA_LIMITE"].'"></td>  
        </tr>
		

        <tr>  
            <td width="30%"><label>NIP:</label></td>  
            <td width="70%"><input type="text" name="T_NIP" value="'.$row["T_NIP"].'"></td>  
        </tr>



        <tr>  
            <td width="30%"><label>USUARIO:</label></td>  
            <td width="70%"><input type="text" name="T_USUARIO" value="'.$row["T_USUARIO"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>CONTRASEÑA:</label></td>  
            <td width="70%"><input type="password" name="T_CONTRASENA" value="'.$row["T_CONTRASENA"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>TELEFONO PARA REPORTE EN CASO DE ROBO O EXTRAVIO:</label></td>  
            <td width="70%"><input type="text" name="T_TELEFONO_EXTRAVIO" value="'.$row["T_TELEFONO_EXTRAVIO"].'"></td>  
        </tr>
		

        <tr>  
            <td width="30%"><label>DIRECCION COMPLETA DE ALTA DE LA TARJETA:</label></td>  
            <td width="70%"><input type="text" name="T_DIRECCION_COMPLETA" value="'.$row["T_DIRECCION_COMPLETA"].'"></td>  
        </tr>
		
		

        <tr>  
            <td width="30%"><label>TELEFONO DE ALTA DE LATARJETA:</label></td>  
            <td width="70%"><input type="text" name="T_TELEFONO_TARJETA" value="'.$row["T_TELEFONO_TARJETA"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>CORREO DE ALTA DE LA TARJETA:</label></td>  
            <td width="70%"><input type="text" name="T_CORREO_ALTA" value="'.$row["T_CORREO_ALTA"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>FECHA BAJA DE LA TARJETA:</label></td>  
            <td width="70%"><input type="date" class="form-control"  name="T_FECHA_BAJA" value="'.$row["T_FECHA_BAJA"].'"></td>  
        </tr>
		

        <tr>  
            <td width="30%"><label>NUMERO DE REPORTE DE BAJA DE LA TARJETA:</label></td>  
            <td width="70%"><input type="text" name="T_NUMERO_REPORTE" value="'.$row["T_NUMERO_REPORTE"].'"></td>  
        </tr>
		



        <tr>  
            <td width="30%"><label>NOMBRE DE OPERADOR DEL BANCO:</label></td>  
            <td width="70%"><input type="text" name="T_NOMBRE_OPERADOR" value="'.$row["T_NOMBRE_OPERADOR"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>OBSERVACIONES 1:</label></td>  
            <td width="70%"><input type="text" name="T_OBSERVACIONES_1" value="'.$row["T_OBSERVACIONES_1"].'"></td>  
        </tr>

        <tr>  
            <td width="30%"><label>OBSERVACIONES 2:</label></td>  
            <td width="70%"><input type="text" name="T_OBSERVACIONES_2" value="'.$row["T_OBSERVACIONES_2"].'"></td>  
        </tr>
		

        <tr>











		
            <td width="30%"><label>FOTO DE LA TARJETA:</label></td>  
            <td width="70%">
			
			
<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,\'T_FOTO_TARJETA\')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_FOTO_TARJETA" type="text" onkeydown="return false" onclick="file_explorer(\'T_FOTO_TARJETA\');" style="width:250px;" VALUE="'.$row["T_FOTO_TARJETA"] .' " required /></p>
		<input type="file" name="T_FOTO_TARJETA" id="nono"/>
		<div id="2T_FOTO_TARJETA">
'.$T_FOTO_TARJETA.'
			
			</div>
	</div>	
	</div>				

			
			</td>  
        </tr>
		
		

        <tr>  
            <td width="30%"><label>FOTO DE LA TARJETA POR ATRAS:</label></td>  
            <td width="70%">
			
<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,\'T_FOTO_TARJETA_ATRAS\')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_FOTO_TARJETA_ATRAS" type="text" onkeydown="return false" onclick="file_explorer(\'T_FOTO_TARJETA_ATRAS\');" style="width:250px;" VALUE="'.$row["T_FOTO_TARJETA_ATRAS"] .' " required /></p>
		<input type="file" name="T_FOTO_TARJETA_ATRAS" id="nono"/>
		<div id="2T_FOTO_TARJETA_ATRAS">
'.$T_FOTO_TARJETA_ATRAS.'
			
			</div>
	</div>	
	</div>	
			
			
			
			
			</td>  
        </tr>

        <tr>  
            <td width="30%"><label>SUBIR COMPROBABTE DE DOMICILIO DE LA ALTA DE LA TARJETA:</label></td>  
            <td width="70%">
			
			
<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,\'T_SUBIR_COMPROBABTE\')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_SUBIR_COMPROBABTE" type="text" onkeydown="return false" onclick="file_explorer(\'T_SUBIR_COMPROBABTE\');" style="width:250px;" VALUE="'.$row["T_SUBIR_COMPROBABTE"] .' " required /></p>
		<input type="file" name="T_SUBIR_COMPROBABTE" id="nono"/>
		<div id="2T_SUBIR_COMPROBABTE">
'.$T_SUBIR_COMPROBABTE.'
			
			</div>
	</div>	
	</div>	



</td>  
        </tr>

        <tr>  
            <td width="30%"><label>SUBIR INE:</label></td>  
            <td width="70%">
			
			
			
<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,\'T_SUBIR_INE\')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_SUBIR_INE" type="text" onkeydown="return false" onclick="file_explorer(\'T_SUBIR_INE\');" style="width:250px;" VALUE="'.$row["T_SUBIR_INE"] .' " required /></p>
		<input type="file" name="T_SUBIR_INE" id="nono"/>
		<div id="2T_SUBIR_INE">
'.$T_SUBIR_INE.'
			
			</div>
	</div>	
	</div>	
			
			
		</td>  
        </tr>
		

        <tr>  
            <td width="30%"><label>SUBIR INE POR ATRAS:</label></td>  
            <td width="70%">
			
			
			
<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,\'T_SUBIR_INE_ATRAS\')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_SUBIR_INE_ATRAS" type="text" onkeydown="return false" onclick="file_explorer(\'T_SUBIR_INE_ATRAS\');" style="width:250px;" VALUE="'.$row["T_SUBIR_INE_ATRAS"] .' " required /></p>
		<input type="file" name="T_SUBIR_INE_ATRAS" id="nono"/>
		<div id="2T_SUBIR_INE_ATRAS">
'.$T_SUBIR_INE_ATRAS.'
			
			</div>
	</div>	
	</div>				


</td>  
        </tr>	
      <tr>  
            <td width="30%"><label>SUBIR ARCHIVO RELACIONADO CON ESTA TARJETA:</label></td>  
            <td width="70%">
			
<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,\'T_SUBIR_ARCHIVO_RELACIONADO\')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_SUBIR_ARCHIVO_RELACIONADO" type="text" onkeydown="return false" onclick="file_explorer(\'T_SUBIR_ARCHIVO_RELACIONADO\');" style="width:250px;" VALUE="'.$row["T_SUBIR_ARCHIVO_RELACIONADO"] .' " required /></p>
		<input type="file" name="T_SUBIR_ARCHIVO_RELACIONADO" id="nono"/>
		<div id="2T_SUBIR_ARCHIVO_RELACIONADO">
'.$T_SUBIR_ARCHIVO_RELACIONADO.'
			
			</div>
	</div>	
	</div>	
			

			
			</td>  
        </tr>	
		
        <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarITARJETAEMPRESARIAL2">GUARDAR</button>
			
			<input type="hidden" value="ITEMPRESARIAL2"  name="ITEMPRESARIAL2"/>
			<input type="hidden" value="'.$row["id"].'"  name="IpTEMPRESARIAL" id="IpTEMPRESARIAL"/>
			</td>  
        </tr>		
		
     ';
    }
    $output .= '</table></div>

	</form>';
    echo $output;
}
?>

  
<script>

	var fileobj;
	function upload_file(e,name) {
	    e.preventDefault();
	    fileobj = e.dataTransfer.files[0];
	    ajax_file_upload1(fileobj,name);
	}
	 
	function file_explorer(name) {
	    document.getElementsByName(name)[0].click();
	    document.getElementsByName(name)[0].onchange = function() {
	        fileobj = document.getElementsByName(name)[0].files[0];
	        ajax_file_upload1(fileobj,name);
	    };
	}

	function ajax_file_upload1(file_obj,nombre) {  
	    if(file_obj != undefined) {
	        var form_data = new FormData();                  
	        form_data.append(nombre, file_obj);
	        form_data.append("IpTEMPRESARIAL",  $("#IpTEMPRESARIAL").val());
	        $.ajax({
	            type: 'POST',
	            url: 'colaboradores/controlador.php',
				  dataType: "html",
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#2'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
$('#mensajeMEASIGNADO12').html('<p style="color:green;">Actualizado!</p>');
    },				
	            success:function(response) {

if($.trim(response) == 2 ){

$('#2'+nombre).html('<p style="color:red;">Error, archivo diferente a PDF, JPG o GIF.</p>');
$('#'+nombre).val("");
}else if($.trim(response) == 1 ){
$('#2'+nombre).html('<p style="color:red;">Error, sin permiso de escritura.</p>');
$('#'+nombre).val("");	
}else{
$('#'+nombre).val(response);
$('#2'+nombre).html('<a target="_blank" href="includes/archivos/'+$.trim(response)+'">Visualizar!</a>');	
}

	            }
	        });
	    }
	}







	$(document).ready(function(){


$("#enviarITARJETAEMPRESARIAL2").click(function(){
	
   $.ajax({  
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#tarjeta2form2').serialize(),

    beforeSend:function(){  
    $('#mensajeTEMPRESARIAL').html('cargando'); 
    }, 	
	
   success:function(data){
        var responseText = $.trim($('<div>').html(data).text()).toLowerCase();

        if(responseText === 'ingresado' || responseText === 'actualizado'){

                $('#dataModal').modal('hide');
                $("#reseteateTAREMPRESARIAL").load(location.href + " #reseteateTAREMPRESARIAL");
                $("#mensajeTEMPRESARIAL").html(data);

                }else{

                $("#mensajeTEMPRESARIAL").html(data);

        }
    }
   });

   

});



		});

		
	</script>