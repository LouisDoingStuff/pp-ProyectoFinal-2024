<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Vinoteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #f8f5f2; font-family: Arial, sans-serif; color: #5a5a5a;">
    <div class="container">
        <!-- Botón Créditos Grupo en la esquina superior derecha -->
        <div class="text-end mt-3">
            <a href="<?= base_url('creditos_grupo') ?>" class="btn btn-outline-secondary">CRÉDITOS GRUPO</a>
        </div>

        <!-- Logo o nombre de la empresa -->
        <div class="text-center my-4">
            <img src="<?= base_url('img/VINOTECA POC.png') ?>" alt="Vinoteca" style="max-width: 250px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
        </div>

        <!-- Título de inicio de sesión -->
        <div class="text-center">
            <h2 class="display-6 fw-bold" style="color: #8a4b24;">Iniciar Sesión</h2>
        </div>

        <!-- Formulario de inicio de sesión -->
        <form action="<?= base_url('iniciar_sesion'); ?>" method="post" class="mx-auto p-4" style="max-width: 400px; border: 2px solid #d1b8a5; border-radius: 10px; background-color: #ffffff; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
            <div class="mb-3">
                <label for="txtUsuario" class="form-label" style="color: #8a4b24;">Email</label>
                <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="txtPassword" class="form-label" style="color: #8a4b24;">Contraseña</label>
                <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Ingrese contraseña" required>
            </div>
            <div class="d-grid gap-2 mb-3">
                <input type="submit" class="btn btn-primary" id="btnSesion" name="btnSesion" value="Iniciar sesión" style="background-color: #8a4b24; border-color: #8a4b24;">
            </div>
        </form>

        <!-- Información adicional -->
        <div class="text-center my-4">
            <p style="font-size: 0.9rem; color: #8a4b24;">Síguenos en redes sociales:</p>
            <div class="d-flex justify-content-center gap-4">
                <a href="#" style="color: #8a4b24;"><i class="fab fa-facebook fa-lg"></i> Facebook</a>
                <a href="#" style="color: #8a4b24;"><i class="fab fa-instagram fa-lg"></i> Instagram</a>
                <a href="#" style="color: #8a4b24;"><i class="fab fa-twitter fa-lg"></i> Twitter</a>
            </div>
        </div>

        <!-- Dirección de la vinoteca -->
        <div class="text-center mt-4" style="font-size: 0.9rem; color: #8a4b24;">
            <p>📍 Universidad de San Carlos de Guatemala, Ciudad de Guatemala</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome para íconos de redes sociales -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
