<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">RESEÑAS</h3>

            <a href="<?= base_url('nueva_rsc') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" id="dataTable" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID RESEÑA</th>
                        <th scope="col">ID VINO</th>
                        <th scope="col">ID CLIENTE</th>
                        <th scope="col">PUNTUACIÓN</th>
                        <th scope="col">COMENTARIO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <?php
                foreach($resenas as $resena):
                ?>
                <tr>
                    <td><?php echo $resena->id_resena; ?></td>
                    <td><?php echo $resena->id_vino; ?></td>
                    <td><?php echo $resena->id_cliente; ?></td>
                    <td><?php echo $resena->puntuacion; ?></td>
                    <td><?php echo $resena->comentario; ?></td>
                    <td>
                        <a href="<?= base_url('buscar_rsc/' . $resena->id_resena); ?>" class="btn btn-info">Modificar</a>
                    </td>
                    
                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>

                </tbody>
            </table>
                <div class="col-12">
                    <a href="<?= base_url('ver_login_clientes'); ?>" class="btn btn-secondary">Regresar</a>
                </div>
<?= $this->endSection('contenido'); ?>