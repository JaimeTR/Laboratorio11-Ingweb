<?php require_once("../includes/superior.php"); ?>
	<br>
	<h1 align="center">Registrar nuevo vehículo</h1>
	<form action="" method="get">
		<div class="contenedor_formulario">
			<input type="text" name="txtmodelovehiculo" required="required" maxlength="60" placeholder="Modelo del vehículo"><br>
			<input type="text" name="txtcolorvehiculo" maxlength="10" required="required" placeholder="Color del vehículo"><br>
			<input type="text" name="txtmarcavehiculo" maxlength="10" required="required" placeholder="Marca del vehículo"><br>
			<input type="number" name="txtaniovehiculo" min="0" required="required" placeholder="Año del vehículo"><br>
			<input type="submit" class="btnNuevo" name="nueva_orden" value="Registrar vehículo">
			<input type="hidden" name="m" value="registrar_vehiculo">
		</div>
	</form>
<?php require_once("../includes/inferior.php"); ?>