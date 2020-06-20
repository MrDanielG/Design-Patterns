<?php
namespace Strategy;

require_once 'Outils.class.php';

class VistaVehiculo
{
    /**
     * 
     * @var string
     */
    protected $descripcion;

    /**
     * 
     * @param string $descripcion
     */
    public function __construct($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return void
     */
    public function dibuja()
    {
        \Outils::prt($this->descripcion);
    }
}


?>
