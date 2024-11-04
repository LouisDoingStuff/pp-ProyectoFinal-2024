<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">EMPLEADOS</h3>

            <a href="<?= base_url('nuevo_ep') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" id="dataTable" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID EMPLEADO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">NIT</th>
                        <th scope="col">DIRECCIÓN</th>
                        <th scope="col">CONTRASEÑA</th>
                        <th scope="col">ID TIPO USUARIO</th>
                        <th scope="col">ID ESTADO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <?php
                foreach($empleados as $empleado):
                ?>
                <tr>
                    <td><?php echo $empleado->id_empleado; ?></td>
                    <td><?php echo $empleado->nombre; ?></td>
                    <td><?php echo $empleado->apellido; ?></td>
                    <td><?php echo $empleado->email; ?></td>
                    <td><?php echo $empleado->nt; ?></td>
                    <td><?php echo $empleado->direccion; ?></td>
                    <td><?php echo $empleado->contrasena; ?></td>
                    <td><?php echo $empleado->id_tipo_usuario; ?></td>
                    <td><?php echo $empleado->id_estado; ?></td>
                    <td>
                        <a href="<?= base_url('eliminar_ep/' . $empleado->id_empleado); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_ep/' . $empleado->id_empleado); ?>" class="btn btn-info">Modificar</a>
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