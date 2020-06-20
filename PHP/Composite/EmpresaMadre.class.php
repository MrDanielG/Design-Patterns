<?php
namespace Composite;

require_once 'Empresa.class.php';

class EmpresaMadre extends Empresa
{
    /**
     * @var "Lista de Empresa"
     */
    protected $filiales = array();
    
    public function agregaFilial(Empresa $filial)
    {
        $this->filiales[] = $filial;
        return true; 
    }

    public function calculaCostoMantenimiento()
    {
        $costo = 0.0;
        foreach ($this->filiales as $filial)
        {
            $costo += $filial->calculaCostoMantenimiento();
        }
        return $costo + $this->nuVehiculos *
                 EmpresaMadre::$costoUnitarioVehiculo;
    }
}

?>
