<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  

$identioficador = isset($_POST["personal_id"])?$_POST["personal_id"]:'';
if($identioficador != '')
{
 $output = '';
	require "controlador.php";

$conexion = new colaboradores();
$queryVISTAPREV = $conexion->listadocontactocola2($identioficador);
 $output .= ' <form  id="listadocontactoCOLABform"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {

        if($row["TARJETA_COLAB"]!=""){
            $urlTARJETA_COLAB= "<a target='_blank'
            href='includes/archivos/".$row["TARJETA_COLAB"]."'>Visualizar!</a>";
            }else{
            $urlTARJETA_COLAB="";
            }

     $output .= '

     <tr>
     <td width="30%"><label>NOMBRE DE CONTACTO</label></td>
     <td width="70%"><input type="text" name="NOMBRE_CONTACTO_COLAB" value="'.$row["NOMBRE_CONTACTO_COLAB"].'"></td>
     </tr> <tr>
     <td width="30%"><label>CELULAR DE CONTACTO </label></td>
     <td width="70%"><input type="text" name="CEL_CONTACTO_COLAB" value="'.$row["CEL_CONTACTO_COLAB"].'"></td>
     </tr> <tr>
     <td width="30%"><label>TELEFONO DIRECTO</label></td>
     <td width="70%"><input type="text" name="TELEFONO_CONTACCOLAB" value="'.$row["TELEFONO_CONTACCOLAB"].'"></td>
     </tr> <tr>
     <td width="30%"><label>NUMERO DE EXTENSIÓN</label></td>
     <td width="70%"><input type="text" name="NUMERO_EXTENSION_COLAB" value="'.$row["NUMERO_EXTENSION_COLAB"].'"></td>
     </tr><tr>
     <td width="30%"><label>EMAIL DE CONTACTO</label></td>
     <td width="70%"><input type="text" name="EMAIL_CONTACTO_COLAB" value="'.$row["EMAIL_CONTACTO_COLAB"].'"></td>
     </tr>  <tr>
<td width="30%"><label>TARJETA DE PRESENTACIÓN:</label></td>
<td width="70%"><div class="col-md-6"> <div id="drop_file_zone" ondrop="upload_file(event, \'TARJETA_COLAB\');" ondragover="return false" style="width:300px;"> <p>Suelta aquí o busca tu archivo</p> <p> <input class="form-control form-control-sm" id="TARJETA_COLAB" type="text" onkeydown="return false" onclick="file_explorer(\'TARJETA_COLAB\');" style="width:250px;" value="'.$row["TARJETA_COLAB"].'" required /> </p> <input type="file" name="TARJETA_COLAB" id="nono"/> <div id="2TARJETA_COLAB"> '.$urlTARJETA_COLAB.'</div> </div> </div></td>
</tr><tr>
     <td width="30%"><label>OBSERVACIONES</label></td>
     <td width="70%"><input type="text" name="OBSERVACIONES_COLAB" value="'.$row["OBSERVACIONES_COLAB"].'"></td>
     </tr> <tr>
     <td width="30%"><label>FECHA ÚLTIMA CARGA</label></td>
     <td width="70%"><input type="text" name="FECHA_CONTACTOS_COLAB" value="'.$row["FECHA_CONTACTOS_COLAB"].'"></td>
     </tr>  

	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickCONTO">GUARDAR</button>
			
			<input type="hidden" value="ENVIACONTACTOCOLAB"  name="ENVIACONTACTOCOLAB"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPcontactosCOLAB" id="IPcontactosCOLAB"/>
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
	        form_data.append("IPcontactosCOLAB",  $("#IPcontactosCOLAB").val());
	        $.ajax({
	            type: 'POST',
                url:"colaboradores/controlador.php",
				  dataType: "html",
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#2'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
$('#respuestaser').html('<p style="color:green;">Actualizado!</p>');
    },				
	            success:function(response) {

if($.trim(response) == 2 ){

$('#2'+nombre).html('<p style="color:red;">Error, archivo diferente a PDF, JPG o GIF.</p>');
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


$("#clickCONTO").click(function(){
	
   $.ajax({  
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#listadocontactoCOLABform').serialize(),

    beforeSend:function(){  
    $('#mensajeNOMBRECONTACTO').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#resetCONTACTOS").load(location.href + " #resetCONTACTOS");
			$("#mensajeNOMBRECONTACTO").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeNOMBRECONTACTO").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>