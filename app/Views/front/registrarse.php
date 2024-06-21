

<div class="container">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            <h1 style="font-size: 24px; text-align: center;">Registrarse</h1>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput-Usuario" placeholder="fulanito_kpo123" required>
                <label for="floatingInput-Usuario">Nombre de Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput-Nombre" placeholder="Fulanito" required>
                <label for="floatingInput-Nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput-Apellido" placeholder="Inserte Apellido" required>
                <label for="floatingInput-Apellido">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput-Email" placeholder="name@example.com" required>
                <label for="floatingInput-Email">Correo Electrónico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="floatingInput-Tel" placeholder="Num de tel" required>
                <label for="floatingInput-Tel">Número de Teléfono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput-Adress" placeholder="Direccion" required>
                <label for="floatingInput-Adress">Dirección</label>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary" onclick="window.location.href='/'">Cancelar</button>
            </div>
        </form>
    </div>