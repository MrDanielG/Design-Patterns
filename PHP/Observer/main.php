<?php
namespace Observer;

require_once 'Vehiculo.class.php';
require_once 'VistaVehiculo.class.php';

$vehiculo = new Vehiculo();
$vehiculo->setDescripcion('Vehiculo barato');
$vehiculo->setPrecio(5000.0);

$vistaVehiculo = new VistaVehiculo('Observador 1', $vehiculo);
$vistaVehiculo->redibuja();
$vehiculo->setPrecio(4500.0);

$vistaVehiculeo = new VistaVehiculo('Observador 2', $vehiculo);
$vehiculo->setPrecio(5500.0);

$vehiculo->suprime($vistaVehiculo);
$vehiculo->setPrecio(6500.0);

?>
