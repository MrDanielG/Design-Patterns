<?php
namespace FactoryMethod;

require_once 'ClienteContado.class.php';
require_once 'ClienteCredito.class.php';

$cliente = new ClienteContado();
$cliente->nuevoPedido(2000.0);
$cliente->nuevoPedido(10000.0);

$cliente = new ClienteCredito();
$cliente->nuevoPedido(2000.0);
$cliente->nuevoPedido(10000.0);

?>