<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3">Modificar Cliente</h3>

<form action="<?= base_url('modificar_cl') ?>" class="row g-3" method="post" autocomplete="off">

    <div class="col-md-4">
        <label for="id_cliente" class="form-label">ID CLIENTE</label>
        <input type="number" class="form-control" id="id_cliente" name="id_cliente" required autofocus
            value="<?php $datos['id_cliente'] ?>">
    </div>

    <div class="col-md-8">
        <label for="nombre" class="form-label">NOMBRE</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required
            value="<?php $datos['nombre'] ?>">
    </div>

    <div class="col-md-8">
        <label for="apellido" class="form-label">APELLIDO</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required
            value="<?php $datos['apellido'] ?>">
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">EMAIL</label>
        <input type="email" class="form-control" id="email" name="email" required
            value="<?php $datos['email'] ?>">
    </div>

    <div class="col-md-4">
        <label for="telefono" class="form-label">TELEFONO</label>
        <input type="number" class="form-control" id="telefono" name="telefono" required
            value="<?php $datos['telefono'] ?>">
    </div>

    <div class="col-md-8">
        <label for="direccion" class="form-label">DIRECCIÓN</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required
            value="<?php $datos['direccion'] ?>">
    </div>

    <div class="col-md-8">
        <label for="contrasena" class="form-label">CONTRESEÑA</label>
        <input type="text" class="form-control" id="contrasena" name="contrasena" required
            value="<?php $datos['contrasena'] ?>">
    </div>


    <div class="col-12">
        <a href="<?= base_url('ver_cl'); ?>" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </div>

</form>


<?= $this->endSection('contenido'); ?>