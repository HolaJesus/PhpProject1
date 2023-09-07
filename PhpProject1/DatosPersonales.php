<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class FormPersonal {
    
    public $nombres = '';
    public $apellidos = '';
    public $fechaNacimiento = '';
    public $documento = '';
    public $tipo_documento = '';
    public $telefono = '';
    public $direccion = '';
    public $ciudad = '';
    public $email = '';
    
    public function __construct($nombres, $apellidos, $fechaNacimiento, $documento, $telefono, $direccion, $ciudad, $email) {
       $this->nombres = $nombres;
       $this->apellidos = $apellidos;
       $this->fechaNacimiento = $fechaNacimiento;
       $this->documento = $documento;
       $this->tipo_documento = $tipo_documento;
       $this->telefono = $telefono;
       $this->direccion = $direccion;
       $this->ciudad = $ciudad;
       $this->email = $email;
        
    }
    
    public function getDataUser() {
        
        return $this->nombres . '' .this->apellidos;
        
    }
}