<?php
namespace Proxy;

require_once 'Animacion.class.php';
require_once 'Video.class.php';
require_once 'Outils.class.php';

class AnimacionProxy implements Animacion
{
    protected $video = null;
    protected $foto = 'visualizacion de la foto';

    public function clic()
    {
        if (!isset($this->video))
        {
            $this->video = new Video();
            $this->video->carga();
        }
        $this->video->reproduce();
    }

    public function dibuja()
    {
        if (isset($this->video)) 
        {
            $this->video->dibuja();
        }
        else
        {
            $this->dibujaFoto($this->foto);
        }
    }

    public function dibujaFoto($foto)
    {
        \Outils::println($this->foto);
    }
}


?>
