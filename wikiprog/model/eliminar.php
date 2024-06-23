<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "wikiprog");

// Verificar si la conexión es exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener el ID del usuario desde la URL
$usuario_id = $_GET['id'];

// Eliminar el usuario de la base de datos
$sql = "DELETE FROM usuario WHERE usuario_id='$usuario_id'";

if (mysqli_query($conexion, $sql)) {
    echo "Usuario eliminado correctamente";
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir a la página principal después de eliminar el usuario
header("Location: index.php");
exit;
?>
