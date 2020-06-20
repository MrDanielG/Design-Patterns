<?php
namespace Memento;

require_once 'Outils.class.php';
require_once 'OpcionVehiculo.class.php';
require_once 'Memento.class.php';
require_once 'MementoImpl.class.php';

class CarritoOpcion
{
    /**
     * @var ListaOpcionVehiculo
     */
    protected $opciones;

    public function __construct()
    {
        $this->opciones = new ListaOpcionVehiculo();
    }
    
    /**
     * 
     * @param OpcionVehiculo $opcionVehiculo
     * @return Memento
     */
    public function agregaOpcion(OpcionVehiculo
            $opcionVehiculo)
    {
        $resultado = new MementoImpl();
        $resultado->setEstado($this->opciones);
        $this->opciones->removeAll(
         $opcionVehiculo->getOpcionesIncompatibles());
        $this->opciones->add($opcionVehiculo);
        return $resultado;
    }

    /**
     * 
     * @param Memento $memento
     */
    public function anula(Memento $memento)
    {
        if (method_exists($memento, 'getEstado')) {
            $this->opciones = $memento->getEstado();
        }
    }

    /**
     * @return void
     */
    public function visualiza()
    {
        \Outils::println('Contenido del carrito de opciones');
        foreach ($this->opciones as $opcion) {
            $opcion->visualiza();
        }
        \Outils::println();
    }
}

?>
