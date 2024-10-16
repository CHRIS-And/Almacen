<?php encabezado() ?> <!-- Poner el header -->

<div class="app-wrapper">
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

    <div class="position-relative mb-3">
                    <div class="row g-3 justify-content-between">
                        <div class="col-auto">
                            <h1 class="app-page-title mb-0">Productos Registrados</h1>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-4">
                            <div class="app-card-body p-3">
                                <div class="row">
                                  <?php if($_SESSION['idRol']==2){ ?>
                                <div class="col-lg-5 mb-2 py-2">  
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="color:white;">
        Nuevo Producto <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
    </button>
                                                           
                                        
    <a  href="<?php echo base_url(); ?>Productos/Historial">
                                <button type="button" class="btn btn-warning" style="color:white;">
                                
        Historial <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
</svg>
    </button>
    </a>                                               
                                        
                                    </div>
                                    <?php } ?>
                                    <div class="col-lg-7">
                                        <?php if (isset($_GET['msg'])) {
                                            $alert = $_GET['msg'];
                                            ?>                                                                                                                                                                      
                                            <?php if ($alert == "modificado") { ?>
                                                <div class="alert alert-success" role="alert">
                                                    <strong>Producto modificado exitosamente.</strong>
                                                </div>
                                                <?php } else if ($alert == "error_de_cantidad_negativa") { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>La cantidad no acepta valores menores de 0.</strong>
                                                </div>
                                                <?php } else if ($alert == "error_de_cantidad") { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Error en la cantidad de salida.</strong>
                                                </div>
                                            <?php } else if ($alert == "inactivo") { ?>     
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>El produto fue inactivado.</strong>
                                                </div>                                              
                                            <?php } else if ($alert == "reactivado"){ ?>
                                                <div class="alert alert-success" role="alert">
                                                    <strong>El produto fue reactivado.</strong>
                                                </div>
                                            <?php }
                                        } ?>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left" id="Table">
    							        <thead>
    								        <tr>
                                                <th class="cell" >Nombre</th> 
                                                <th class="cell">Cantidad</th>                                            
                                                <th class="cell" >Acciones</th>
                                            </tr>
                                        </thead>
    					                <tbody>
                                        <?php foreach ($data1 as $us) { ?>
                                        
                                          <?php if($us['estatus']==0 ){ ?>
                                            
                                            <tr class="bg-secondary  text-white">
                                                <td><?php echo $us['nombre'] ?></td>    
                                                <td><?php echo $us['cantidad'] ?></td>                                                                                                                                                                                  
                                                <td>
                                                   
                                                   <?php if($us['estatus']==1){ ?>
                                                    <form action="<?php echo base_url() ?>Productos/eliminar?idProducto=<?php echo $us['idProducto']; ?>" method="post" class="d-inline elim">
                                                        <button title="Inactivar" type="submit" class="btn btn-secondary mb-2"><i class="fas fa-user-slash"></i></button>
                                                    </form>
                                                    <?php } elseif($us['estatus']==0 && $_SESSION['idRol']==2){?>
                                                    <form action="<?php echo base_url() ?>Productos/reactivar?idProducto=<?php echo $us['idProducto']; ?>" method="post" class="d-inline">
                                                        <button title="Reactivar" type="submit" class="btn btn-info mb-2"><i class="fas fa-arrow-left"></i></button>
                                                    </form>  
                                                    <?php } ?> 
                                                </td>
                                            </tr>
                                        
                                            <?php } ?>
                                          <?php if($us['estatus']==1){ ?>
                                            
                                            <tr class="bg-info text-white">
                                                <td><?php echo $us['nombre'] ?></td>  
                                                <td><?php echo $us['cantidad'] ?></td>                                                                                                                                                                                    
                                                <td>
                                                <?php if($_SESSION['idRol']==1){?>
                                                    <a title="Restar Inventario" href="<?php echo base_url() ?>Productos/restar?idProducto=<?php echo $us['idProducto']; ?>" class="btn btn-danger mb-2" ><i class="fas fa-arrow-down"></i></a>
                                                   <?php }else{?>
                                                    <a title="Aumentar Inventario" href="<?php echo base_url() ?>Productos/editar?idProducto=<?php echo $us['idProducto']; ?>" class="btn btn-primary mb-2"><i class="fas fa-arrow-up"></i></a>
                                                
                                                  
                                                    <form action="<?php echo base_url() ?>Productos/eliminar?idProducto=<?php echo $us['idProducto']; ?>" method="post" class="d-inline elim">
                                                        <button title="Inactivar" type="submit" class="btn btn-danger mb-2"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                    <?php }} ?>
                                                   
                                                    
                                                </td>
                                            </tr>
                                        
                                            <?php } ?>
                                           
                                        
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->
                            </div><!--//app-card-body-->
                        </div><!--//app-card app-card-orders-table shadow-sm mb-5-->
                    </div><!--//tab-pane fade show active-->
                </div><!--//tab-pane-->


 <!-- Modal -->
 <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Encabezado del modal -->
                <div class="modal-header">
                    <h4 class="modal-title">NUEVO PRODUCTO</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form class="auth-form resetpass-form"  method="POST" action="<?php echo base_url(); ?>Productos/crear" autocomplete="off" id="miFormulario">  
                <!-- Contenido del modal -->
                <div class="modal-body">
                    <label for="Nombre">Nombre del Producto:</label><br>
                    <input class="form-control" type="text" name='nombre' style='width:100%'><br>                    
                </div>
 
                
                <!-- Pie del modal -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Crear</button>
      </div>
    </div>
  </div>


</div>




<?php pie() ?> <!-- Pone el fotter -->