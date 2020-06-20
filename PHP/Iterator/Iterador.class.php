<?php
namespace Iterator;

class Iterador
{
    /**
     * @var string
     */
    protected $palabraClaveConsulta;
    /**
     * @var int
     */
    protected $indice;
    /**
     * @var "Lista de Elemento"
     */
    protected $contenido;

    /**
     * @param string $palabraClaveConsulta            
     * @param "Lista de Elemento" $contenido            
     * @return void
     */
    public function setPalabraClaveConsulta($palabraClaveConsulta, $contenido)
    {
        $this->palabraClaveConsulta = $palabraClaveConsulta;
        $this->contenido = $contenido;
    }

    /**
     * @return void
     */
    public function inicio()
    {
        $this->indice = -1;
        $this->siguiente();
    }

    /**
     * @return void
     */
    public function siguiente()
    {
        $tamagno = count($this->contenido);
        $this->indice ++;
        while (($this->indice < $tamagno) &&
                 (! $this->contenido[$this->indice]->palabraClaveValida($this->palabraClaveConsulta)))
        {
            $this->indice ++;
        }
    }

    /**
     *
     * @return Elemento null
     */
    public function item()
    {
        if ($this->indice < count($this->contenido))
        {
            return $this->contenido[$this->indice];
        }
        else
        {
            return null;
        }
    }
}

?>
