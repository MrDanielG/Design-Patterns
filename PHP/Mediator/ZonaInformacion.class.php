<?php
namespace Mediator;

require_once 'Control.class.php';
require_once 'Outils.class.php';

class ZonaInformacion extends Control
{
    /**
     * @param string $nombre
     */
    public function __construct($nombre)
    {
        parent::__construct($nombre);
    }

    public function informa()
    {
        $val = \Outils::readln("Informacion de <$this->nombre> : ");
        $this->modifica();
    }
}

?>
