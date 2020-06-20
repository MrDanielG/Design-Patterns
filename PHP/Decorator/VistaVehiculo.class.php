<?php
namespace Decorator;

require_once 'Outils.class.php';
require_once 'ComponenteGraficoVehiculo.class.php';

class VistaVehiculo implements ComponenteGraficoVehiculo
{

    public function visualiza()
    {
        \Outils::println('Visualizacion del vehiculo');
    }
}

?>
