<?php
namespace ChainOfResponsibility;

abstract class ObjetoBasico
{
    /**
     * 
     * @var ObjetoBasico
     */
    protected $siguiente;
    
    /**
     * @return string
     */
    private function descripcionPorDefecto()
    {
        return 'descripcion por defecto';
    }
    
    /**
     * @return NULL|string
     */
    protected abstract function getDescripcion();
    
    /**
     * @return string
     */
    public function datoDescripcion()
    {
        $resultado = $this->getDescripcion();
        if (isset($resultado))
        {
            return $resultado;
        }
        if (isset($this->siguiente))
        {
            return $this->siguiente->datoDescripcion();
        }
        else
        {
            return $this->descripcionPorDefecto();
        }
    }

    /**
     *
     * @param ObjetBase $siguiente            
     */
    public function setSiguiente(ObjetBase $siguiente)
    {
        $this->siguiente = $siguiente;
    }
}

?>
