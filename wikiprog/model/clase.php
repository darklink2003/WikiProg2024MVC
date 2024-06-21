<?php
/**
 * Clase Login para manejar operaciones relacionadas con usuarios en la base de datos.
 * 
 * Esta clase permite registrar nuevos usuarios y recuperar datos de usuarios existentes.
 * 
 * @version 1.0
 * @author Pablo Alexander Mondragon Acevedo
 * @author Keiner Yamith Tarache Parra
 */
class Login
{
    /**
     * Registra un nuevo usuario en la base de datos.
     *
     * @param string $usuario El nombre de usuario.
     * @param string $correo La dirección de correo electrónico del usuario.
     * @param string $contraseña La contraseña del usuario.
     * @param int $rango_id El identificador del rango o rol del usuario.
     * @return void
     */
    public static function registrar($usuario, $correo, $contraseña, $rango_id)
    {
        // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "wikiprog");

        // Consulta SQL para insertar un nuevo usuario en la tabla 'tb_usuarios'
        $sql = "INSERT INTO tb_usuarios(usuario, correo, contraseña, rango_id) VALUES ('$usuario', '$correo', '$contraseña', '$rango_id')";

        // Ejecución de la consulta
        $consulta = $conexion->query($sql);

        // Redirección si la consulta se ejecuta correctamente
        if ($consulta) {
            header("location: ../controller/controlador.php?seccion=seccion6");
        }
    }

    /**
     * Recupera y muestra los datos de todos los usuarios registrados en la base de datos.
     *
     * @return string Cadena de texto con los datos de todos los usuarios.
     */
    public static function ver()
    {
        // Variable para almacenar la salida
        $salida = "";

        // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "wikiprog");

        // Consulta SQL para seleccionar todos los usuarios de la tabla 'usuario'
        $sql = "SELECT * FROM usuario";

        // Ejecución de la consulta
        $consulta = $conexion->query($sql);

        // Recorrer los resultados y construir la salida con los datos de cada usuario
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= $fila['usuario'] . "<br>";
            $salida .= $fila['correo'] . "<br>";
            $salida .= $fila['contraseña'] . "<br>";
            $salida .= $fila['rango_id'] . "<br><br>";
        }

        // Retornar la salida
        return $salida;
    }
}
?>