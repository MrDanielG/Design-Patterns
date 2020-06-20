<?php
namespace State;

require_once 'Pedido.class.php';
require_once 'Producto.class.php';

$pedido = new Pedido();
$pedido->agregaProducto(new Producto('vehiculo 1'));
$pedido->agregaProducto(new Producto('Accesorio 2'));
$pedido->visualiza();
$pedido->estadoSiguiente();
$pedido->agregaProducto(new Producto('Accesorio 3'));
$pedido->borra();
$pedido->visualiza();

$pedido2 = new Pedido();
$pedido2->agregaProducto(new Producto('vehiculo 11'));
$pedido2->agregaProducto(new Producto('Accesorio 21'));
$pedido2->visualiza();
$pedido2->estadoSiguiente();
$pedido2->visualiza();
$pedido2->estadoSiguiente();
$pedido2->borra();
$pedido2->visualiza();

?>
