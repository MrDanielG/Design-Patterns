<?php
namespace Memento;

require_once 'OpcionVehiculo.class.php';

class ListaOpcionVehiculo implements \IteratorAggregate
{
    
    /**
     *
     * @var \ArrayObject
     */
    private $opciones;
    
    public function __construct() {
        $this->opciones = new \ArrayObject();
    }
    
    public function clear()
    {
        $this->opciones = new \ArrayObject();
    }

    /**
     * 
     * @param OpcionVehiculo $opcion
     */
    public function add(OpcionVehiculo $opcion)
    {
        $this->opciones->append($opcion);
    }

    /**
     * 
     * @param ListaOpcionVehiculo $opciones
     */
    public function addAll(ListaOpcionVehiculo $opciones)
    {
        if (isset($opciones)) {
            foreach($opciones as $o) {
                $this->opciones->append($o);
            }
        }
    }
    
    /**
     * 
     * @param OpcionVehiculo $opcion
     */
    public function remove(OpcionVehiculo $opcion) {
        foreach ($this->opciones as $key => $val) {
            if ($val == $opcion) {
                $this->opciones->offsetUnset($key);
                break;
            }
        }
    }
    
    /**
     * 
     * @param ListaOpcionVehiculo $opciones
     */
    public function removeAll(ListaOpcionVehiculo $opciones) {
        foreach ($opciones as $opcion) {
            $this->remove($opcion);
        }
    }
    
    /**
     * 
     * @param OpcionVehiculo $opcion
     * @return boolean
     */
    public function contains(OpcionVehiculo $opcion) {
        foreach ($this->opciones as $key => $val) {
            if ($val == $opcion) {
                return true;
            }
        }
        return false;
    }
    
    public function getIterator () {
        return $this->opciones->getIterator();
    }
}

?>
