<?php 
	require_once("../includes/superior.php");
?>
<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <a href="./index.php?m=nuevo_cliente" class="btn btn-success icon-user-add">Nuevo cliente</a>    
            </div>    
        </div>    
    </div>    
<br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres y apellidos</th>
                                    <th>Dirección</th>                    
                                    <th>Celular</th>
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
                                <td><?php echo $v["id_cliente"] ?></td>
                                <td><?php echo $v["nombre_cliente"] ?></td>
                                <td><?php echo $v["direccion_cliente"] ?></td> 
                                <td><?php echo $v["telefono_cliente"] ?></td>
                                <td class="contenedor-btn_editar"><a class="btn_editar" href=""><i class="icon-pencil"></a></td>
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