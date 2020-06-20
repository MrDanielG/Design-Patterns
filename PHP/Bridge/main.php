<?php
namespace Bridge;

require_once 'Outils.class.php';
require_once 'FormularioEmplacamientoGuatemala.class.php';
require_once 'FormHtmlImpl.class.php';
require_once 'FormularioEmplacamientoMexico.class.php';
require_once 'FormAppletImpl.class.php'; 
                                   

$formulario1 = new FormularioEmplacamientoGuatemala(new FormHtmlImpl());
$formulario1->visualiza();
if ($formulario1->administraZona())
{
    $formulario1->generaDocumento();
}
\Outils::println();

$formulario2 = new FormularioEmplacamientoMexico(new FormAppletImpl());
$formulario2->visualiza();
if ($formulario2->administraZona())
{
    $formulario2->generaDocumento();
}
?>