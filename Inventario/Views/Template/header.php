<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="author" content="">
	    <meta name="robots" content="all,follow">

	    <title>Ejercicio Almacen</title>

	    <!-- theme stylesheet-->
		<link rel="stylesheet" href="<?= base_url(); ?>Assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">
		<link id="theme-style" rel="stylesheet" href="<?= base_url(); ?>Assets/css/portal.css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<!-- URL-->
		<?php 
			$link = $_SERVER['REQUEST_URI'];
			$linkShort = substr($link, 0, strrpos($link, "/")); 
		?>
	</head>

	<body class="app">
		<input type="hidden" id="url" value="<?= base_url(); ?>">
	    <header class="app-header fixed-top">
	        <div class="app-header-inner">
		        <div class="container-fluid py-2">
			        <div class="app-header-content">
			            <div class="row justify-content-between align-items-center">
					        <div class="col-auto">
						        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    	    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
										<title>Menu</title>
										<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
									</svg>
						        </a>
					        </div>
							
			                <div class="search-mobile-trigger d-sm-none col">
				                <i class="search-mobile-trigger-icon font-normal"><?= utf8_encode(strftime('%d/%B/%Y')); ?></i>
				            </div>
						
			            	<div class="app-utilities col-auto">
				            	
				            	<div class="app-utility-item app-user-dropdown dropdown">
					        	    <a class="dropdown-toggle" id="user-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><span >Opciones</span></a>
					        	    <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">																														
										<li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout">Salir</a></li>
									</ul>
				            	</div><!--//app-user-dropdown-->
			            	</div><!--//app-utilities-->
			        	</div><!--//row-->
		            </div><!--//app-header-content-->
		        </div><!--//container-fluid-->
	        </div>

	        <div id="app-sidepanel" class="app-sidepanel">
		        <div id="sidepanel-drop" class="sidepanel-drop"></div>
		        <div class="sidepanel-inner d-flex flex-column">
			        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
			       
				    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					    <ul class="app-menu list-unstyled accordion" id="menu-accordion">

							<!--//Opciones del menú--> 
							<br>
						    <li class="nav-item">
						        <a class="nav-link" href="<?php echo base_url(); ?>Inicio/Home">
							        <span class="nav-icon">
							        	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  	<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
										  	<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
										</svg>
							        </span>
			                        <span class="nav-link-text">Inicio</span>
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
					    </ul><!--//app-menu-->
				    </nav><!--//app-nav-->

		        </div><!--//sidepanel-inner-->
		    </div><!--//app-sidepanel-->
	    </header><!--//app-header-->