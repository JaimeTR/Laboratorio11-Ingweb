<?php

class Modelo{

    private $Modelo;

    private $db;    

    private $datos;
     
    private $clientes;

    private $mecanicos;

    private $vehiculos;

    private $ordenes;

    public function __construct(){

        $this->Modelo = array();

        $this->db = new PDO('mysql:host=localhost;dbname=mecanica',"root","");

    }

    //Mostrar clientes

    public function mostrar_clientes($tabla, $condicion){

        $consulta = "select * from ".$tabla.";";

        $resultado = $this->db->query($consulta);

        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){

            $this->clientes[]=$filas;

        }

        return $this->clientes;

    }

    //Registrar cliente

    public function registrar_cliente($tabla, $data){

        $consulta = "insert into ".$tabla." ".$data;

        $resultado = $this->db->query($consulta);

        if($resultado){

            return true;

        } else {

            return false;

        }

    }

    //Mostrar mecánicos

    public function mostrar_mecanicos($tabla, $condicion){

	    $consulta = "select * from ".$tabla;

	    $resultado = $this->db->query($consulta);

	    while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){

	    	$this->mecanicos[]=$filas;

	    }

	    return $this->mecanicos;

	}

    //Registrar mecánicos

    public function registrar_mecanico($tabla, $data){

        $consulta = "insert into ".$tabla." ".$data;

        $resultado = $this->db->query($consulta);

        if($resultado){

            return true;

        } else {

            return false;

        }

    }

    //Mostrar órdenes de reparación

    public function mostrar_ordenesReparacion($tabla, $condicion){

        $consulta = "select o.id_orden, o.codigo_orden, m.nombre_mecanico, c.nombre_cliente, v.modelo_vehiculo, v.marca_vehiculo, o.matricula_vehiculo, o.fecha_entrada, o.estado_orden FROM ".$tabla." o
            inner join cliente c on o.id_cliente = c.id_cliente
            inner join vehiculo v on o.id_vehiculo = v.id_vehiculo
            inner join mecanico m on o.id_mecanico = m.id_mecanico";

        $resultado = $this->db->query($consulta);

        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){

            $this->ordenes[]=$filas;

        }

        return $this->ordenes;

    }

    //Nueva orden de reparación

    public function registrar_ordenReparacion($tabla, $data){

        $consulta = "insert into ".$tabla." ".$data;

        $resultado = $this->db->query($consulta);

        if($resultado){

            return true;

        } else {

            return false;

        }

    }

    //Mostrar vehículos

    public function mostrar_vehiculos($tabla, $condicion){

        $consulta = "select * from ".$tabla.";";

        $resultado = $this->db->query($consulta);

        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){

            $this->vehiculos[]=$filas;

        }

        return $this->vehiculos;

    }

    //Nuevo vehículo

     public function registrar_vehiculo($tabla, $data){

        $consulta = "insert into ".$tabla." ".$data;

        $resultado = $this->db->query($consulta);

        if($resultado){

            return true;

        } else {

            return false;

        }

    }

}