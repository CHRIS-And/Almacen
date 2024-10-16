<?php if($_SESSION['idRol'] == 2){ ?> <!-- Si es Admin-->
    <?php encabezado() ?> <!-- Poner el header -->
    
<!-- Begin Page Content -->
<div class="app-wrapper"><br>
    <section>
        <div class="row">
            <div class="col-lg-3 mt-auto">
            </div>
            <div class="col-lg-6 mt-auto">
                <div class="card container-fluid2">
                    <h5 class="card-header"><i class="fa fa-arrow-up"></i> <strong>Aumentar Producto</strong></h5>
                    <form method="post" action="<?php echo base_url(); ?>Productos/actualizar" autocomplete="off"> 
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="id" type="hidden" name="idProducto" value="<?php echo $data1['idProducto']; ?>" readonly>
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo $data1['nombre']; ?>" required readonly>
                            </div>
                            <div class="form-group">
                                 <label for="nombre">Cantidad</label>
                                 <input id="cantidad" type="hidden" name="cantidad" value="<?php echo $data1['cantidad']; ?>" readonly>
                                 <input id="cantidad_entrada" class="form-control" type="number" name="cantidad_entrada" placeholder="Cantidad"  required>
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Aceptar</button>
                            <a href="<?php echo base_url(); ?>Inicio/Home" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<br>
<?php }  else { ?> <!-- En caso de ser valido -->
  <?php permisos() ?> <!-- Poner el mensaje de erro -->
<?php } ?>
<?php pie() ?> <!-- Pone el fotter -->