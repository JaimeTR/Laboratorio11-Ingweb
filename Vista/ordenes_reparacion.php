<?php 
	require_once("../includes/superior.php");
?>
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>Código</th>           
                                    <th>Mecánico</th>
                                    <th>Cliente</th>
                                    <th>Modelo vehículo</th> 
                                    <th>Marca</th>
                                    <th>Matrícula</th>
                                    <th>Fecha de entrada a taller</th>
                                    <th>Estado de orden</th>
                                    <th>Acción</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                               if(!empty($dato)):
                                   foreach($dato as $key => $value)
                                       foreach($value as $v):?>        
                            <tr>
                                <td><?php echo $v['codigo_orden'] ?></td>
                                <td><?php echo $v['nombre_mecanico'] ?></td> 
                                <td><?php echo $v['nombre_cliente'] ?></td>
                                <td><?php echo $v['modelo_vehiculo'] ?></td>
                                <td><?php echo $v['marca_vehiculo'] ?></td>
                                <td><?php echo $v['matricula_vehiculo'] ?></td>
                                <td><?php echo $v['fecha_entrada'] ?></td>
                                <?php if($v['estado_orden'] == 1){ ?>
                                    <td>Vehículo en reparación</td>
                                <?php } elseif($v['estado_orden'] == 2) { ?>
                                    <td>Orden completa</td>
                                <?php } ?>
                                <td class="contenedor-btn_editar"><a class="btn_editar" href=""><i class="icon-logout"></a></td>
                                <td class="contenedor-btn_eliminar"><a class="btn_eliminar"><i class="icon-trash"></i></a></td>
                            </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                            </tbody>  
                            <?php endif ?> 
                       </table>                    
	                </div>
	            </div>
	        </div>  
	    </div>             
	</div>
<?php
	require_once("../includes/inferior.php");
 ?>