<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">FACTURAS</h3>

            <a href="<?= base_url('nueva_ft') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" id="dataTable" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID FACTURA</th>
                        <th scope="col">ID CLIENTE</th>
                        <th scope="col">ID EMPLEADO</th>
                        <th scope="col">NIT</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">TOTAL</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <?php
                foreach($facturas as $factura):
                ?>
                <tr>
                    <td><?php echo $factura->id_factura; ?></td>
                    <td><?php echo $factura->cliente_id; ?></td>
                    <td><?php echo $factura->empleado_id; ?></td>
                    <td><?php echo $factura->nt; ?></td>
                    <td><?php echo $factura->direccion; ?></td>
                    <td><?php echo $factura->total; ?></td>
                    <td><?php echo $factura->fecha; ?></td>
                    <td>
                        <a href="<?= base_url('eliminar_ft/' . $factura->id_factura); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_ft/' . $factura->id_factura); ?>" class="btn btn-info">Modificar</a>
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