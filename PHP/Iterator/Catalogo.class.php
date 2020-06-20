<?php
namespace Iterator;


class Catalogo
{
     /**
     * 
     * @var "lista de Elemento"
     */
    protected $contenido;

    public function __construct()
    {
        $this->contenido = array();
    }
    
    /**
     *
     * @param Elemento $e            
     */
    function agrega(Elemento $e) {
        $this->contenido[] = $e;
    }

    /**
     * 
     * @param string $palabraClaveConsulta
     * @return Iterador
     */
    public function busqueda($palabraClaveConsulta)
    {
        $resultado = new Iterador();
        $resultado->setPalabraClaveConsulta($palabraClaveConsulta, $this->contenido);
        return $resultado;
    }
}
?>
