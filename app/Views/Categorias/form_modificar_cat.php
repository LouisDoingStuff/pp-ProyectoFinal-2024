<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Categoria</h3>

            <form action="<?= base_url('modificar_cat') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="id_categoria" class="form-label">ID CATEGORIA</label>
                    <input type="number" class="form-control" id="id_categoria" name="id_categoria" required autofocus
                    value="<?php $datos['id_categoria']?>">
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required
                    value="<?php $datos['nombre']?>">
                </div>

                <div class="col-md-4">
                    <label for="descripcion" class="form-label">DESCRIPCION</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required autofocus
                    value="<?php $datos['descripcion']?>">
                </div>


                <div class="col-12">
                    <a href="<?= base_url('ver_cat'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>