<?php
namespace Memento;

require_once 'OpcionVehiculo.class.php';
require_once 'CarritoOpcion.class.php';

$opcion1 = new OpcionVehiculo('Asiento de cuero');
$opcion2 = new OpcionVehiculo('Apoyabrazos');
$opcion3 = new OpcionVehiculo('Asientos deportivos');
$opcion1->agregaOpcionIncompatible($opcion3);
$opcion2->agregaOpcionIncompatible($opcion3);

$carritoOpciones = new CarritoOpcion();
$carritoOpciones->agregaOpcion($opcion1);
$carritoOpciones->agregaOpcion($opcion2);
$carritoOpciones->visualiza();

$memento = $carritoOpciones->agregaOpcion($opcion3);
$carritoOpciones->visualiza();
$carritoOpciones->anula($memento);
$carritoOpciones->visualiza();

?>
