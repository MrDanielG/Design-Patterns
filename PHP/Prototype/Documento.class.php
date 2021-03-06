<?php
namespace Prototype;

abstract class Documento 
{
    /**
     * @var string
     */
    protected $contenido = "";

    /**
     * @return null|Documento
     */
    public function duplica()
    {
        $resultado = null;
        try
        {
            $resultado = clone $this;
        }
        catch (CloneNotSupportedException $exception)
        {
            return null;
        }
        return $resultado;
    }

    /**
     * 
     * @param string $informacion
     */
    public function rellena($informacion)
    {
        $this->contenido = $informacion;
    }

    public abstract function imprime();
    public abstract function visualiza();
}

?>
