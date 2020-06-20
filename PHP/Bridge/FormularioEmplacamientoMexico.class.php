<?php
namespace Bridge;

require_once 'FormularioEmplacamiento.class.php';

class FormularioEmplacamientoMexico extends FormularioEmplacamiento
{
    const NU_CARACTERES = 7;

    /**
     *
     * @param FormularioImpl $implantacion            
     */
    public function __construct($implantacion)
    {
        parent::__construct($implantacion);
    }

    protected function controlZona($placa)
    {
        return strlen($placa) == 
            FormularioEmplacamientoMexico::NU_CARACTERES;
    }

    protected function getRestriccion()
    {
        return FormularioEmplacamientoMexico::NU_CARACTERES . 
            ' car.';
    }
}

?>
