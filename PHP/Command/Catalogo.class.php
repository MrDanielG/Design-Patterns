<?php
namespace Command;

require_once 'ListaVehiculo.class.php';

class Catalogo
{
    /**
     * 
     * @var ListaVehiculo
     */
    protected $vehiculosStock;
    /**
     * 
     * @var "Lista de SolicitudRebaja"
     */
    protected $solicitudes = array();
    
    public function __construct() {
        $this->vehiculosStock = new ListaVehiculo();
    }
    
    /**
     *
     * @param SolicitudRebaja $solicitud            
     */
    public function ejecutaSolicitudRebaja(SolicitudRebaja $solicitud)
    {
        array_unshift($this->solicitudes, $solicitud); 
        $solicitud->saldo($this->vehiculosStock);
    }

    /**
     *
     * @param int $orden            
     */
    public function anulaSolicitudRebaja($orden)
    {
        $this->solicitudes[$orden]->anula();
    }

    /**
     *
     * @param int $orden            
     */
    public function restableceSolicitudRebaja($orden)
    {
        $this->solicitudes[$orden]->restablece();
    }

    /**
     *
     * @param Vehiculo $vehiculo            
     */
    public function agrega(Vehiculo $vehiculo)
    {
        $this->vehiculosStock->anexa($vehiculo);
    }

    public function visualiza()
    {
        foreach ($this->vehiculosStock as $vehiculo)
        {
            $vehiculo->visualiza();
        }
    }
}

?>
