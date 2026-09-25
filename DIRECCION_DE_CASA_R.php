<div id="content">     
			<hr/>
	<strong> <P class="mb-0 text-uppercase">
<img src="includes/contraer51.png" id="mostrar3" style="cursor:pointer;"/>
<img src="includes/contraer61.png" id="ocultar3" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DIRECCIÓN DE CASA 1
</p><div  id="mensajeDIRCASA12"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosROWdircasa1 ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosROWdircasa1 ; ?>%</div>
								</div></div></strong>
	        <div id="target3" style="display:block;"  class="content2">
			
			
	<?php 
if($fechaIngresoDIR1==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresoDIR1.'</strong><BR/><BR/>';
}
?>		
			
			
			
			
			
        <div class="card">
          <div class="card-body">

					  
	<form class="row g-3 needs-validation was-validated" novalidate="" id="DIRCASA1form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

                         <div class="col-md-4"style="background:#fef5e7" >
                         <strong> <label for="validationCustom02" class="form-label">DIRECCIÓN AUTORIZADA PARA TRABAJAR:</label> </strong>
                          <select  class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="AUTORIZA_1">
                         <option selected="">SELECCIONA UNA OPCIÓN</option>
                          <option style="background: #c9e8e8" value="SI" <?php if($AUTORIZA_1 == 'SI'){echo "selected";} ?>>SI</option>
                          <option style="background: #a3e4d7" value="NO" <?php if($AUTORIZA_1 == 'NO'){echo "selected";} ?>>NO</option>	
                          </select>
                      </div>
					  
                  <div class="col-md-4"  style="background:#d4f6c8">
                    <strong><label for="validationCustom03" class="form-label">NOMBRE DEL EDIFICIO:</label> </strong>
                     <input  type="text" class="form-control" id="validationCustom03" required="" name="EDIFICIO" value="<?php echo $EDIFICIO; ?>">
                     <div class="valid-feedback">Looks good!</div>
                   </div>


                  <div class="col-md-4" style="background:#fbeee6">
                  <strong> <label for="validationCustom03" class="form-label">CALLE:</label> </strong>
                     <input type="text" class="form-control" id="validationCustom03" required="" name="calledir1" value="<?php echo $calledir1; ?>">
                     <div class="valid-feedback">Looks good!</div>
                   </div>

				   
                   <div class="col-md-4" style="background:#fef5e7" >
                   <strong> <label for="validationCustom03" class="form-label">NÚMERO EXTERIOR:</label> </strong>
                     <input type="text" class="form-control" id="validationCustom03" required="" name="NUMERO_EXTERIOR" value="<?php echo $NUMERO_EXTERIOR; ?>">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4" style="background:#d4f6c8"  >
                   <strong><label for="validationCustom02" class="form-label">NÚMERO INTERIOR:</label></strong>
                     <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $NUMERO_INTERIOR; ?>" required="" name="NUMERO_INTERIOR">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"style="background:#fbeee6" >
                   <strong> <label for="validationCustom01" class="form-label">NÚMERO INTERIOR 2:</label></strong>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_INTERIOR_2; ?>" required=""name="NUMERO_INTERIOR_2">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4" style="background:#fef5e7">
                   <strong> <label for="validationCustom02" class="form-label">COLONIA:</label></strong>
                     <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $COLONIA; ?>" required=""name="COLONIA">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"  style="background:#d4f6c8">
                   <strong> <label for="validationCustom02" class="form-label">ALCALDÍA:</label></strong>
                     <input   type="text" class="form-control" id="validationCustom02" value="<?php echo $ALCALDIA; ?>" required="" name="ALCALDIA">
                     <div class="valid-feedback">Looks good!</div>
                 
                  <div class="col-md-4"  style="background:#fbeee6">

                   <strong> <label for="validationCustom01" class="form-label">C.P.</label></strong>

                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $C_P; ?>" required="" name="C_P">

                     <div class="valid-feedback">Looks good!</div>

                   </div>

				   

                   <div class="col-md-4" style="background:#fef5e7">

                   <strong><label for="validationCustom02" class="form-label">CIUDAD:</label></strong>

                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $CIUDAD; ?>" required="" name="CIUDAD">

                     <div class="invalid-feedback">Please provide a valid city.</div>

                   </div>

				   

                   <div class="col-md-4" style="background:#d4f6c8">

                   <strong> <label for="validationCustom02" class="form-label">ESTADO:</label></strong>

                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $ESTADO; ?>" required="" name="ESTADO">

                     <div class="valid-feedback">Looks good!</div>

                   

                   </div>

                   <div class="col-md-4" style="background:#fbeee6">

                   <strong><label for="validationCustom01" class="form-label">PAÍS:</label></strong>

                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PAIS; ?>" required="" name="PAIS">

                     <div class="valid-feedback">Looks good!</div>

                   </div>

                  

                     <input type="hidden" value="dircasa11" name="dircasa11"/>

                     <input type="hidden" value="" name="registro_id"/>







       <div style="width: 80%; height 400px;"  >

    



                

       <strong> <label >UBICACIÓN EN EL MAPA: COPIAR LINK</label></strong>



                

    <a href="https://www.google.com.gt/maps/@<?php echo $valor1 ?>,<?php echo $valor2 ?>,15z" target="_blank">(GOOGLE MAPS)</a>



    <input style="background: #eef5fa"  type="text" id="search_location" id="validationCustom01" class="form-control" placeholder="Search location"  name="DIRECCION_DE_CASA_1_UBICACION_MAPA" value="<?php echo $DIRECCION_DE_CASA_1_UBICACION_MAPA; ?>">

    <div class="valid-feedback">Looks good!</div>

                  </div>





 

                  <div> 

                          

	<div style="float:left;"border="solid 1px #000;">

  

