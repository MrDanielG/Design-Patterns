<?php
namespace Facade;

interface WebServiceAuto
{

    /**
     *
     * @param int $indice            
     * @return string
     */
    function documento($indice);

    /**
     *
     * @param int $precioMedio            
     * @param int $desviacionMax            
     * @return "Lista de string"
     */
    function buscaVehiculos($precioMedio, $desviacionMax);
}

?>
