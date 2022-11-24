<?php
    if (isset($datos['email'])&& isset($datos['access'])) {
    	if ($datos['access'] == 100) {
    		    $correo=$_SESSION['correo'] = $datos['email'];
			      $user=$_SESSION['usuario'] = $datos['user'];
			      $_SESSION['access'] = $datos['access'];
            $_SESSION['tipo'] = $datos['tipo_user'];
			      redireccionar('/Principales/dashboard');
    	}

    }else {
      $correo = 'Ingrese sus datos de acceso';
    }
    if(isset($_SESSION['correo']) && isset($_SESSION['access'])) {
      if ($_SESSION['access'] == 100) {
    		redireccionar('/Principales/dashboard');
    	}else{
    		redireccionar('/paginas/formsesion');
    	}

    }else{
?>
<?php require RUTA_APP . '/vistas/inc/header_public.php';?>



<section>
	<div class="container">
		<div class="mx-5 my-5">
	
				<?php require RUTA_APP . '/vistas/inc/forminiciosesion.php';?>


		</div>
	</div>
</section>



<?php require RUTA_APP . '/vistas/inc/footer_public.php';?>
<?php
}
 ?>
