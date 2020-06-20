<?php
namespace Facade;

interface Catalogo
{

    /**
     *
     * @param int $precioMin            
     * @param int $precioMax            
     * @return "Lista de string"
     */
    function recuperaVehiculos($precioMin, $precioMax);
}

?>
