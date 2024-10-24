<?php
// Variable global para almacenar las tareas
$tareas = [];

// Función para devolver listado de tareas
function getTareas() {
    global $tareas;
    return $tareas;
}

// Función para filtrar contenido
// function filtrarContenido($contenido) {
//     return trim(preg_replace('/\s+/', ' ', filter_var($contenido, FILTER_SANITIZE_STRING)));
// }

// Función para comprobar si un campo es válido
function esCampoValido($campo) {
    $campoFiltrado = filtrarContenido($campo);
    return !empty($campoFiltrado);
}

// Función para guardar una tarea de forma simulada
function guardarTarea($descripcion, $estado) {
    global $tareas;
    if (esCampoValido($descripcion) && esCampoValido($estado)) {
        $tarea = [
            'id' => count($tareas) + 1,
            'descripcion' => $descripcion,
            'estado' => $estado
        ];
        $tareas[] = $tarea;
        return true;
    }
    return false;
}
?>