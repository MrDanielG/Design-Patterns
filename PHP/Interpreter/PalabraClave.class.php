<?php
namespace Interpreter;

require_once 'Expresion.class.php';

class PalabraClave extends Expresion
{
    /**
     * 
     * @var string
     */
    protected $palabraClave;

    /**
     *
     * @param string $palabraClave            
     */
    public function __construct($palabraClave)
    {
        $this->palabraClave = $palabraClave;
    }

    public function evalua($descripcion)
    {
        return strpos($descripcion, $this->palabraClave) !== FALSE;
    }
    
    /**
     *
     * @return Expresion
     */
    public static function parser()
    {
        $resultado = new PalabraClave(PalabraClave::$pieza);
        PalabraClave::proximaPieza();
        return $resultado;
    }
}

?>
