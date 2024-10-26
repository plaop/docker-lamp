 <?php
var_dump($_POST);
include 'utils.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];

    if (guardarTarea($descripcion, $estado)) {
        echo "Tarea guardada correctamente.";
    } else {
        echo "Error: Datos no válidos.";
    } 
} else {
        header('Location: nuevaForm.php');
    }

?> 