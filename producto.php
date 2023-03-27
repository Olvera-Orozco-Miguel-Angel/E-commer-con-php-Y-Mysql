<!--  clase producto -->
<?php
class Producto
{
    public $clave;
    public $nombre;
    public $marca;
    public $precio;
    public function __construct($clave = "", $nombre = "", $marca = "",
     $precio = ""){
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precio = $precio;
    }
    public function getClave(){
        return $this->clave;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function getMarca(){
        return $this->marca;
    }
    public function getPrecio(){
        return $this->precio;
    }

    public function setClave($clave){
        $this->clave = $clave;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
}

?>