<?php
namespace Decorator;

require_once 'Outils.class.php';
require_once 'VistaVehiculo.class.php';
require_once 'ModeloDecorador.class.php';
require_once 'MarcaDecorador.class.php';

$vistaVehiculo = new VistaVehiculo();
$modeloDecorador = new ModeloDecorador($vistaVehiculo);
$marcaDecorador = new MarcaDecorador($modeloDecorador);
$marcaDecorador->visualiza();

?>