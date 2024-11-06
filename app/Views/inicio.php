<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #f4f6f9;">
  <div class="container text-center py-5">
    <!-- Logo o Nombre de la Empresa -->
    <img src="<?= base_url('img/VINOTECA POC.png') ?>" alt="Nombre de la Empresa" class="img-fluid mb-4"
      style="max-width: 300px; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">

    <?php
    if (session()->has('email') and session()->get('tipo') == 1) {
      echo "<h2 class='display-5 text-primary fw-bold'>Bienvenid@, " . session()->get('nombre') . "</h2>";
    ?>
      <a href="<?= base_url('cerrar_sesion') ?>" class="btn btn-outline-danger my-3">Cerrar Sesión</a>

      <h1 class="my-4 text-uppercase text-dark">Menú Principal Administrador</h1>

      <form action=""
        style="display: flex; flex-direction: column; align-items: center; width: 340px; margin: 0 auto; padding: 20px; border: 3px solid #007bff; border-radius: 10px; background-color: #e0e7ff; box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);">
        
        <a href="<?= base_url('ver_cat') ?>" class="btn btn-primary btn-lg w-100 my-2">Categorías</a>
        <a href="<?= base_url('ver_cl') ?>" class="btn btn-primary btn-lg w-100 my-2">Clientes</a>
        <a href="<?= base_url('ver_vt') ?>" class="btn btn-primary btn-lg w-100 my-2">Ventas</a>
        <a href="<?= base_url('ver_ft') ?>" class="btn btn-primary btn-lg w-100 my-2">Facturas</a>
        <a href="<?= base_url('ver_pv') ?>" class="btn btn-primary btn-lg w-100 my-2">Proveedores</a>
        <a href="<?= base_url('ver_vn') ?>" class="btn btn-primary btn-lg w-100 my-2">Vinos</a>
        <a href="<?= base_url('ver_rs') ?>" class="btn btn-primary btn-lg w-100 my-2">Reseñas</a>
        <a href="<?= base_url('ver_ep') ?>" class="btn btn-primary btn-lg w-100 my-2">Empleados</a>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php
    } else {
    ?>
      <script>
        window.location.href = "<?= base_url('../') ?>";
      </script>
    <?php
    }
    ?>
  </div>
</body>

</html>
