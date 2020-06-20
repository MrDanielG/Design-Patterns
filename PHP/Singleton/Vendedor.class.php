<?php
namespace Singleton;

require_once 'Outils.class.php';

class Vendedor
{
    /**
     * 
     * @var string
     */
    protected $nombre;
    /**
     * 
     * @var string
     */
    protected $direccion;
    /**
     * 
     * @var string
     */
    protected $email;

    /**
     * @var Vendedor
     */
    private static $instancia = null;

    /**
     * constructor de visibilidad privada
     */
    private function __construct()
    {
    }

    /**
     * @return Vendedor
     */
    public static function Instancia()
    {
        if (!isset(Vendedor::$instancia)) {
            Vendedor::$instancia = new Vendedor();
        }
        return Vendedor::$instancia;
    }

    public function visualiza()
    {
        \Outils::println("Nombre : $this->nombre");
        \Outils::println("Direccion : $this->direccion");
        \Outils::println("Email : $this->email");
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * 
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * 
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}

?>
