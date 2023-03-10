	<!-- Footer -->
    <footer class="principal_footer text-center text-lg-start  text-white mt-2">

<!-- Section: Links  -->
<section class="pt-5">
  <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-12 col-md-3 col-lg-4 col-xl-4 mx-auto mb-4 d-flex flex-column justify-content-center">
        <!-- Content -->
        <h6 class=" fw-bold mb-2 h5 text-center">
          <!-- <i class="fas fa-gem me-3 text-secondary"></i>Gobierno del Estado de Oaxaca -->
        </h6>
        <p>
            <img src="<?php echo RUTA_URL;?>/img/logo-oaxaca.png" class="rounded mx-auto d-block w-imagen-logo-pie" alt="...">
        </p>
        <!--<p>
          Here you can use rows and columns to organize your footer content. Lorem ipsum
          dolor sit amet, consectetur adipisicing elit.
        </p>-->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-12 col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
          Acceso rapido
        </h6>
        <?php foreach ($datos['accesos'] as $acceso) : ?>
            <p><a href="<?php echo $acceso->link; ?>" > <i class="fa-solid fa-link text-white me-3"></i> <?php echo $acceso->name; ?></a></p>
        <?php endforeach; ?>    
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-12 col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">Contactos</h6>
        <?php foreach ($datos['contact'] as $contacto) : ?>
          <?php if($contacto->tipo == "mail"){ ?>
            <p>
              <i class="fas fa-envelope me-3 text-white"></i>
              <?php echo $contacto->info; ?>
            </p>
          <?php } ?>
          <?php if($contacto->tipo == "tel"){ ?>
            <p><i class="fas fa-phone me-3 text-white"></i><?php echo $contacto->info; ?></p>
          <?php } ?>
        <?php
          
          endforeach;
        ?>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
  © Portal de Gobierno del Estado de Oaxaca 2023
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
<!-- <section class="container">
  <iframe id="inlineFrameExample"
          title="Inline Frame Example"
          src="http://www.b32consultores.com/periodico/index.php?page=tabulador-de-precios"  
          scrolling="no" 
          style=" width: 100%; height: 500px;  overflow: hidden;" >
          
  </iframe>
</section>-->


