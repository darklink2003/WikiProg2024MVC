<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "wikiprog");

// Verificar si la conexión es exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener el ID del usuario desde la URL
$usuario_id = $_GET['id'];

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $rango_id = $_POST['rango_id'];

    // Actualizar la información del usuario en la base de datos
    $sql = "UPDATE usuario SET usuario='$usuario', correo='$correo', rango_id='$rango_id' WHERE usuario_id='$usuario_id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Usuario actualizado correctamente";
    } else {
        echo "Error al actualizar el usuario: " . mysqli_error($conexion);
    }
}

// Obtener la información del usuario actual
$sql = "SELECT usuario, correo, rango_id FROM usuario WHERE usuario_id='$usuario_id'";
$resultado = mysqli_query($conexion, $sql);
$usuario = mysqli_fetch_assoc($resultado);

// Cerrar la conexión
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Editar Usuario</h2>
        <form action="../controller/controlador.php?seccion=seccion6&id=<?php echo $usuario_id; ?>" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo htmlspecialchars($usuario['usuario'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo htmlspecialchars($usuario['correo'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="mb-3">
                <label for="rango_id" class="form-label">Rango</label>
                <select name="rango_id" id="rango_id" class="form-select">
                    <option value="1" <?php if ($usuario['rango_id'] == 1) echo 'selected'; ?>>Usuario</option>
                    <option value="2" <?php if ($usuario['rango_id'] == 2) echo 'selected'; ?>>Administrador</option>
                    <option value="3" <?php if ($usuario['rango_id'] == 3) echo 'selected'; ?>>Evaluador</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
