<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!--<title>Periódico oficial del estado</title>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
	  <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	  <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/estilos_front.css">
    <link rel="shortcut icon" href="<?php echo RUTA_URL;?>/img/icono.png" />
    <title><?php echo NOMBRESITIO;?></title>

  	<style type="text/css">
  			.colordiv{
  				top: 150px;
  			}
  			.alto-baner{
				margin-bottom: 50px;
  			}
  			.w-imagen{
  				width: 90px;
  			}
  			.w-imagen-logo{
  				width: 100px;
  			}
  			.fondo-baner-contacto{
  				background-color: #1380bb;
  			}
  			.text-iconos{
  				font-size: 24px;
  			}
  	</style>
</head>

<body>
	<div class="pt-5 alto-baner">
		 <div>
		 	<img src="<?php echo RUTA_URL;?>/img/logo.png" class="rounded w-img-primary mx-auto d-block" alt="...">
		 </div>
	</div>
	<div class="colordiv" style="background-color: #9d2449;">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
			  <div class="container-fluid">
			    <!--<a class="navbar-brand" href="#">Navbar</a>-->
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarColor02">
			      <ul class="navbar-nav me-auto">
			        <li class="nav-item">
			          <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/index">Inicio
			            <span class="visually-hidden">(current)</span>
			          </a>
			        </li>
					<li class="nav-item">
			          <a class="nav-link" href="<?php echo RUTA_URL; ?>/paginas/archivosPeriodico">Archivos periódicos</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="<?php echo RUTA_URL; ?>/paginas/informacionInstitucional">Informacion institucional</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="<?php echo RUTA_URL; ?>/paginas/servicios">Servicios</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="<?php echo RUTA_URL; ?>/paginas/tabuladorPrecio">Tabulador de precios</a>
			        </li>
					<li class="nav-item">
			          <a class="nav-link" href="<?php echo RUTA_URL; ?>/paginas/dondePublicar">Dónde Publicar</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="<?php echo RUTA_URL; ?>/paginas/contacto">Contacto</a>
			        </li>
			        <!--<li class="nav-item dropdown">
			          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
			          <div class="dropdown-menu">
			            <a class="dropdown-item" href="#">Action</a>
			            <a class="dropdown-item" href="#">Another action</a>
			            <a class="dropdown-item" href="#">Something else here</a>
			            <div class="dropdown-divider"></div>
			            <a class="dropdown-item" href="#">Separated link</a>
			          </div>
			        </li>-->
			      </ul>

			    </div>
			    
			  </div>
			</nav>
		</div>
	</div>