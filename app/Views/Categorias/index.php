<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">CATEGORIAS</h3>

            <a href="<?= base_url('nueva_cat') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" id="dataTable" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">CATEGORIA ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">ACCIONES</th>
                        
                    </tr>
                </thead>
                <?php
                foreach($categoria as $categoria):
                ?>
                <tr>
                    <td><?php echo $categoria->id_categoria; ?></td>
                    <td><?php echo $categoria->nombre; ?></td>
                    <td><?php echo $categoria->descripcion; ?></td>
                    <td>
                        <a href="<?= base_url('eliminar_cat/' . $categoria->id_categoria); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_cat/' . $categoria->id_categoria); ?>" class="btn btn-info">Modificar</a>
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