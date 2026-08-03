<?php
require_once '../cofig/conexion.php';

$persona1 = new Persona("Chapinera", "Ramirez", 22, "chapinera@email.com");
$persona2 = new Persona("Carlos", "Pérez", 25, "carlos@email.com");
$persona3 = new Persona("Ana", "Gómez", 23, "ana@email.com");

$persona1->setNombre("María");
$persona1->setApellidos("Rodríguez");
$persona2->setCorreo("carlos.nuevo@email.com");
$persona3->setEdad(28);

$persona1->setEdad(-5);                   // Edad negativa
$persona2->setEdad(150);                  // Edad extremadamente alta
$persona3->setNombre("");                 // Nombre vacío
$persona1->setCorreo("correo-sin-formato"); // Correo sin formato adecuado
$persona2->setApellidos("Perez123");      // Apellido con números
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clase Persona - Atributos Privados</title>
</head>
<body>

    <h1>Listado de las 3 Personas (Atributos Privados)</h1>

    <p><strong>Prueba con echo de getNombre():</strong> 
        <?php echo $persona1->getNombre(); ?>
    </p>

    <hr>

    <h3>Datos de la Persona 1</h3>
    <p><strong>Nombre:</strong> <?= $persona1->getNombre() ?></p>
    <p><strong>Apellidos:</strong> <?= $persona1->getApellidos() ?></p>
    <p><strong>Edad:</strong> <?= $persona1->getEdad() ?></p>
    <p><strong>Correo:</strong> <?= $persona1->getCorreo() ?></p>
    <p><strong>Mensaje:</strong> <?= $persona1->saludar() ?></p>

    <hr>

    <h3>Datos de la Persona 2</h3>
    <p><strong>Nombre:</strong> <?= $persona2->getNombre() ?></p>
    <p><strong>Apellidos:</strong> <?= $persona2->getApellidos() ?></p>
    <p><strong>Edad:</strong> <?= $persona2->getEdad() ?></p>
    <p><strong>Correo:</strong> <?= $persona2->getCorreo() ?></p>
    <p><strong>Mensaje:</strong> <?= $persona2->saludar() ?></p>

    <hr>
    <h3>Datos de la Persona 3</h3>
    <p><strong>Nombre:</strong> <?= $persona3->getNombre() ?></p>
    <p><strong>Apellidos:</strong> <?= $persona3->getApellidos() ?></p>
    <p><strong>Edad:</strong> <?= $persona3->getEdad() ?></p>
    <p><strong>Correo:</strong> <?= $persona3->getCorreo() ?></p>
    <p><strong>Mensaje:</strong> <?= $persona3->saludar() ?></p>

</body>
</html>