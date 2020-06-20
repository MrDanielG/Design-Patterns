<?php
namespace Builder;

require_once 'Outils.class.php';
require_once 'Documentacion.class.php';

class DocumentacionHtml extends Documentacion
{

    /**
     *
     * @param string $documento            
     */
    public function agregaDocumento($documento)
    {
        if (\Outils::str_start_with($documento, '<HTML>'))
        {
            $this->contenido[] = $documento;
        }
    }

    public function imprime()
    {
        \Outils::println('Documentacion HTML');
        foreach ($this->contenido as $s)
        {
            \Outils::println($s);
        }
    }
}

?>
