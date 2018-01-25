<?php

class Cesta {
    
    private $id, $product_id, $cantidad, $user_id;
    
    public function __construct($product_id, $cantidad, $user_id){
        $this->product_id=$product_id;
        $this->cantidad=$cantidad;
        $this->user_id=$user_id;
    }

    /**
     * @return the $product_id
     */
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * @return the $cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @return the $user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @param field_type $product_id
     */
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @param field_type $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @param field_type $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    
    
    
}