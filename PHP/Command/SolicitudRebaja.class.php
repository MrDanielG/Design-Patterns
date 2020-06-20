<?php
namespace Command;

require_once 'ListaVehiculo.class.php';

class SolicitudRebaja
{
    /**
     * 
     * @var ListaVehiculo
     */
    protected $vehiculosRebajados;
    /**
     * 
     * @var long
     */
    protected $hoy; 
    /**
     * 
     * @var long
     */
    protected $tiempoEnStock; 
    /**
     * 
     * @var double
     */
    protected $tasaDescuento;
    
    /**
     *
     * @param long $hoy            
     * @param long $tiempoEnStock            
     * @param double $tasaDescuento            
     */
    public function __construct($hoy, $tiempoEnStock, 
            $tasaDescuento)
    {
        $this->vehiculosRebajados = new ListaVehiculo();
        $this->hoy = $hoy;
        $this->tiempoEnStock = $tiempoEnStock;
        $this->tasaDescuento = $tasaDescuento;
    }

    /**
     *
     * @param ListaVehiculo $vehiculos
     */
    public function rebaja(ListaVehiculo $vehiculos)
    {
        $this->vehiculosRebajados = new ListaVehiculo();
        foreach ($vehiculos as $vehiculo)
        {
            if ($vehiculo->getTiempoEnStock($this->hoy) >=
                     $this->tiempoEnStock)
            {
                $this->vehiculosRebajados->anexa($vehiculo);
            }
        }
        foreach ($this->vehiculosRebajados as $vehiculo)
        {
            $vehiculo->modificaPrecio(1.0 - $this->tasaDescuento);
        }
    }

    public function anula()
    {
        foreach ($this->vehiculosRebajados as $vehiculo)
        {
            $vehiculo->modificaPrecio(
                    1.0 / (1.0 - $this->tasaDescuento));
        }
    }

    public function restablece()
    {
        foreach ($this->vehiculosRebajados as $vehiculo)
        {
            $vehicule->modificaPrecio(1.0 - $this->tasaDescuento);
        }
    }
}

?>
