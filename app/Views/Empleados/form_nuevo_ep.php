<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Nuevo Empleado</h3>

            <form action="<?= base_url('guardar_ep') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="id_empleado" class="form-label">ID EMPLEADO</label>
                    <input type="number" class="form-control" id="id_empleado" name="id_empleado" required autofocus>
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="col-md-8">
                    <label for="apellido" class="form-label">APELLIDO</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="col-md-4">
                    <label for="nt" class="form-label">NIT</label>
                    <input type="number" class="form-control" id="nt" name="nt" required>
                </div>

                <div class="col-md-8">
                    <label for="direccion" class="form-label">DIRECCIÓN</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>
                
                <div class="col-md-8">
                    <label for="contrasena" class="form-label">CONTRASEÑA</label>
                    <input type="text" class="form-control" id="contrasena" name="contrasena" required>
                </div>

                <div class="col-md-4">
                    <label for="id_tipo_usuario" class="form-label">ID TIPO USUARIO</label>
                    <input type="number" class="form-control" id="id_tipo_usuario" name="id_tipo_usuario" required autofocus>
                </div>

                <div class="col-md-4">
                    <label for="id_estado" class="form-label">ID ESTADO</label>
                    <input type="number" class="form-control" id="id_estado" name="id_estado" required>
                </div>


                <div class="col-12">
                    <a href="<?= base_url('ver_ep'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

                


            </form>


<?= $this->endSection('contenido'); ?>