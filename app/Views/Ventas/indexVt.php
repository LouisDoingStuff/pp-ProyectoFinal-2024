<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">DETALLE DE VENTAS</h3>

            <a href="<?= base_url('nueva_vt') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" id="dataTable" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">DETALLE ID</th>
                        <th scope="col">VENTA ID</th>
                        <th scope="col">PRODUCTO ID</th>
                        <th scope="col">CANTIDAD COMPRA</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <?php
                foreach($ventas as $venta):
                ?>
                <tr>
                    <td><?php echo $venta->id_detalle; ?></td>
                    <td><?php echo $venta->id_venta; ?></td>
                    <td><?php echo $venta->productoId; ?></td>
                    <td><?php echo $venta->cantidadCompra; ?></td>
                    <td><?php echo $venta->precio; ?></td>
                    <td>
                        <a href="<?= base_url('eliminar_vt/' . $venta->id_detalle); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_vt/' . $venta->id_detalle); ?>" class="btn btn-info">Modificar</a>
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