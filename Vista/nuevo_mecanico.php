<?php require_once("../includes/superior.php"); ?>
	<br>
	<h1 align="center">Registrar nuevo mecánico</h1>
	<form action="" method="get">
		<div class="contenedor_formulario">
			<input type="text" name="txtdatosmecanico" required="required" maxlength="40" placeholder="Nombres y apellidos"><br>
			<input type="text" name="txtdireccionmecanico" maxlength="60" required="required" placeholder="Dirección de domicilio"><br>
			<input type="text" name="txttelefonomecanico" maxlength="9" required="required" placeholder="Teléfono del mecánico"><br>
			<input type="number" name="txtcostehora" min="0" required="required" placeholder="Coste por hora"><br>
			<input type="submit" class="btnNuevo" name="nueva_orden" value="Registrar mecánico">
			<input type="hidden" name="m" value="registrar_mecanico">
		</div>
	</form>
<?php require_once("../includes/inferior.php"); ?>