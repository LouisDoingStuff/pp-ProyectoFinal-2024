<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">PROVEEDORES</h3>

<a href="<?= base_url('nuevo_pv') ?>" class="btn btn-success">Agregar</a>

<table class="table table-hover table-bordered my-3" id="dataTable" aria-describedby="titulo">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID PROVEEDOR</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">ESTADO</th>
            <th scope="col">ACCIONES</th>

        </tr>
    </thead>
    <?php
    foreach ($proveedores as $proveedor):
    ?>
        <tr>
            <td><?php echo $proveedor->id_proveedor; ?></td>
            <td><?php echo $proveedor->nombre; ?></td>
            <td><?php echo $proveedor->descripcion; ?></td>
            <td><?php echo $proveedor->estado; ?></td>
            <td>
                <a href="<?= base_url('eliminar_pv/' . $proveedor->id_proveedor); ?>" class="btn btn-danger">Eliminar</a>
                <a href="<?= base_url('buscar_pv/' . $proveedor->id_proveedor); ?>" class="btn btn-info">Modificar</a>
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