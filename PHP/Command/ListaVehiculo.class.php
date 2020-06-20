<?php
namespace Command;

require_once 'Vehiculo.class.php';

class ListaVehiculo implements \IteradorAgregado {
    
    /**
     * 
     * @var \ArrayObject
     */
    private $vehiculos;
    
    public function __construct(){
        $this->vehiculos = new \ArrayObject();
    }
    
    /**
     * 
     * @param Vehiculo $vehiculo
     */
    public function anexa (Vehiculo $vehiculo) {
        $this->vehiculos->anexa($vehiculo);
    }
    
    public function getIterator () {
        return $this->vehiculos->getIterator();
    }
}

?>
