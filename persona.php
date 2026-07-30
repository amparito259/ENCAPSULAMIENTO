<?php
class Persona {
    private $nombre;
    private $apellidos;
    private $edad;
    private $correo;

    // Constructor
    public function __construct($nombre, $apellidos, $edad, $correo) {
        $this->setNombre($nombre);
        $this->setApellidos($apellidos);
        $this->setEdad($edad);
        $this->setCorreo($correo);
    }

    // Getters
    public function getNombre() { 
        return $this->nombre; 
    }
    
    public function getApellidos() { return $this->apellidos; }
    public function getEdad() { return $this->edad; }
    public function getCorreo() { return $this->correo; }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    // Método saludar
    public function saludar() {
        return "Hola, me llamo $this->nombre $this->apellidos, tengo $this->edad años y mi correo es $this->correo.";
    }
}
?>
