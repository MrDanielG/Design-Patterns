<?php
namespace Memento;

require_once 'Memento.class.php';
require_once 'ListaOpcionVehiculo.class.php';

class MementoImpl implements Memento
{
    /**
     * @var ListaOpcionVehiculo
     */
    protected $opciones;

    
    public function __construct() {
        $this->opciones = new ListaOpcionVehiculo();
    }
    
    /**
     * 
     * @param ListaOpcionVehiculo $opciones
     */
    public function setEstado(ListaOpcionVehiculo $opciones)
    {
        $this->opciones->clear();
        $this->opciones->addAll($opciones);
    }

    /**
     * 
     * @return ListaOpcionVehiculo
     */
    public function getEstado()
    {
        return $this->opciones;
    }
}


?>
