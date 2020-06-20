<?php
namespace Bridge;

require_once 'Outils.class.php';
require_once 'FormularioImpl.class.php';

class FormHtmlImpl implements FormularioImpl
{

    public function dibujaTexto($texto)
    {
        \Outils::println("HTML : $texto");
    }

    public function administraZonaIndicada()
    {
        return \Outils::readln();
    }
}
?>
