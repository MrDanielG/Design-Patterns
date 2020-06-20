<?php
namespace Interpreter;

require_once 'Expresion.class.php';

abstract class OperadorBinario extends Expresion
{
    /** 
     * @var Expresion 
     */
    protected $operandoIzquierdo;
    /**
     * @var Expression
     */
    protected $operandoDerecho;

    /**
     * @param Expresion $operandoIzquierdo
     * @param Expresion $operandoDerecho
     */
    public function __construct(Expresion $operandoIzquierdo,
             Expresion $operandoDerecho)
    {
        $this->operandoIzquierdo = $operandoIzquierdo;
        $this->operandoDerecho = $operandoDerecho;
    }
}

?>
