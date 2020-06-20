<?php
namespace Interpreter;

require_once 'OperadorBinario.class.php';
require_once 'Expresion.class.php';

class OperadorY extends OperadorBinario
{

    /**
     * 
     * @param Expression $operandoIzquierdo
     * @param Expression $operandoDerecho
     */
    public function __construct(Expresion $operandoIzquierdo, 
            Expresion $operandoDerecho)
    {
        parent::__construct($operandoIzquierdo, $operandoDerecho);
    }

    public function evalua($descripcion)
    {
        return $this->operandoIzquierdo->evalua($descripcion) &&
                 $this->operandoDerecho->evalua($descripcion);
    }
    
    /**
     *
     * @return Expresion
     * @throws \Exception
     */
    public static function parser()
    {
        $resultadoIzquierda = Expresion::parser();
        while (isset(OperadorY::$pieza) &&
                 (OperadorY::$pieza == 'y'))
        {
            OperadorY::proximaPieza();
            $resultadoDerecha = Expresion::parser();
            $resultadoIzquierda = new OperadorY($resultadoIzquierda, 
                    $resultadoDerecha);
        }
        return $resultadoIzquierda;
    }
}

?>
