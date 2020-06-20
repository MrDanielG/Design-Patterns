<?php
namespace Prototype;

require_once 'DocumentacionEnBlanco.class.php';
require_once 'OrdenDePedido.class.php';
require_once 'CertificadoCesion.class.php';
require_once 'SolicitudEmplacamiento.class.php';
require_once 'DocumentacionCliente.class.php';

// inicializacion de la documentacion en blanco
$DocumentacionEnBlanco = DocumentacionEnBlanco::Instancia();
$DocumentacionEnBlanco->incluye(new OrdenDePedido());
$DocumentacionEnBlanco->incluye(new CertificadoCesion());
$DocumentacionEnBlanco->incluye(new SolicitudEmplacamiento());
// creacion de una nueva documentacion para dos clientes
$DocumentacionCliente1 = new DocumentacionCliente('Marciano');
$DocumentacionCliente2 = new DocumentacionCliente('Diaz');
$DocumentacionCliente1->visualiza();
$DocumentacionCliente2->visualiza();

?>