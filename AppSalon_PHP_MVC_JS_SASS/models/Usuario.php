<?php 

namespace Model ; 

class Usuario extends ActiveRecord {
    //Base de datos
    protected static $tabla = 'usuarios' ; 
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'telefono','admin','confirmado', 'token', 'password'] ;


    public $id ;
    public $nombre ;
    public $apellido ;
    public $email ;
    public $telefono ;
    public $admin ;
    public $confirmado ;
    public $token ;
    public $password; 


  public function __construct($args = [])
  {
   $this->id = $args['id'] ?? null ; 
   $this->nombre =$args['nombre'] ?? '' ; 
   $this->apellido =$args['apeliido'] ?? '' ;   
   $this->telefono =$args['telefono'] ?? '' ; 
   $this->admin =$args['admin'] ?? null ; 
   $this->confirmado =$args['confirmado'] ?? null ; 
   $this->token =$args['token'] ?? '' ; 
   $this->password =$args['password'] ?? '' ; 
  }

}