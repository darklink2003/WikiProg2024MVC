<!--
/**
 * Formulario para el registro de nuevos usuarios.
 *
 * Este formulario permite a los usuarios ingresar información para registrarse
 * en el sistema. Se solicita el nombre de usuario, correo electrónico, biografía
 * y contraseña. Al enviar el formulario, los datos se envían al archivo "registro.php"
 * mediante el método POST para su procesamiento.
 * 
 * @version 1.0
 * @author Pablo Alexander Mondragon Acevedo
 *         Keiner Yamith Tarache Parra
 */
-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="card-title text-center">Registro de Usuario</h3>
                    <form action="../controller/registro.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa tu nombre de usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="biografia" class="form-label">Biografía</label>
                            <input type="text" class="form-control" id="biografia" name="biografia" placeholder="Ingresa tu biografía" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>