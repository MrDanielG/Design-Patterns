<?php
namespace ChainOfResponsibility;

require_once 'ObjetoBasico.class.php';

class Vehiculo extends ObjetoBasico
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
    public function __construct($descripcion = null)
    {
        $this->descripcion = $descripcion;
    }

    protected function getDescripcion()
    {
        return $this->descripcion;
    }
}

?>
