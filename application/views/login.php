<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("America/mexico_city");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?= base_url();?>public/image/logo.png" />
	<link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?= base_url();?>public/css/main.css?<?= date('Y-m-d H:i:s');?>" >
	<script src="https://kit.fontawesome.com/68e3a45157.js" crossorigin="anonymous"></script>
	<title>Barbería</title>    
</head>
<body id="Login">
	<div id="contenedorLogin">	
				<div class="wrapper fadeInDown">
					<div id="formContent">
					    <div class="fadeIn first">
					    	<br>
					      <img class="rounded-circle" src="<?= base_url();?>public/image/logo.png" id="icon" alt="User Icon" width="150px" />
					    </div>
					    <br>
						<?php
							if ( isset($mensaje ) ) {				
						?>
						<div class="alert <?=$alert?> alert-dismissible fade show" role="alert">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong><?=$title?></strong> <?=$mensaje?>.
						</div>
						<?php
							}
						?>
					    <!-- Login Form -->
					    <form role="form" action="<?=base_url()?>index.php/LoginUser/iniciar_sesion" method="POST">
					    	<input type="text" id="login" class="fadeIn second" name="nombre" placeholder="Usuario">
					    	<input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
					    	<button  type="submit"class="btn btn-primary btn-lg" id="btn-login">Ingresar</button>
					    </form>
					    <br>
					</div>
				  	<br>
				  	<br>
				</div>
	</div>
	<script src="<?= base_url();?>public/js/jquery-3-3-1.js"></script>    
    <script src="<?= base_url();?>public/js/popper.min.js"  ></script>
    <script src="<?= base_url();?>public/js/bootstrap.min.js" ></script>
</body>
</html>