<?php if($conexion->variablespermisos('','DIRECCION_DE_CASA_1','guardar')=='si'){ ?>





@@ -133,31 +134,52 @@ if($fechaIngresoDIR1==true){
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





id="mensajeDIRCASA1"/>



 

	</div><?php } ?>

	</div>

                         </form>   

                         </form>



<?php $registrosDirCasa1 = $conexion->listado_dircasa1(); ?>

<div class="table-responsive mt-4" id="tablaDIRCASA1">

<table class="table table-striped table-bordered">

<thead><tr style="text-align:center;background:#c9e8e8"><th>AUTORIZADA</th><th>EDIFICIO</th><th>CALLE</th><th>NÚMERO</th><th>COLONIA</th><th>CIUDAD / ESTADO</th><th>ACCIONES</th></tr></thead>

<tbody>

<?php while($registroDirCasa1 = mysqli_fetch_array($registrosDirCasa1, MYSQLI_ASSOC)){ ?>

<tr style="text-align:center">

<td><?php echo htmlspecialchars($registroDirCasa1['AUTORIZA_1']); ?></td>

<td><?php echo htmlspecialchars($registroDirCasa1['EDIFICIO']); ?></td>

<td><?php echo htmlspecialchars($registroDirCasa1['calledir1']); ?></td>

<td><?php echo htmlspecialchars($registroDirCasa1['NUMERO_EXTERIOR']); ?></td>

<td><?php echo htmlspecialchars($registroDirCasa1['COLONIA']); ?></td>

<td><?php echo htmlspecialchars($registroDirCasa1['CIUDAD'].' / '.$registroDirCasa1['ESTADO']); ?></td>

<td>

<?php if($conexion->variablespermisos('','DIRECCION_DE_CASA_1','modificar')=='si'){ ?><button type="button" class="btn btn-info btn-xs modificar-multiregistro" data-form="DIRCASA1form" data-registro="<?php echo htmlspecialchars(base64_encode(json_encode($registroDirCasa1)), ENT_QUOTES, 'UTF-8'); ?>">MODIFICAR</button><?php } ?>

<?php if($conexion->variablespermisos('','DIRECCION_DE_CASA_1','borrar')=='si'){ ?><button type="button" class="btn btn-info btn-xs borrar-multiregistro" data-accion="borrar_dircasa1" data-id="<?php echo (int)$registroDirCasa1['id']; ?>" data-tabla="tablaDIRCASA1">BORRAR</button><?php } ?>

</td></tr>

<?php } ?>

</tbody></table></div>



						 

                          </div>

						   </div>

						 </div>

						 </div>