<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Reseña</h3>

            <form action="<?= base_url('modificar_rs') ?>" class="row g-3" method="post" autocomplete="off">


                <div class="col-md-4">
                    <label for="id_resena" class="form-label">ID RESENA</label>
                    <input type="number" class="form-control" id="id_resena" name="id_resena" required autofocus
                    value="<?php $datos['id_resena']?>">
                </div>
                <div class="col-md-4">
                    <label for="id_vino" class="form-label">ID VINO</label>
                    <input type="number" class="form-control" id="id_vino" name="id_vino" required 
                    value="<?php $datos['id_vino']?>">
                </div>
                <div class="col-md-4">
                    <label for="id_cliente" class="form-label">ID CLIENTE</label>
                    <input type="number" class="form-control" id="id_cliente" name="id_cliente" required 
                    value="<?php $datos['id_cliente']?>">
                </div>
                <div class="col-md-4">
                    <label for="puntuacion" class="form-label">PUNTUACIÓN (1-5)</label>
                    <input type="number" class="form-control" id="puntuacion" name="puntuacion" required
                    value="<?php $datos['puntuacion']?>">
                </div>
                <div class="col-md-8">
                    <label for="comentario" class="form-label">COMENTARIO</label>
                    <input type="text" class="form-control" id="comentario" name="comentario" required
                    value="<?php $datos['comentario']?>">
                </div>

                <div class="col-12">
                    <a href="<?= base_url('ver_rs'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>