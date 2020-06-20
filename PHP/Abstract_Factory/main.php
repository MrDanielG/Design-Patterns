<?php
namespace AbstractFactory;

require_once 'Outils.class.php';
require_once 'FabricaVehiculoElectricidad.class.php';
require_once 'FabricaVehiculoGasolina.class.php';

define('NU_AUTOS', 3);
define('NU_SCOOTERS', 2);

$autos = array();
$scooters = array();
$eleccion = \Outils::readln(
    'Deseas utilizar vehiculos electricos (1) o' .
    ' de gasolina (2) : ');


if ($eleccion == '1')
{
    $fabrica = new FabricaVehiculoElectricidad();
}
else
{
    $fabrica = new FabricaVehiculoGasolina();
}

for ($index = 0; $index < NU_AUTOS; $index ++)
{
    $autos[$index] = $fabrica->creaAutomovil('estandar', 
            'amarillo', 6 + $index, 3.2);
}
for ($index = 0; $index < NU_SCOOTERS; $index ++)
{
    $scooters[$index] = $fabrica->creaScooter('clasico', 
            'rojo', 2 + $index);
}

foreach ($autos as $auto)
{
    $auto->visualizaCaracteristicas();
}
foreach ($scooters as $scooter)
{
    $scooter->visualizaCaracteristicas();
}

?>
