<div id="content">     
			<hr/>
			 <strong> <p class="mb-0 text-uppercase">
<img src="includes/contraer51.png" id="mostrar5" style="cursor:pointer;"/>
<img src="includes/contraer61.png" id="ocultar5" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;FAMILIAR MAS CERCANO MAYOR DE EDAD 1</p><div  id="mensajeF1CERCANO2"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWf1cercano1a1 ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWf1cercano1a1 ; ?>%</div>
								</div></div></strong>
	        <div id="target5" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
		  
<?php 
if($fechaf1cercano==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaf1cercano.'</strong><BR/><BR/>';
}
?>
		  
	<form class="row g-3 needs-validation was-validated" novalidate="" id="F1CERCANO1form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

                      <div class="col-md-4" style="background:#fef5e7">
                        <strong> <label for="validationCustom01" class="form-label">PARENTESCO:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" required="" name="FAMILIAR_1_PARENTESCO" value="<?php echo $FAMILIAR_1_PARENTESCO; ?>">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                      <div class="col-md-4"  style="background:#d4f6c8" >
                      <strong><label for="validationCustom01" class="form-label">NOMBRE 1:</label></strong>
                          <input   type="text" class="form-control" id="validationCustom01" required="" name="FAMILIAR_1_NOMBRE_1" value="<?php echo $FAMILIAR_1_NOMBRE_1; ?>">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fbeee6" >
                        <strong> <label for="validationCustom01" class="form-label">NOMBRE 2:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" required="" name="FAMILIAR_1_NOMBRE_2" value="<?php echo $FAMILIAR_1_NOMBRE_2; ?>">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong><label for="validationCustom01" class="form-label">APELLIDO PATERNO:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_APELLIDO_PATERNO; ?>" required="" name="FAMILIAR_1_APELLIDO_PATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div> 
						
                        <div class="col-md-4" style="background:#d4f6c8">
                        <strong><label for="validationCustom01" class="form-label">APELLIDO MATERNO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_APELLIDO_MATERNO; ?>" required="" name="FAMILIAR_1_APELLIDO_MATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						

						
                        <div class="col-md-4" style="background:#fbeee6">
                        <strong><label for="validationCustom01" class="form-label"> CELULAR 1:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_CELULAR_1; ?>" required="" name="FAMILIAR_1_CELULAR 1">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4" style="background:#fef5e7" >
                        <strong><label for="validationCustom01" class="form-label"> CELULAR 2:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_CELULAR_2; ?>" required="" name="FAMILIAR_1_CELULAR_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#d4f6c8">
                        <strong><label for="validationCustom01" class="form-label">TELEFONO DE CASA I</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_TELEFONO_DE_CASA_I; ?>" required="" name="FAMILIAR_1_TELEFONO_DE_CASA_I">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fbeee6">
                        <strong><label style="background:#fbeee6" for="validationCustom01" class="form-label">CORREO ELECTRONICO</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_CORREO_ELECTRONICO; ?>" required="" name="FAMILIAR_1_CORREO_ELECTRONICO">
                          <div class="valid-feedback">Bien!</div>      
                        </div>
                        </div>
                  
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong>  <label for="validationCustom01" class="form-label">EDIFICIO:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" required="" name="FAMILIAR_1_EDIFICIO" value="<?php echo $FAMILIAR_1_EDIFICIO; ?>">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                      
                        <div class="col-md-4" style="background:#d4f6c8">
                        <strong>  <label for="validationCustom01" class="form-label">CALLE O AVENIDA:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_NUMERO_CALLE; ?>" required="" name="FAMILIAR_1_NUMERO_CALLE">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                      
                        <div class="col-md-4" style="background:#fbeee6">
                        <strong>  <label for="validationCustom01" class="form-label">NUMERO EXTERIOR:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_NUMERO_EXTERIOR; ?>" required="" name="FAMILIAR_1_NUMERO_EXTERIOR">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong> <label for="validationCustom01" class="form-label">NUMERO INTERIOR:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_NUMERO_INTERIOR; ?>" required="" name="FAMILIAR_1_NUMERO_INTERIOR">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#d4f6c8">
                        <strong>  <label for="validationCustom01" class="form-label"> NUMERO INTERIOR 2:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_NUMER__INTERIOR_2; ?>" required="" name="FAMILIAR_1_NUMER_ INTERIOR_2">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4" style="background:#fbeee6">
                        <strong> <label for="validationCustom01" class="form-label"> COLONIA:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_COLONIA; ?>" required="" name="FAMILIAR_1_COLONIA">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong> <label for="validationCustom01" class="form-label">ALCALDIA:</label></strong>
                          <input   type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_ALCALDIA; ?>" required="" name="FAMILIAR_1_ALCALDIA">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#d4f6c8">
                        <strong> <label for="validationCustom01" class="form-label">C.P.</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_C_P; ?>" required="" name="FAMILIAR_1_C_P">
                          <div class="valid-feedback">Bien!</div>
                  </div>
                  <div class="col-md-4" style="background:#fbeee6" >
                  <strong> <label for="validationCustom01" class="form-label"> CIUDAD:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_CIUDAD; ?>" required="" name="FAMILIAR_1_CIUDAD">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4" style="background:#fef5e7" >
                        <strong> <label for="validationCustom01" class="form-label">ESTADO:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_ESTADO; ?>" required="" name="FAMILIAR_1_ESTADO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#d4f6c8">
                        <strong> <label for="validationCustom01" class="form-label">PAIS:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FAMILIAR_1_PAIS; ?>" required="" name="FAMILIAR_1_PAIS">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                      
		<input type="hidden" value="F1CERCANO1" name="F1CERCANO1">
		    <input type="hidden" value="" name="registro_id">



       <div style="width: 80%; height 400px;:px;">
       <strong> <label>UBICACION EN EL MAPA: COPIAR LINK</label></strong>

                
    <a href="https://www.google.com.gt/maps/@<?php echo $valor1 ?>,<?php echo $valor2 ?>,15z" target="_blank">(GOOGLE MAPS)</a>
    <input style="background: #eef5fa" type="text" id="search_location" class="form-control" placeholder="Search location" name="FAMILIAR_1_UBICACION _EN_EL_MAPA" value="<?php echo $FAMILIAR_1_UBICACION__EN_EL_MAPA; ?>">
    <div class="input-group-btn">
        <button class="btn btn-default get_map" type="submit">
             
              </button>
                </div>
                </div>
                  


 
                  <div> 
                          
	<div style="float:left;"border="solid 1px #000;">
  <?php if($conexion->variablespermisos('','FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_1','guardar')=='si'){ ?>

	<button class="btn btn-sm btn-outline-success px-5" type="button"  id="enviarF1CERCANO1">GUARDAR</button><div style="
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
    1px 30px 60px rgba(16,16,16,0.4);
	@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 100; }
}"


