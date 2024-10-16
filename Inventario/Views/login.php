<!DOCTYPE html>
<html lang="es"> 
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width" />
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="shortcut icon" href="">
    	<title>Ejercicion Almacen</title>
	
    	<!-- FontAwesome JS-->
    	<script defer src="<?php echo base_url(); ?>Assets/css/fontawesome/js/all.min.js"></script>

    	<!-- App CSS -->  
    	<link id="theme-style" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/portal.css">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
    	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
    	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
  	</head> 

  	<body class="app app-login p-0">    	
  	  	<div class="row g-0 app-auth-wrapper">
  		  	<div class="col-12 col-md-12 col-lg-12 auth-main-col text-center p-5">
  		    	<div class="d-flex flex-column align-content-end">
  			    	<div class="app-auth-body mx-auto">	  				    	
  					  	<h2 class="auth-heading text-center mb-5">Iniciar Sesión</h2>
  			      		<div class="auth-form-container text-left">
  						  	<form class="auth-form login-form" id="user" action="<?php echo base_url(); ?>Usuarios/login" method="POST" autocomplete="off">         
  						    	<div class="email mb-3">
  							    	<label class="sr-only" for="correo">Correo</label>
  							    	<input id="correo" name="correo" type="text" class="form-control" placeholder="Correo" required="required">
  						    	</div><!--//form-group-->
  						    	<div class="password mb-3">
  				    				<label class="sr-only" for="pass">Contraseña</label>
  				    				<input id="pass" name="pass" type="password" class="form-control signin-password" placeholder="Contraseña" required="required">
  				    				<div class="extra mt-3 row justify-content-between">  				    					  				    			
							
  				    			</div><!--//form-group-->
								
  				    			<br>
  				    				<button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto" >Ingresar</button>
  				    			</div><br>
  	              				<?php if (isset($_GET['msg'])) { ?>
  	              				  	<div class="alert alert-danger" role="alert">
  	              				    	<strong>Usuario o Contraseña Incorrecta</strong>
  	              				  	</div>
  	              				<?php } ?>
  				    		</form>
  				    	</div><!--//auth-form-container-->	    
  			    	</div><!--//auth-body-->
  		   	 	</div><!--//flex-column-->   
  		  	</div><!--//auth-main-col-->
  		  	   
  	  	</div><!--//row-->

		
  	</body>
</html> 