<?php
namespace Facade;

require_once 'WebServiceAuto.class.php';
require_once 'Catalogo.class.php';
require_once 'ComponenteCatalogo.class.php';
require_once 'GestionDocumento.class.php';
require_once 'ComponenteGestionDocumento.class.php';

class DescripcionVehiculo
{
    protected $descripcion; // string
    protected $precio; // int
    
    /**
     * @param string $descripcion            
     * @param int $precio            
     */
    public function __construct($descripcion, $precio)
    {
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    /**
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     *
     * @return int
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}

class ComponenteCatalogo implements Catalogo
{
    protected $descripcionesVehiculo = array();

    public function __construct()
    {
        $this->descripcionesVehiculo[] = new DescripcionVehiculo(
                'Logan 5 puertas', 6000);
        $this->descripcionesVehiculo[] = new DescripcionVehiculo(
                'Sandero 3 puertas', 4000);
        $this->descripcionesVehiculo[] = new DescripcionVehiculo(
                'Clio 5 puertas', 8000);
        $this->descripcionesVehiculo[] = new DescripcionVehiculo(
                'Koleos 5 puertas', 7000);
        $this->descripcionesVehiculo[] = new DescripcionVehiculo(
                'Coupe 2 puertas', 9000);
        $this->descripcionesVehiculo[] = new DescripcionVehiculo(
                'Stepway 3 puertas', 5000);
    }

    public function recuperaVehiculos($precioMin, $precioMax)
    {
        $resultado = array(); // Lista de string
        foreach ($this->descripcionesVehiculo as
            $descripcionVehiculo)
        {
            $precio = $descripcionVehiculo->getPrecio();
            if (($precio >= $precioMin) && ($precio <= $precioMax))
            {
                $resultado[] = 
                  $descripcionVehiculo->getDescripcion();
            }
        }
        return $resultado;
    }
}

?>
