<?php

class Producto {
    
    private $id, $name, $descripcion, $precio;
    
    public function __construct($id, $name, $descripcion, $precio){
        $this->id=$id;
        $this->name=$name;
        $this->descripcion=$descripcion;
        $this->precio=$precio;
    }
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return the $precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param field_type $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @param field_type $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    
    
}