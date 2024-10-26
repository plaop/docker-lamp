<?php

// Variable global para almacenar las tareas
$tareas = [
    ["id" => 1, "descripcion" => "Repasar la teoría de PHP", "estado" => "pendiente"],
    ["id" => 2, "descripcion" => "Realizar ejercicios practicos", "estado" => "en proceso"],
    ["id" => 3, "descripcion" => "Completar la tarea antes de la fecha", "estado" => "completada"],
];

// Función para devolver listado de tareas
function getTareas() {
    global $tareas;
    return $tareas;
}

// Filtrar el contenido y evitar caracteres especiales
function filtrarContenido($contenido) {
    // Elimina espacios en blanco duplicados y sanitiza caracteres especiales
    return trim(preg_replace('/\s+/', ' ', htmlspecialchars($contenido)));
    

}

// Función para comprobar si un campo es válido
function esTextoValido($campo) {
    $campo = filtrarContenido($campo);
    return !empty($campo);
}

// Función para guardar una tarea
function guardarTarea($descripcion, $estado) {
    global $tareas;
    $descripcion = filtrarContenido($descripcion);
    if (esTextoValido($descripcion) && in_array($estado, ["pendiente", "en proceso", "completada"])) {
        $tareas[] = [
            "id" => count($tareas) + 1,
            "descripcion" => $descripcion, 
            "estado" => $estado
        ];

        return true;
    }
    return false;
}

var_dump($_POST);

?>