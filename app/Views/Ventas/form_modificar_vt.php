<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Venta</h3>

            <form action="<?= base_url('modificar_vt') ?>" class="row g-3" method="post" autocomplete="off">


                <div class="col-md-4">
                    <label for="id_detalle" class="form-label">ID DETALLE</label>
                    <input type="number" class="form-control" id="id_detalle" name="id_detalle" required autofocus
                    value="<?php $datos['id_detalle']?>">
                </div>
                <div class="col-md-4">
                    <label for="id_venta" class="form-label">ID VENTA</label>
                    <input type="number" class="form-control" id="id_venta" name="id_venta" required 
                    value="<?php $datos['id_venta']?>">
                </div>
                <div class="col-md-4">
                    <label for="productoId" class="form-label">ID PRODUCTO</label>
                    <input type="number" class="form-control" id="productoId" name="productoId" required 
                    value="<?php $datos['productoId']?>">
                </div>
                <div class="col-md-4">
                    <label for="cantidadCompra" class="form-label">CANTIDAD</label>
                    <input type="number" class="form-control" id="cantidadCompra" name="cantidadCompra" required 
                    value="<?php $datos['cantidadCompra']?>">
                </div>
                <div class="col-md-4">
                    <label for="precio" class="form-label">PRECIO</label>
                    <input type="number" class="form-control" id="precio" name="precio" required 
                    value="<?php $datos['precio']?>">
                </div>


                <div class="col-12">
                    <a href="<?= base_url('ver_vt'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>