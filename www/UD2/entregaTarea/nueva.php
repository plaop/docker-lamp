<?php

include 'utils.php';

// Obtener los datos del formulario usando el método POST
$descripcion = $_POST['descripcion'] ?? '';
$estado = $_POST['estado'] ?? 'pendiente'; 

    $id = count(getTareas()) + 1; 

    if (guardarTarea($id, $descripcion, $estado)) {
        echo "Tarea guardada correctamente.";
    } else {
        echo "Error: Datos no válidos.";
    }

?>