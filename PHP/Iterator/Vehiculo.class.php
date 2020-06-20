<?php
namespace Iterator;

require_once 'Outils.class.php';
require_once 'Elemento.class.php';

class Vehiculo extends Elemento
{
    /**
     * 
     * @param string $descripcion
     */
    public function __construct($descripcion)
    {
        parent::__construct($descripcion);
    }

    public function visualiza()
    {
        \Outils::println(
                "Descripcion del vehiculo : $this->descripcion");
    }
}
?>
