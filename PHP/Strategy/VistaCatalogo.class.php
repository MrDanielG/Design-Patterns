<?php
namespace Strategy;

require_once 'DibujaCatalogo.class.php';
require_once 'VistaVehiculo.class.php';
require_once 'ListaVistaVehiculo.class.php';

class VistaCatalogo
{
    /**
     * 
     * @var ListaVistaVehiculo
     */
    protected $contenido;
    /**
     * 
     * @var DibujaCatalogo
     */
    protected $dibujo;

    /**
     * 
     * @param DibujaCatalogo $dibujo
     */
    public function __construct(DibujaCatalogo $dibujo)
    {
        $this->contenido = new ListaVistaVehiculo();
        $this->contenido->append(
          new VistaVehiculo('vehiculo barato'));
        $this->contenido->append(
          new VistaVehiculo('vehiculo espacioso'));
        $this->contenido->append(
          new VistaVehiculo('vehiculo rapido'));
        $this->contenido->append(
          new VistaVehiculo('vehiculo confortable'));
        $this->contenido->append(
         new VistaVehiculo('vehiculo deportivo'));
        
        $this->dibujo = $dibujo;
    }

    public function dibuja()
    {
        $this->dibujo->dibuja($this->contenido);
    }
}


?>
