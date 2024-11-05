<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">CLIENTES</h3>

<a href="<?= base_url('nuevo_cl') ?>" class="btn btn-success">Agregar</a>

<table class="table table-hover table-bordered my-3" id="dataTable" aria-describedby="titulo">
    <thead class="table-dark">
        <tr>
            <th scope="col">CLIENTE ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">DIRECCIÓN</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <?php
    foreach ($clientes as $cliente):
    ?>
        <tr>
            <td><?php echo $cliente->id_cliente; ?></td>
            <td><?php echo $cliente->nombre; ?></td>
            <td><?php echo $cliente->apellido; ?></td>
            <td><?php echo $cliente->email; ?></td>
            <td><?php echo $cliente->telefono; ?></td>
            <td><?php echo $cliente->direccion; ?></td>
            <td><?php echo $cliente->contrasena; ?></td>
            <td>
                <a href="<?= base_url('eliminar_cl/' . $cliente->id_cliente); ?>" class="btn btn-danger">Eliminar</a>
                <a href="<?= base_url('buscar_cl/' . $cliente->id_cliente); ?>" class="btn btn-info">Modificar</a>
            </td>



            </td>
        </tr>
    <?php endforeach; ?>
    <tbody>

    </tbody>
</table>
<div class="col-12">
    <a href="<?= base_url('ver_login'); ?>" class="btn btn-secondary">Regresar</a>
</div>
<?= $this->endSection('contenido'); ?>