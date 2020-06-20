<?php
namespace Interpreter;

require_once 'OperadorBinario.class.php';
require_once 'OperadorY.class.php';
require_once 'Expresion.class.php';

class OperadorO extends OperadorBinario
{
    /**
     * @param Expresion $operandoIzquierdo
     * @param Expresion $operandoDerecho
     */
    public function __construct($operandoIzquierdo, $operandoDerecho)
    {
        parent::__construct($operandoIzquierdo, $operandoDerecho);
    }

    public function evalua($descripcion)
    {
        return $this->operandoIzquierdo->evalua($descripcion) ||
        $this->operandoDerecho->evalua($descripcion);
    }

    /**
     * @return Expresion
     * @throws \Exception
     */
    public static function parser()
    {
        $resultadoIzquierda = OperadorY::parser();
        while ((isset(OperadorO::$pieza))
                && (OperadorO::$pieza === 'o'))
        {
            OperadorO::proximaPieza();
            $resultadoDerecha = OperadorY::parser();
            $resultadoIzquierda = new OperadorO($resultadoIzquierda,
            $resultadoDerecha);
        }
        return $resultadoIzquierda;
    }
}


?>
