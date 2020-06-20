<?php
namespace Bridge;

require_once 'Outils.class.php';
require_once 'FormularioImpl.class.php';

class FormAppletImpl implements FormularioImpl
{

    public function dibujaTexto($texto)
    {
        \Outils::println("Applet : $texto");
    }

    public function administraZonaIndicada()
    {
        return \Outils::readln();
    }
}

?>
