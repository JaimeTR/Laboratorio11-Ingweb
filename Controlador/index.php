<?php 

	require_once("../modelo/index.php");

	class modeloController{

    private $model;

    public function __construct(){

        $this->model = new Modelo();

    }

    //Mostrar presentación de interfaz

    static function index(){

        require_once("../vista/presentacion.php");

    }

    //Mostrar listado de ordenes de reparacion

    static function ordenes_reparacion(){

        $ordenes_reparacion = new Modelo();

        $dato = $ordenes_reparacion->mostrar_ordenesReparacion("orden","1");

        require_once("../vista/ordenes_reparacion.php");

    }

    //Mostrar formulario para nueva orden

    static function mostrar_datos_generales(){

        $datos_generales = new Modelo();

        $datos_cliente = $datos_generales->mostrar_clientes("cliente","1");

        $datos_mecanico = $datos_generales->mostrar_mecanicos("mecanico","1");

        $datos_vehiculo = $datos_generales->mostrar_vehiculos("vehiculo","1");

        require_once("../vista/nueva_orden.php");

    }

    //Registrando orden de reparación

    static function registrar_orden(){

        $codigo_orden = "GT14110";

        $mecanico = $_REQUEST['sltcmecanico'];

        $cliente = $_REQUEST['sltccliente'];

        $vehiculo = $_REQUEST['sltcvehiculo'];

        $matricula_vehiculo = $_REQUEST['txtmatricula'];

        $fecha_entrada = $_REQUEST['txtfechaentrada'];

        $estado_orden = 1;

        $registrar_orden = new Modelo();

        $data = "(id_orden, codigo_orden, id_mecanico, id_cliente, id_vehiculo, matricula_vehiculo, fecha_entrada, estado_orden) values (null, '".$codigo_orden."', ".$mecanico.", ".$cliente.", ".$vehiculo.", '".$matricula_vehiculo."', ".$fecha_entrada.", ".$estado_orden.");";

        $dato = $registrar_orden->registrar_ordenReparacion("orden",$data);

        header("location: ../admin/index.php");

    }

    //Mostrar listado de clientes

    static function listado_clientes(){

        $listado_clientes = new Modelo();

        $dato = $listado_clientes->mostrar_clientes("cliente","1");

        require_once("../vista/listado_clientes.php");

    }

    //Mostrar listado de mecánicos

    static function listado_mecanicos(){

        $listado_mecanicos = new Modelo();

        $dato = $listado_mecanicos->mostrar_mecanicos("mecanico","1");

        require_once("../vista/listado_mecanicos.php");

    }

    //Nuevo mecánico

    static function nuevo_mecanico(){

        require_once("../vista/nuevo_mecanico.php");

    }

    //Mostrar listado de vehículos

    static function listado_vehiculos(){

        $listado_vehiculos = new Modelo();

        $dato = $listado_vehiculos->mostrar_vehiculos("vehiculo","1");

        require_once("../vista/listado_vehiculos.php");

    }

    static function registrar_mecanico(){

        $datos_mecanico = $_REQUEST['txtdatosmecanico'];

        $direccion_mecanico = $_REQUEST['txtdireccionmecanico'];

        $telefono_mecanico = $_REQUEST['txttelefonomecanico'];

        $costo_hora_mecanico = $_REQUEST['txtcostehora'];

        $data = "(id_mecanico, nombre_mecanico, direccion_mecanico, telefono_mecanico, costo_hora_mecanico) values (null, '".$datos_mecanico."', '".$direccion_mecanico."', ".$telefono_mecanico.", ".$costo_hora_mecanico.");";

        $mecanico = new Modelo();

        $dato = $mecanico->registrar_mecanico("mecanico",$data);

        header("location: ../admin/index.php?m=listado_mecanicos");

    }

    //Nuevo vehículo

    static function nuevo_vehiculo(){

        require_once("../vista/nuevo_vehiculo.php");

    }

    static function registrar_vehiculo(){

        $modelo_vehiculo = $_REQUEST['txtmodelovehiculo'];

        $color_vehiculo = $_REQUEST['txtcolorvehiculo'];

        $marca_vehiculo = $_REQUEST['txtmarcavehiculo'];

        $anio_vehiculo = $_REQUEST['txtaniovehiculo'];

        $data = "(id_vehiculo, modelo_vehiculo, color_vehiculo, marca_vehiculo, anio_vehiculo) values (null, '".$modelo_vehiculo."', '".$color_vehiculo."', '".$marca_vehiculo."', ".$anio_vehiculo.");";

        $vehiculo = new Modelo();

        $dato = $vehiculo->registrar_vehiculo("vehiculo",$data);

        header("location: ../admin/index.php?m=listado_vehiculos");

    }

    //Nuevo cliente

    static function nuevo_cliente(){

        require_once("../vista/nuevo_cliente.php");

    }

    static function registrar_cliente(){

        $datos_cliente = $_REQUEST['txtdatoscliente'];

        $direccion_cliente = $_REQUEST['txtdireccioncliente'];

        $telefono_cliente = $_REQUEST['txttelefono'];

        $data = "(id_cliente, nombre_cliente, direccion_cliente, telefono_cliente) values (null, '".$datos_cliente."', '".$direccion_cliente."', ".$telefono_cliente.");";

        $cliente = new Modelo();

        $dato = $cliente->registrar_cliente("cliente",$data);

        header("location: ../admin/index.php?m=listado_clientes");

    }

}

?>