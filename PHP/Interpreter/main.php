<?php
namespace Interpreter;

require_once 'Outils.class.php';
require_once 'Expresion.class.php';


$expresionConsulta = null;
$consulta = \Outils::readln('Escribir tu consulta : ');
try
{
    $expresionConsulta = Expresion::analisis($consulta);
}
catch (\Exception $e)
{
    \Outils::println($e->getMessage());
    $expresionConsulta = null;
}
if (isset($expresionConsulta))
{
    $description = \Outils::readln(
            'Escribir el texto de descripcion de un vehiculo : ');
    if ($expresionConsulta->evalua($description))
    {
        \Outils::println('La descripcion responde a la consulta');
    }
    else
    {
        \Outils::println(
                'La descripcion no responde a la consulta');
    }
}

?>