id="mensajeF1CERCANO"/>

	</div><?php } ?>
                         

	</div>
                            
 
                         </form>



<?php $registrosFamiliar1 = $conexion->listado_f1cercano(); ?>

<div class="table-responsive mt-4" id="tablaF1CERCANO1">

<table class="table table-striped table-bordered">

<thead><tr style="text-align:center;background:#c9e8e8"><th>PARENTESCO</th><th>NOMBRE</th><th>CELULAR</th><th>TELÉFONO</th><th>CORREO</th><th>CIUDAD / ESTADO</th><th>ACCIONES</th></tr></thead>

<tbody>

<?php while($registroFamiliar1 = mysqli_fetch_array($registrosFamiliar1, MYSQLI_ASSOC)){ ?>

<tr style="text-align:center">

<td><?php echo htmlspecialchars($registroFamiliar1['FAMILIAR_1_PARENTESCO']); ?></td>

<td><?php echo htmlspecialchars(trim($registroFamiliar1['FAMILIAR_1_NOMBRE_1'].' '.$registroFamiliar1['FAMILIAR_1_NOMBRE_2'].' '.$registroFamiliar1['FAMILIAR_1_APELLIDO_PATERNO'].' '.$registroFamiliar1['FAMILIAR_1_APELLIDO_MATERNO'])); ?></td>

<td><?php echo htmlspecialchars($registroFamiliar1['FAMILIAR_1_CELULAR_1']); ?></td>

<td><?php echo htmlspecialchars($registroFamiliar1['FAMILIAR_1_TELEFONO_DE_CASA_I']); ?></td>

<td><?php echo htmlspecialchars($registroFamiliar1['FAMILIAR_1_CORREO_ELECTRONICO']); ?></td>

<td><?php echo htmlspecialchars($registroFamiliar1['FAMILIAR_1_CIUDAD'].' / '.$registroFamiliar1['FAMILIAR_1_ESTADO']); ?></td>

<td>

<?php if($conexion->variablespermisos('','FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_1','modificar')=='si'){ ?><button type="button" class="btn btn-info btn-xs modificar-multiregistro" data-form="F1CERCANO1form" data-registro="<?php echo htmlspecialchars(base64_encode(json_encode($registroFamiliar1)), ENT_QUOTES, 'UTF-8'); ?>">MODIFICAR</button><?php } ?>

<?php if($conexion->variablespermisos('','FAMILIAR_MAS_CERCANO_MAYOR_DE_EDAD_1','borrar')=='si'){ ?><button type="button" class="btn btn-info btn-xs borrar-multiregistro" data-accion="borrar_f1cercano" data-id="<?php echo (int)$registroFamiliar1['id']; ?>" data-tabla="tablaF1CERCANO1">BORRAR</button><?php } ?>

</td></tr>

<?php } ?>

</tbody></table></div>



						 

                          </div>

						   </div>

						 </div>

						 </div>