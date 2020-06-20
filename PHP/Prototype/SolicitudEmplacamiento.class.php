<?php
namespace Prototype;

require_once 'Documento.class.php';
require_once 'Outils.class.php';

class SolicitudEmplacamiento extends Documento
{
    public function visualiza()
    {
        \Outils::println(
        "Muestra la solicitud de emplacamiento : $this->contenido");
    }

    public function imprime()
    {
        \Outils::println(
        "Imprime la solicitud de emplacamiento : $this->contenido");
    }
}


?>
