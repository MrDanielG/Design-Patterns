<?php
namespace Decorator;

require_once 'Outils.class.php';
require_once 'Decorador.class.php';
require_once 'ComponenteGraficoVehiculo.class.php';

class ModeloDecorador extends Decorador
{

    /**
     *
     * @param ComponenteGraficoVehiculo $componente            
     */
    public function __construct(ComponenteGraficoVehiculo $componente)
    {
        parent::__construct($componente);
    }

    protected function visualizaInfoTecnica()
    {
        \Outils::println('Informacion tecnica del modelo');
    }

    public function visualiza()
    {
        parent::visualiza();
        $this->visualizaInfoTecnica();
    }
}

?>
