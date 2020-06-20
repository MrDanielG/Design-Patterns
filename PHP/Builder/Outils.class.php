<?php

class Outils
{
    public static $run_in_eclipse = true;
    public static $eclipse_charset = 'UTF-8';
    
    private static $out_charset;
    private static $out_handle;
    
    /**
     * Determina si la cadenada de caracteres haystack inicia por
     * needle.
     * @param string $haystack
     *            La cadena en la cual se debe buscar.
     * @param string $needle
     *            La cadena buscada.
     * @return boolean
     */
    public static function str_start_with($haystack, $needle)
    {
        return ($needle === '') ||
                (strpos($haystack, $needle) === 0);
    }
    
    public static function readln($prompt = '')
    {
        if (PHP_OS == 'WINNT')
        {
            Outils::prt($prompt);
            $handle = fopen("php://stdin", "r");
            $line = stream_get_line($handle, 1024, PHP_EOL);
            Outils::detectCharset();
            if (Outils::$out_charset != 'UTF-8') {
             $line = iconv(Outils::$out_charset, 'UTF-8', $line);
            }
            fclose($handle);
        }
        else
        {
            $line = readline($prompt);
        }
        return $line;
    }

    public static function prt($str = '')
    {
        if ($str != '')
        {   
            Outils::detectCharset();
                        
            $str = str_replace("\r", '', $str);
            $str = str_replace("\n", PHP_EOL, $str);
            
            if (Outils::$out_charset != 'UTF-8') {
               $str = iconv('UTF-8', Outils::$out_charset, $str);
            }

            if (!isset(Outils::$out_handle)) {
                Outils::$out_handle = fopen("php://stdout", "w");
            }
            
            fprintf(Outils::$out_handle, $str);
            fflush(Outils::$out_handle);
        }
    }

    public static function println($str = '')
    {
        Outils::prt($str . "\n");
    }
    
    private static function detectCharset() {
        if (!isset(Outils::$out_charset)) {
            if (Outils::$run_in_eclipse) {
                Outils::$out_charset = Outils::$eclipse_charset;
            } else {
                if (PHP_OS == 'WINNT') {
                    // La codificacion CP850 se utiliza la mayor parte
                    // del tiempo. Vamos por lo tanto a utilizarla por 
                    // defecto (si la deteccion no funciona)
                    Outils::$out_charset = 'CP850';
                    exec('chcp', $output);
                    $pos = stripos($output[0], ':');
                    $cp = trim(substr($output[0], $pos + 1));
                    if ($cp < 2000) {
                        Outils::$out_charset = 'CP' . $cp;
                    }
                } else {
                    // En Unix, es posible tener varios
                    // tipos de caracteres diferentes
                    $locale = setlocale(LC_CTYPE, 0);
                    Outils::$out_charset = substr($locale, 6);
                    if (empty(Outils::$out_charset)) {
                        Outils::$out_charset = 'ISO-8859-1';
                    } else {
                        switch(Outils::$out_charset) {
                        	case 'euro':
                        	    Outils::$out_charset =
                                       'ISO-8859-15';
                        	    break;
                        }
                    }
                }
                // Pregunta a iconv ignorar sin el soporte de los caracteres 
                // para la salida
                Outils::$out_charset .= '//TRANSLIT';
            }
        }
    }
}
