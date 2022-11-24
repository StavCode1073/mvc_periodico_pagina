<div class="container my-5">
<div class="card card-body bg-dark">
  <div class="row">
  <div class="col-12 col-sm-3 col-md-4"></div>
   <section  class="col-12 col-sm-6 col-md-4" >
     <header>
          <h3 class="text-light"> <?php echo $correo;?></h3>
          <hr>
     </header>
    <form action="<?php echo RUTA_URL;?>/paginas/formSesion" method="post">
        <div class="form-group">
          <br>
          <labelc class="text-light" for="nombre">Email: <sup>*  </sup></labelc>
          <input type="email" name="email" class="form-control form-control-lg" placeholder="Email:" required>
        </div>
        <div class="form-group">
          <br>
          <label class="text-light" for="nombre">Contraseña: <sup>*  </sup></label>
          <input type="password" name="pass" class="form-control form-control-lg" placeholder="Contraseña:" required>
        </div>
        <br><br>
        <!--<input class="btn btn-warning" value="Entrar">-->
        <button type="submit" class="btn btn-outline-success">Ingresar <i class="fas fa-angle-double-right"></i></button>
    </form>
  </section>
  <div class="col-12 col-sm-3 col-md-4"></div>
</div>
</div>
</div>