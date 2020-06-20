<?php
namespace Decorator;

require_once 'ComponenteGraficoVehiculo.class.php';

abstract class Decorador implements ComponenteGraficoVehiculo
{
    /**
     * 
     * @var ComponenteGraficoVehiculo
     */
    protected $componente;
    
    /**
     *
     * @param ComponenteGraficoVehiculo $componente            
     */
    public function __construct(ComponenteGraficoVehiculo $componente)
    {
        $this->componente = $componente;
    }

    public function visualiza()
    {
        $this->componente->visualiza();
    }
}
?>
