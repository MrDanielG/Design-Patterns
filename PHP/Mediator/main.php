<?php
namespace Mediator;

require_once 'Formulario.class.php';
require_once 'ZonaInformacion.class.php';
require_once 'PopupMenu.class.php';
require_once 'Boton.class.php';

$formulario = new Formulario();
$formulario->agregaControl(new ZonaInformacion('Nombre'));
$formulario->agregaControl(new ZonaInformacion('Apellido'));
$menu = new PopupMenu('Coprestatario');
$menu->agregaOpcion('sin coprestatario');
$menu->agregaOpcion('con coprestatario');
$formulario->agregaControl($menu);
$formulario->setMenuCoprestatario($menu);
$boton = new Boton('OK');
$formulario->agregaControl($boton);
$formulario->setBotonOK($boton);
$formulario->agregaControlCoprestatario(new ZonaInformacion('Nombre del coprestatario'));
$formulario->agregaControlCoprestatario(new ZonaInformacion('Apellido del Coprestatario'));
$formulario->informa();

?>
