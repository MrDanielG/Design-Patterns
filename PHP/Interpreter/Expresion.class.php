<?php
namespace Interpreter;

require_once 'OperadorO.class.php';
require_once 'PalabraClave.class.php';

abstract class Expresion
{

    /**
     * 
     * @var string
     */
    protected static $fuente;
    /**
     * 
     * @var int
     */
    protected static $indice;
    /**
     * 
     * @var string
     */
    protected static $pieza;

    /**
     *
     * @param string $descripcion            
     * @return boolean
     */
    public abstract function evalua($descripcion);
    
    /**
     *
     * @return void
     */
    protected static function proximaPieza()
    {
        while ((Expresion::$indice < 
                 strlen(Expresion::$fuente)) &&
                 (Expresion::$fuente[Expresion::$indice] ==
                  ' '))
        {
            Expresion::$indice ++;
        }
        if (Expresion::$indice == strlen(Expresion::$fuente))
        {
            Expresion::$pieza = null;
        }
        elseif ((Expresion::$fuente[Expresion::$indice]
                  == '(') ||
                 (Expresion::$fuente[Expresion::$indice]
                   == ')'))
        {
            Expresion::$pieza = substr(Expresion::$fuente, 
                    Expresion::$indice, 1);
            Expresion::$indice ++;
        }
        else
        {
            $inicio = Expresion::$indice;
            while ((Expresion::$indice <
                     strlen(Expresion::$fuente)) &&
                     (Expresion::$fuente[Expresion::$indice] !=
                     ' ') &&
                     (Expresion::$fuente[Expresion::$indice] !=
                     ')'))
            {
                Expresion::$indice ++;
            }
            Expresion::$pieza = substr(Expresion::$fuente, 
                    $inicio, Expresion::$indice - $inicio);
        }
    }

    /**
     *
     * @param string $fuente            
     * @return Expresion
     * @throws \Exception
     */
    public static function analisis($fuente)
    {
        Expresion::$fuente = $fuente;
        Expresion::$indice = 0;
        Expresion::proximaPieza();
        return OperadorO::parser();
    }

    /**
     *
     * @return Expresion
     * @throws \Exception
     */
    public static function parser()
    {
        $resultado = null;
        if (Expresion::$pieza === '(')
        {
            Expresion::proximaPieza();
            $resultado = OperadorO::parser();
            if (!isset(Expresion::$pieza))
            {
                throw new \Exception("Error de sintaxis");
            }
            if (Expresion::$pieza !== ')')
            {
                throw new \Exception("Error de sintaxis");
            }
            Expresion::proximaPieza();
        }
        else
        {
            $resultado = PalabraClave::parser();
        }
        return $resultado;
    }
}

?>
