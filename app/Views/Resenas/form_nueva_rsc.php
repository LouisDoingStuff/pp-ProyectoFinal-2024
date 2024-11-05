<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Nueva Reseña</h3>

            <form action="<?= base_url('guardar_rsc') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="id_resena" class="form-label">ID RESENA</label>
                    <input type="number" class="form-control" id="id_resena" name="id_resena" required autofocus>
                </div>
                <div class="col-md-4">
                    <label for="id_vino" class="form-label">ID VINO</label>
                    <input type="number" class="form-control" id="id_vino" name="id_vino" required >
                </div>
                <div class="col-md-4">
                    <label for="id_cliente" class="form-label">ID CLIENTE</label>
                    <input type="number" class="form-control" id="id_cliente" name="id_cliente" required >
                </div>
                <div class="col-md-4">
                    <label for="puntuacion" class="form-label">PUNTUACIÓN (1-5)</label>
                    <input type="number" class="form-control" id="puntuacion" name="puntuacion" required>
                </div>
                <div class="col-md-8">
                    <label for="comentario" class="form-label">COMENTARIO</label>
                    <input type="text" class="form-control" id="comentario" name="comentario" required>
                </div>


                <div class="col-12">
                    <a href="<?= base_url('ver_rsC'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>