<?php

class Usuario{
    
    private $email, $name, $password, $id;
    
    public function __construct($id, $name, $email, $password){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }
    
    // ************ Getters & Setters ************
    
    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return the $password
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param field_type $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @param field_type $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
}

?>