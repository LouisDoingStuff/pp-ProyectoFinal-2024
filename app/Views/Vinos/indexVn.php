<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">VINOS</h3>

            <a href="<?= base_url('nuevo_vn') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" id="dataTable" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID VINO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">AÑO</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">CANTIDAD STOCK</th>
                        <th scope="col">ID CATEGORIA</th>
                        <th scope="col">ID PROVEEDOR</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <?php
                foreach($vinos as $vino):
                ?>
                <tr>
                    <td><?php echo $vino->id_vino; ?></td>
                    <td><?php echo $vino->nombre; ?></td>
                    <td><?php echo $vino->anio; ?></td>
                    <td><?php echo $vino->precio; ?></td>
                    <td><?php echo $vino->cantidad_stock; ?></td>
                    <td><?php echo $vino->id_categoria; ?></td>
                    <td><?php echo $vino->id_proveedor; ?></td>
                    <td>
                        <a href="<?= base_url('eliminar_vn/' . $vino->id_vino); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_vn/' . $vino->id_vino); ?>" class="btn btn-info">Modificar</a>
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