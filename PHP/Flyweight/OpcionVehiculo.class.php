<?php
namespace Flyweight;

require_once 'Outils.class.php';

class OpcionVehiculo
{
    /**
     * 
     * @var string
     */
    protected $nombre;
    /**
     * 
     * @var string
     */
    protected $descripcion;
    /**
     * 
     * @var int
     */
    protected $precioEstandar; 
    
    /**
     *
     * @param string $nombre            
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->descripcion = "Descripcion de $nombre";
        $this->precioEstandar = 100;
    }

    /**
     *
     * @param int $precioDeVenta            
     */
    public function visualiza($precioDeVenta)
    {
        \Outils::println('Opcion');
        \Outils::println("Nombre : $this->nombre");
        \Outils::println($this->descripcion);
        \Outils::println(
                "Precio estandar : $this->precioEstandar");
        \Outils::println("Precio de venta : $precioDeVenta");
    }
}

?>
