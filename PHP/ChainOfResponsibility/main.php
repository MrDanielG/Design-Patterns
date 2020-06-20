<?php
namespace ChainOfResponsibility;

require_once 'Outils.class.php';
require_once 'Vehiculo.class.php';
require_once 'Modelo.class.php';
require_once 'Marca.class.php';

$vehiculo1 = new Vehiculo(
        'Auto++ KT500 Vehiculo de ocasion en buen estado ');
\Outils::println($vehicul11->datoDescripcion());

$modelo1 = new Modelo('KT400', 
        'El vehiculo espacioso es confortable');
$vehiculo2 = new Vehiculo();
$vehiculo2->setSiguiente($modelo1);
\Outils::println($vehiculo2->datoDescripcion());

$marca1 = new Marca('Auto++', 'La marca de los autos', 
        'de gran calidad');
$modelo2 = new Modelo('KT700');
$modelo2->setSiguiente($marca1);
$vehiculo3 = new Vehiculo();
$vehiculo3->setSiguiente($modelo2);
\Outils::println($vehiculo3->datoDescripcion());

$vehiculo4 = new Vehiculo();
\Outils::println($vehiculo4->datoDescripcion());

?>
