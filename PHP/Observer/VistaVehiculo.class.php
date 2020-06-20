<?php
namespace Observer;

require_once 'Outils.class.php';
require_once 'Observador.class.php';

class VistaVehiculo implements Observador
{
    /**
     * 
     * @var Vehiculo
     */
    protected $vehiculo;
    /**
     * 
     * @var string
     */
    protected $texto;
    /**
     * 
     * @var string
     */
    protected $nombreVista;
    
    /**
     *
     * @param string $nombreVista            
     * @param Vehiculo $vehiculo            
     */
    public function __construct($nombreVista, Vehiculo $vehiculo)
    {
        $this->nombreVista = $nombreVista;
        $this->vehiculo = $vehiculo;
        $vehiculo->agrega($this);
        $this->actualizaTexto();
    }

    protected function actualizaTexto()
    {
        $this->texto = $this->nombreVista . ' : "' .
                 $this->vehiculo->getDescripcion() . '", Precio : ' .
                 number_format($this->vehiculo->getPrecio(), 2, 
                        ',', ' ');
    }

    public function actualiza()
    {
        $this->actualizaTexto();
        $this->redibuja();
    }

    public function redibuja()
    {
        \Outils::println($this->texto);
    }
}

?>
