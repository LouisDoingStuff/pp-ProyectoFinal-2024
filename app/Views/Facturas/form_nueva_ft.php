<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Nueva Factura</h3>

            <form action="<?= base_url('guardar_ft') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="id_factura" class="form-label">ID FACTURA</label>
                    <input type="number" class="form-control" id="id_factura" name="id_factura" required autofocus>
                </div>

                <div class="col-md-4">
                    <label for="cliente_id" class="form-label">ID CLIENTE</label>
                    <input type="number" class="form-control" id="cliente_id" name="cliente_id" required >
                </div>

                <div class="col-md-4">
                    <label for="empleado_id" class="form-label">ID EMPLEADO</label>
                    <input type="number" class="form-control" id="empleado_id" name="empleado_id" required >
                </div>

                <div class="col-md-4">
                    <label for="nt" class="form-label">NIT</label>
                    <input type="number" class="form-control" id="nt" name="nt" required >
                </div>

                <div class="col-md-8">
                    <label for="direccion" class="form-label">DIRECCIÓN</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>

                <div class="col-md-4">
                    <label for="total" class="form-label">TOTAL</label>
                    <input type="number" class="form-control" id="total" name="total" required >
                </div>
                
                <div class="col-md-4">
                    <label for="fecha" class="form-label">FECHA</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>



                <div class="col-12">
                    <a href="<?= base_url('ver_ft'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>