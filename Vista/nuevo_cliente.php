<?php require_once("../includes/superior.php"); ?>
	<br>
	<h1 align="center">Registrar cliente</h1>
	<form action="" method="get">
		<div class="contenedor_formulario">
			<input type="text" name="txtdatoscliente" required="required" maxlength="40" placeholder="Nombres y apellidos"><br>
			<input type="text" name="txtdireccioncliente" maxlength="60" required="required" placeholder="Dirección de domicilio"><br>
			<input type="text" name="txttelefono" maxlength="9" required="required" placeholder="Teléfono"><br>
			<input type="submit" class="btnNuevo" name="nueva_orden" value="Registrar cliente">
			<input type="hidden" name="m" value="registrar_cliente">
			</div>
	</form>
<?php require_once("../includes/inferior.php"); ?>