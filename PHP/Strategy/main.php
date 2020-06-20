<?php
namespace Strategy;

require_once 'VistaCatalogo.class.php';
require_once 'DibujaTresVehiculosLinea.class.php';
require_once 'DibujaUnVehiculoLinea.class.php';

$vistaCatalogo1 = new VistaCatalogo(new DibujaTresVehiculosLinea());
$vistaCatalogo1->dibuja();

$vistaCatalogo2 = new VistaCatalogo(new DibujaUnVehiculoLinea());
$vistaCatalogo2->dibuja();

?>
