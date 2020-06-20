<?php
namespace Proxy;

require_once 'Outils.class.php';

class Video implements Animacion
{
    public function clic(){}

    public function dibuja()
    {
        \Outils::println('Visualizacion del video');
    }

    public function carga()
    {
        \Outils::println('Cargando el video');
    }

    public function reproduce()
    {
        \Outils::println('Lectura del video');
    }
}


?>
