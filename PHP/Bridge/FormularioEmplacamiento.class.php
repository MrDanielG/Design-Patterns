<?php
namespace Bridge;

require_once 'FormularioImpl.class.php';

abstract class FormularioEmplacamiento
{
    /**
     * 
     * @var string
     */
    protected $contenido;
    /**
     * 
     * @var FormularioImpl
     */
    protected $implantacion;

    /**
     *
     * @param FormularioImpl $implantacion            
     */
    public function __construct(FormularioImpl $implantacion)
    {
        $this->implantacion = $implantacion;
    }

    public function visualiza()
    {
        $this->implantacion->dibujaTexto(
                'numero de la placa existente (' .
                 $this->getRestriccion() . ') : ');
    }

    public function generaDocumento()
    {
        $this->implantacion->dibujaTexto(
                'Solicitud de emplacamiento');
        $this->implantacion->dibujaTexto(
                "numero de placa : $this->contenido");
    }

    
    /**
     * 
     * @return boolean
     */
    public function administraZona()
    {
        $this->contenido = $this->implantacion->administraZonaIndicada();
        return $this->controlZona($this->contenido);
    }

    /**
     *
     * @param string $placa      
     * @return boolean      
     */
    protected abstract function controlZona($placa);

    /**
     *
     * @return string
     */
    protected abstract function getRestriccion();
}

?>
