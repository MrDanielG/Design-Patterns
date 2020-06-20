<?php
namespace Bridge;

require_once 'FormularioEmplacamiento.class.php';
require_once 'FormularioImpl.class.php';

class FormularioEmplacamientoGuatemala extends FormularioEmplacamiento
{
    const NU_CARACTERES = 5;

    /**
     *
     * @param FormularioImpl $implantacion            
     */
    public function __construct(FormularioImpl $implantacion)
    {
        parent::__construct($implantacion);
    }

    protected function controlZona($placa)
    {
        return strlen($placa) == 
            FormularioEmplacamientoGuatemala::NU_CARACTERES;
    }

   protected function getRestriccion()
    {
        return FormularioEmplacamientoGuatemala::NU_CARACTERES .
            ' car.';
    }
}

?>
