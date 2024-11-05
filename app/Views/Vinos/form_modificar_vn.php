<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Vino</h3>

            <form action="<?= base_url('modificar_vn') ?>" class="row g-3" method="post" autocomplete="off">


                <div class="col-md-4">
                    <label for="id_vino" class="form-label">ID VINO</label>
                    <input type="number" class="form-control" id="id_vino" name="id_vino" required autofocus
                    value="<?php $datos['id_vino']?>">
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required
                    value="<?php $datos['nombre']?>">
                </div>

                <div class="col-md-4">
                    <label for="anio" class="form-label">AÑO</label>
                    <input type="number" class="form-control" id="anio" name="anio" required
                    value="<?php $datos['anio']?>">
                </div>

                <div class="col-md-4">
                    <label for="precio" class="form-label">PRECIO</label>
                    <input type="number" class="form-control" id="precio" name="precio" required
                    value="<?php $datos['precio']?>">
                </div>
                
                <div class="col-md-4">
                    <label for="cantidad_stock" class="form-label">STOCK</label>
                    <input type="number" class="form-control" id="cantidad_stock" name="cantidad_stock" required
                    value="<?php $datos['cantidad_stock']?>">
                </div>

                <div class="col-md-4">
                    <label for="id_categoria" class="form-label">ID CATEGORIA</label>
                    <input type="number" class="form-control" id="id_categoria" name="id_categoria" required
                    value="<?php $datos['id_categoria']?>">
                </div>

                <div class="col-md-4">
                    <label for="id_proveedor" class="form-label">ID PROVEEDOR</label>
                    <input type="number" class="form-control" id="id_proveedor" name="id_proveedor" required
                    value="<?php $datos['id_proveedor']?>">
                </div>


                <div class="col-12">
                    <a href="<?= base_url('ver_vn'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>