<?php
class Persona {
    private $nombre;
    private $apellidos;
    private $edad;
    private $correo;

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
    
    public function getApellidos() { 
        return $this->apellidos; 
    }
    
    public function getEdad() { 
        return $this->edad; 
    }
    
    public function getCorreo() { 
        return $this->correo; 
    }

    public function setNombre($nombre) {
        if (is_string($nombre) && trim($nombre) !== "") {
            $this->nombre = $nombre;
        } else {
            echo "<p>Error en Nombre: No se puede dejar el nombre vacio o con solo espacios.</p>";
        }
    }

    public function setApellidos($apellidos) {
        if (is_string($apellidos) && trim($apellidos) !== "") {
            $this->apellidos = $apellidos;
        } else {
            echo "<p>Error en Apellidos: El apellido no es valido o esta vacio.</p>";
        }
    }

    public function setEdad($edad) {
        if (is_numeric($edad) && $edad >= 0) {
            $this->edad = $edad;
        } else {
            echo "<p>Error en Edad: La edad no puede ser negativa ($edad).</p>";
        }
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    // Metodo saludar
    public function saludar() {
        return "Hola, me llamo $this->nombre $this->apellidos, tengo $this->edad años y mi correo es $this->correo.";
    }
}
?>