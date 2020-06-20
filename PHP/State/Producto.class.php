<?php
namespace State;

require_once 'Outils.class.php';
class Producto
{
    /**
     * 
     * @var string
     */
    protected $nombre;

    /**
     * 
     * @param string $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function visualiza()
    {
        \Outils::println("Producto : $this->nombre");
    }
}


?>
