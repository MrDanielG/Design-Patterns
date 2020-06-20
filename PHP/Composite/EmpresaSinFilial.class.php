<?php
namespace Composite;

require_once 'Empresa.class.php';

class EmpresaSinFilial extends Empresa
{

    public function agregaFilial(Empresa $filial)
    {
        return false;
    }

    public function calculaCostoMantenimiento()
    {
        return $this->nuVehiculos *
                 EmpresaSinFilial::$costoUnitarioVehiculo;
    }
}

?>
