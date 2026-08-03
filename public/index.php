<?php

require_once '../cofig/conexion.php';

$persona1 = new Persona("Amparo", "Chaparro", 28, "amparo@email.com");
$persona2 = new Persona("Mariana", "Martinez", 18, "mariana@email.com");
$persona3 = new Persona("Felipe", "Gómez", 23, "felipe@email.com");
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
    <p>Nombre: <?= $persona1->getNombre() ?></p>
    <p>Apellidos: <?= $persona1->getApellidos() ?></p>
    <p>Edad: <?= $persona1->getEdad() ?></p>
    <p>Correo: <?= $persona1->getCorreo() ?></p>
    <p>Mensaje: <?= $persona1->saludar() ?></p>

    <hr>

    <h3>Datos de la Persona 2</h3>
    <p>Nombre: <?= $persona2->getNombre() ?></p>
    <p>Apellidos: <?= $persona2->getApellidos() ?></p>
    <p>Edad: <?= $persona2->getEdad() ?></p>
    <p>Correo: <?= $persona2->getCorreo() ?></p>
    <p>Mensaje: <?= $persona2->saludar() ?></p>

    <hr>

    <h3>Datos de la Persona 3</h3>
    <p>Nombre: <?= $persona3->getNombre() ?></p>
    <p>Apellidos: <?= $persona3->getApellidos() ?></p>
    <p>Edad: <?= $persona3->getEdad() ?></p>
    <p>Correo: <?= $persona3->getCorreo() ?></p>
    <p>Mensaje: <?= $persona3->saludar() ?></p>

    <hr>

    <h2>Validaciones</h2>

    <h3>Probando asignacion de datos incorrectos</h3>
    <?php
   
    echo "<p>Intentando asignar edad -5 a Persona 1...</p>";
    $persona1->setEdad(-5);


    echo "<p>Intentando asignar nombre vacio a Persona 2...</p>";
    $persona2->setNombre("   ");

   
    echo "<p>Intentando asignar apellido vacio a Persona 3...</p>";
    $persona3->setApellidos("");
    ?>

    <h3>Verificacion de datos correctos conservados</h3>
    <p>Edad correcta de Persona 1: <?= $persona1->getEdad() ?></p>
    <p>Nombre correcto de Persona 2: <?= $persona2->getNombre() ?></p>
    <p>Apellido correcto de Persona 3: <?= $persona3->getApellidos() ?></p>

</body>
</html>