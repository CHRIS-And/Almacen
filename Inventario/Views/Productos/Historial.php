<?php if($_SESSION['idRol'] == 2){ ?> <!-- Si es Admin-->
    <?php encabezado() ?> <!-- Poner el header -->
  
    <div class="app-wrapper">
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
<?php  if($_SESSION['idRol']==2){ ?>
    <div class="position-relative mb-3">
                    <div class="row g-3 justify-content-between">
                        <div class="col-auto">
                            <h1 class="app-page-title mb-0">HISTORIAL   ENTRADAS / SALIDAS</h1>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-4">
                            <div class="app-card-body p-3">                                
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left" id="Table">
    							        <thead>
    								        <tr>
                                                <th class="cell" >Nombre</th> 
                                                <th class="cell">Cantidad</th>   
                                                <th class="cell">Producto</th>                                         
                                                <th class="cell" >Tipo</th>
                                                <th class="cell">Fecha</th>
                                            </tr>
                                        </thead>
    					                <tbody>
                                        <?php foreach ($data1 as $us) { ?>
                                     
                                            <?php  if($us['estatus']==0){ ?>                                                                                       
                                           <tr class="bg-secondary  text-white">
                                               <td><?php echo $us['Usuario'] ?></td>    
                                               <td><?php echo $us['cantidad'] ?></td>                                                                                                                                                                                  
                                               <td><?php echo $us['nombre_producto'] ?></td>  
                                               <td><?php echo $us['tipo_movimiento'] ?></td>  
                                               <td><?php echo $us['fecha_hora'] ?></td>
                                           </tr>
                                       
                                           
                                          <?php } if($us['estatus']==1){ ?>
                                            
                                            <tr class="bg-primary  text-white">
                                                <td><?php echo $us['Usuario'] ?></td>    
                                                <td><?php echo $us['cantidad'] ?></td>                                                                                                                                                                                  
                                                <td><?php echo $us['nombre_producto'] ?></td>  
                                                <td><?php echo $us['tipo_movimiento'] ?></td>  
                                                <td><?php echo $us['fecha_hora'] ?></td>
                                            </tr>                                                                                                                          
                                                                                     
                                        <?php } }?>
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->
                            </div><!--//app-card-body-->
                        </div><!--//app-card app-card-orders-table shadow-sm mb-5-->
                    </div><!--//tab-pane fade show active-->
                </div><!--//tab-pane-->


<?php }}  else { ?>
  <?php permisos() ?> 
<?php } ?>
<?php pie() ?> <!-- Pone el fotter -->