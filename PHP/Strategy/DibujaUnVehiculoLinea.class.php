<?php
namespace Strategy;

require_once 'DibujaCatalogo.class.php';
require_once 'ListaVistaVehiculo.class.php';
require_once 'Outils.class.php';

class DibujaUnVehiculoLinea implements DibujaCatalogo
{

    /**
     * 
     * @param ListaVistaVehiculo $contenido
     */
    public function dibuja(ListaVistaVehiculo $contenido)
    {
        \Outils::println(
            'Dibuja los vehiculos con un vehiculo por linea');
        foreach ($contenido as $vistaVehiculo)
        {
            $vistaVehiculo->dibuja();
            \Outils::println();
        }
        \Outils::println();
    }
}


?>
