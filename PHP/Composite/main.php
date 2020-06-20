<?php
namespace Composite;

require_once 'Outils.class.php';
require_once 'EmpresaSinFilial.class.php';
require_once 'EmpresaMadre.class.php';

$empresa1 = new EmpresaSinFilial();
$empresa1->agregaVehiculo();

$empresa2 = new EmpresaSinFilial();
$empresa2->agregaVehiculo();
$empresa2->agregaVehiculo();

$grupo = new EmpresaMadre();
$grupo->agregaFilial($empresa1);
$grupo->agregaFilial($empresa2);
$grupo->agregaVehiculo();

\Outils::println(
        ' Costo de mantenimiento total del grupo : ' . 
        number_format($grupo->calculaCostoMantenimiento(), 2, ',', ' '));

?>
