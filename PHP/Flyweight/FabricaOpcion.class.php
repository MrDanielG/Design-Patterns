<?php
namespace Flyweight;

require_once 'Outils.class.php';
require_once 'OpcionVehiculo.class.php';

class FabricaOpcion
{
    /**
     * 
     * @var "array string, OpcionVehiculo"
     */
    protected $opciones = array();
    
    /**
     *
     * @param string $nombre            
     * @return OpcionVehiculo
     */
    public function getOpcion($nombre)
    {
        if (array_key_exists($nombre, $this->opciones))
        {
            $resultado = $this->opciones[$nombre];
        }
        else
        {
            $resultado = new OpcionVehiculo($nombre);
            $this->opciones[$nombre] = $resultado;
        }
        return $resultado;
    }
}

?>
