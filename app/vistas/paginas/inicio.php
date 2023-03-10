<?php require RUTA_APP . '/vistas/inc/header_public.php'; ?>

	<section class="">
		<!-- Background image -->
		<div
		    id="intro-example"
		    class="p-5 text-center bg-image"
		    style="background-image: url('<?php echo RUTA_URL;?>/img/overlay_1.png'), url('<?php echo RUTA_URL;?>/img/fondo.jpg');  background-position: center;"
		  >
		  	<div class="row">
		  		<div class="col-6">
		  			<div class="">
		  				<img src="<?php echo RUTA_URL;?>/img/pdf_file.png" class="rounded mx-auto d-block w-imagen" alt="...">
		  				<br>
		  				<p class="text-white text-center fs-4 bg-dark">
						  <?php echo $datos['header']->texto_banner1 ?>
		  				</p>
		  			</div>
		  		</div>
		  		<div class="col-6">
		  			<img src="<?php echo RUTA_URL;?>/img/escudo-oaxaca.png" class="rounded mx-auto d-block w-imagen-logo" alt="...">
		  			<p class="text-dark"><?php echo $datos['header']->texto_banner2 ?></p>
		  		</div>
		  	</div>
		</div>
		<!-- Background image -->
	</section>

	<section>
			<div class="container my-4">
					<div class="row">
					<?php foreach ($datos['cont'] as $card) : ?>
							<div class="col-12 col-md-4 d-flex justify-content-center pb-3 pb-md-0">
								<a href="<?php echo $card->link; ?>">
								<div class="card" style="width: 18rem;">
									<h6 class="bg-dark text-white text-center"><?php echo $card->texto_cards_title; ?></h6>
								  <img src="<?php echo RUTA_URL;?>/img/imgall/<?php echo $card->imagen_cards; ?>" class="card-img-top" alt="...">
								  <div class="card-body">
								    <p class="card-text">
									<?php echo $card->content_main_text; ?>
									</p>
								  </div>
								</div>
								</a>
							</div>
					<?php
                        endforeach;
                      ?>
					</div>
			</div>
	</section>


	<!--<section class="">
			<div class="container">
				{content}
			</div>
	</section>-->
	<section class="banner_app">
			<div class="container">
					<div class="row">
							<div class="col-12 col-md-12 py-3 d-flex flex-column align-items-center text-white"> 
							   <span style="font-size: 42px ;"><i class="fa-brands fa-google-play"></i></span> 
								<h5 class="text-white mt-10">
									NUESTRA APLICACIÓN YA DISPONIBLE
								</h5>
								<a download href="https://poax.b32.mx/app/assets/imagenes/app-release.apk" type="button" class="btn btn-warning mb-3">Descargar la última versión  </a>
							</div>
					</div>
			</div>
	</section>
	<section class="">
		<footer class="text-center text-white bg-white">
		  <!-- Grid container -->
		  <div class="container py-3">
		    <!-- Section: Social media -->
		    <section class="mb-2">
		      <!-- Facebook -->
		      <a
		        class="btn btn-link btn-floating btn-lg text-dark m-1 text-iconos"
		        href="#!"
		        role="button"
		        data-mdb-ripple-color="dark"
		        ><i class="fab fa-facebook-f"></i
		      ></a>

		      <!-- Twitter -->
		      <a
		        class="btn btn-link btn-floating btn-lg text-dark m-1 text-iconos"
		        href="#!"
		        role="button"
		        data-mdb-ripple-color="dark"
		        ><i class="fa-brands fa-whatsapp"></i></a>

		      <!-- Instagram -->
		      <a
		        class="btn btn-link btn-floating btn-lg text-dark m-1 text-iconos"
		        href="#!"
		        role="button"
		        data-mdb-ripple-color="dark"
		        ><i class="fab fa-instagram"></i
		      ></a>


		    </section>
		    <!-- Section: Social media -->
		  </div>
		  <!-- Grid container -->
		</footer>
	</section>
<?php require RUTA_APP . '/vistas/inc/footer_public.php'; ?>