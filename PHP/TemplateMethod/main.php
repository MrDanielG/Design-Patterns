<?php
namespace TemplateMethod;

require_once 'PedidoMexico.class.php';
require_once 'PedidoGuatemala.class.php';

$pedidoMexico = new PedidoMexico();
$pedidoMexico->setImporteSinIVA(10000);
$pedidoMexico->calculaImporteIVA();
$pedidoMexico->visualiza();

$pedidoGuatemala = new PedidoGuatemala();
$pedidoGuatemala->setImporteSinIVA(10000);
$pedidoGuatemala->calculaImporteIVA();
$pedidoGuatemala->visualiza();

?>
