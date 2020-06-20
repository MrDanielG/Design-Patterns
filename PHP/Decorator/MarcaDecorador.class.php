<?php
namespace Decorator;

require_once 'Outils.class.php';
require_once 'Decorador.class.php';
require_once 'ComponenteGraficoVehiculo.class.php';

class MarcaDecorador extends Decorador
{

    /**
     *
     * @param ComponenteGraficoVehiculo $componente            
     */
    public function __construct(ComponenteGraficoVehiculo $componente)
    {
        parent::__construct($componente);
    }

    protected function visualizaLogo()
    {
        \Outils::println('Logo de la marca');
    }

    public function visualiza()
    {
        parent::visualiza();
        $this->visualizaLogo();
    }
}

?>
