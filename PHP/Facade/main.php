<?php
namespace Facade;

require_once 'Outils.class.php';
require_once 'WebServiceAutoImpl.class.php';

$webServiceAuto = new WebServiceAutoImpl();
\Outils::println($webServiceAuto->documento(0));
\Outils::println($webServiceAuto->documento(1));

$resultados = $webServiceAuto->buscaVehiculos(6000, 1000); 
if (count($resultados) > 0)
{
    \Outils::println('Vehiculo(s) cuyo precio esta comprendido ' .
            'entre 5000 et 7000');
    foreach ($resultados as $resultado)
    {
        \Outils::println("   $resultado");
    }
}
?>
