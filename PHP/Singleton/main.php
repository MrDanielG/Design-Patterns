<?php
namespace Singleton;

require_once 'Vendedor.class.php';

function visualiza()
{
    $elVendedor = Vendedor::Instancia();
    $elVendedor->visualiza();
}

// inicializacion de vendedor del sistema
$elVendedor = Vendedor::Instancia();
$elVendedor->setNombre("Vendedor de Auto");
$elVendedor->setDireccion("Puebla");
$elVendedor->setEmail("vendedor@gmail.com");
// visualizacion del vendedor del sistema
visualiza();

?>
