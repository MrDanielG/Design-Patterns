<?php
namespace Builder;

require_once 'Outils.class.php';
require_once 'ConstructorDocumentacionVehiculoHtml.class.php';
require_once 'ConstructorDocumentacionVehiculoPdf.class.php';
require_once 'Vendedor.class.php';

$eleccion = \Outils::readln(
        'Deseas construir documentos HTML (1) o PDF (2) : ');
if ($eleccion == '1')
{
    $constructor = new ConstructorDocumentacionVehiculoHtml();
}
else
{
    $constructor = new ConstructorDocumentacionVehiculoPdf();
}

$vendedor = new Vendedor($constructor);
$documentacion = $vendedor->construye('Marciano');
$documentacion->imprime();

?>