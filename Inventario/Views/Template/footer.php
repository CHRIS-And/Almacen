	<div class="app-wrapper">
        <footer class="app-footer">
            <hr class="my-1">
		   
	    </footer><!--//app-footer-->
    </div><!--//app-wrapper-->


<div id="logout" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Pregunta</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Esta seguro que desea salir</p>
            </div>
            <div class="modal-footer ml-auto">
                <a href="<?php echo base_url(); ?>Usuarios/salir" class="btn btn-danger">Si</a>
                <button class="btn btn-primary" data-dismiss="modal" type="button">No</button>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript files-->
<script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/all.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/front.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/sweetalert2@9.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>Assets/js/files.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
		
<script>


    $(document).ready(function() {
        $('#Table').DataTable({
            responsive: true,
			language: {
				"decimal": "",
				"emptyTable": "No hay datos",
				"info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
				"infoEmpty": "Mostrando 0 a 0 de 0 registros",
				"infoFiltered": "(Filtro de _MAX_ total registros)",
				"infoPostFix": "",
				"thousands": ",",
				"lengthMenu": "Mostrar _MENU_ registros",
				"loadingRecords": "Cargando...",
				"processing": "Procesando...",
				"search": "Buscar:",
				"zeroRecords": "No se encontraron coincidencias",
				"paginate": {
					"first": "Primero",
					"last": "Ultimo",
					"next": "Próximo",
					"previous": "Anterior"
				},
				"aria": {
					"sortAscending": ": Activar orden de columna ascendente",
					"sortDescending": ": Activar orden de columna desendente"
				}
			},
                "drawCallback": function( settings ) {
                 $('#Table_paginate').addClass("app-pagination");
            }
		});
    });
       </script>


</body>
</html>
