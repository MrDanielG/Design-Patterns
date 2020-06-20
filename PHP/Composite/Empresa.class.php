<?php
namespace Composite;

abstract class Empresa
{
    /**
     * 
     * @var double
     */
    protected $costoUnitarioVehiculo = 5.0;
    /**
     * 
     * @var int
     */
    protected $nuVehiculos;
    
    public function agregaVehiculo()
    {
        $this->nuVehiculos++;
    }

    /**
     *
     * @return double
     */
    public abstract function calculaCostoMantenimiento();

    /**
     *
     * @param Empresa $filial            
     * @return boolean
     */
    public abstract function agregaFilial(Empresa $filial);
}

?>