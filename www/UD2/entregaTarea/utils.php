<?php
// Variable global para almacenar las tareas
$tareas = [
    ["id" => 1, "descripcion" => "Aprender PHP", "estado" => "pendiente"],
    ["id" => 2, "descripcion" => "Completar tarea de UD2", "estado" => "en proceso"],
    ["id" => 3, "descripcion" => "Revisar ejercicios de clase", "estado" => "completada"],
];

// Función para devolver listado de tareas
function getTareas() {
    global $tareas;
    return $tareas;
}

// Función para filtrar el contenido y evitar caracteres especiales
function filtrarContenido($campo) {
    // Elimina espacios en blanco duplicados y sanitiza caracteres especiales
    $campo = preg_replace('/\s+/', ' ', $campo); // Remueve espacios duplicados
    $campo = trim($campo); // Elimina espacios al inicio y al final
    
    // Filtra caracteres especiales de manera segura
    return filter_var($campo, FILTER_SANITIZE_SPECIAL_CHARS);
}

// Función para comprobar si un campo es válido
function esTextoValido($campo) {
    $campo = filtrarContenido($campo);
    return !empty($campo);
}

// Función para guardar una tarea
function guardarTarea($id, $descripcion, $estado) {
    global $tareas;
    $descripcion = filtrarContenido($descripcion);
    if (esTextoValido($descripcion) && in_array($estado, ["pendiente", "en proceso", "completada"])) {
        $tareas[] = [
            "id" => $id, 
            "descripcion" => $descripcion, 
            "estado" => $estado
        ];
        return true;
    }
    return false;
}
?>