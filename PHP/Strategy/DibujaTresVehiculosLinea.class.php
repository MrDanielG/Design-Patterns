<?php
namespace Strategy;

require_once 'DibujaCatalogo.class.php';
require_once 'ListaVistaVehiculo.class.php';
require_once 'Outils.class.php';

class DibujaTresVehiculosLinea implements DibujaCatalogo
{

    /**
     * @param ListaVistaVehiculo $contenido
     */
    public function dibuja(ListaVistaVehiculo $contenido)
    {
        \Outils::println('Dibuja los vehiculos con tres '
                . 'vehiculos por linea');
        $contador = 0;
        foreach ($contenido as $vistaVehiculo)
        {
            $vistaVehiculo->dibuja();
            $contador++;
            if ($contador === 3)
            {
                \Outils::println();
                $contador = 0;
            }
            else
            {
                \Outils::prt(" ");
            }
        }
        if ($contador !== 0)
        {
            \Outils::println();
        }
        \Outils::println();
    }
}


?>
