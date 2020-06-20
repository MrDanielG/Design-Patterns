<?php
namespace Flyweight;

require_once 'FabricaOpcion.class.php';
require_once 'VehiculoSolicitado.class.php';

$fabrica = new FabricaOpcion();
$vehiculo = new VehiculoSolicitado();
$vehiculo->agregaOpciones('air bag', 80, $fabrica);
$vehiculo->agregaOpciones('direccion asistida', 90, $fabrica);
$vehiculo->agregaOpciones('vidrios electricos', 85, $fabrica);
$vehiculo->visualizaOpciones();

?>