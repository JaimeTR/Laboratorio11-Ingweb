<?php require_once("../includes/superior.php"); ?>
	<br>
	<h1 align="center">Registrar orden</h1>
	<form action="" method="get">
		<div class="contenedor_formulario">
			<select name="sltccliente" class="select">
				<option>Seleccione cliente: </option>	
			<?php
	         	if(!empty($datos_cliente)):
	               foreach($datos_cliente as $key => $value)
	                   foreach($value as $v1):?>
				<option value="<?php echo $v1['id_cliente']; ?>"><?php echo $v1['nombre_cliente']; ?></option>
				<?php endforeach; ?>
	        <?php else: ?>
			<?php endif ?>
			</select><br>
			<select name="sltcmecanico" class="select">
				<option>Seleccione mecánico: </option>	
			<?php
	         	if(!empty($datos_mecanico)):
	               foreach($datos_mecanico as $key => $value2)
	                   foreach($value2 as $v2):?>
				<option value="<?php echo $v2['id_mecanico']; ?>"><?php echo $v2['nombre_mecanico']; ?></option>
				<?php endforeach; ?>
	        <?php else: ?>
			<?php endif ?>
			</select><br>
			<select name="sltcvehiculo" class="select">
				<option>Seleccione vehículo: </option>	
			<?php
	         	if(!empty($datos_vehiculo)):
	               foreach($datos_vehiculo as $key => $value3)
	                   foreach($value3 as $v3):?>
				<option value="<?php echo $v3['id_vehiculo']; ?>"><?php echo $v3['modelo_vehiculo']; ?></option>
				<?php endforeach; ?>
	        <?php else: ?>
			<?php endif ?>
			</select><br>
			<input type="text" name="txtmatricula" placeholder="Matrícula del vehículo" required="required"><br>
			<input type="date" name="txtfechaentrada" min="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" required="required"><br>
			<input type="submit" class="btnNuevo" name="nueva_orden" value="Registrar orden">
			<input type="hidden" name="m" value="registrar_orden">
		</div>
	</form>
<?php require_once("../includes/inferior.php"); ?>