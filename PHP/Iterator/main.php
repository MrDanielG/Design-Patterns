<?php
namespace Iterator;

require_once 'Catalogo.class.php';
require_once 'Vehiculo.class.php';
require_once 'Iterador.class.php';

$catalogo = new Catalogo();
$catalogo->agrega(new Vehiculo('vehiculo barato'));
$catalogo->agrega(new Vehiculo('vehiculo pequegno barato'));
$catalogo->agrega(new Vehiculo('vehiculo de alta calidad'));
$iterador = $catalogo->busqueda('vehiculo');

$iterador->inicio();
$vehiculo = $iterador->item();
while (isset($vehiculo))
{
    $vehiculo->visualiza();
    $iterador->siguiente();
    $vehiculo = $iterador->item();
}

?>
