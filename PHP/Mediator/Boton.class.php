<?php
namespace Mediator;

require_once 'Outils.class.php';
require_once 'Control.class.php';

class Boton extends Control
{

    /**
     *
     * @param string $nombre            
     */
    public function __construct($nombre)
    {
        parent::__construct($nombre);
    }

    /**
     *
     * @return void
     */
    public function informa()
    {
        $respuesta = \Outils::readln(
                'Deseas activar el boton ' . "$this->nombre (si / no) ? : ");
        if ($respuesta === 'si')
        {
            $this->modifica();
        }
    }
}

?>
