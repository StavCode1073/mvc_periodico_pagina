<?php
if(isset($_SESSION['correo']) && isset($_SESSION['tipo'])) {
  $type_user = $_SESSION['tipo']; 
  $correo=$_SESSION['correo'];
  $user=$_SESSION['usuario'];
  $acceso = $_SESSION['access'];
 ?>
<?php  require RUTA_APP . '/vistas/inc/header_admin.php'; ?>

    <!-- ======== sidebar-nav start =========== -->
    <?php require RUTA_APP . '/vistas/inc/izquierda.php'; ?>

    <!-- ======== sidebar-nav end =========== -->
    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <?php require RUTA_APP . '/vistas/inc/menus.php'; ?>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Gestion de secciones website</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="<?php echo RUTA_URL; ?>/Principales/dashboard">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Editar Contacto
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="row">
          <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon success">
                  <!-- <i class="lni lni-dollar"></i> -->
                  <i class="lni lni-html5"></i>
                </div>
                <div class="content">
                  <!-- <h6 class="mb-10">Total Income</h6>
                  <h3 class="text-bold mb-10">$74,567</h3>
                  <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +5.45%
                    <span class="text-gray">Increased</span>
                  </p> -->
                  <a href="<?php echo RUTA_URL; ?>/Principales/editContacto"> 
                  <h5 class="mb-10"> Contacto</h5>
                  </a>
                </div>
              </div>
              <!-- End Icon Cart -->
          </div>
            <!-- End Col -->

          <!-- End Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card-style mb-30">
                <div class="title d-flex flex-wrap justify-content-between">
                  <div class="w-100">
                    <h6 class="text-medium mb-10">Editar información </h6>
                      <!-- input style start -->

                      <div class="card-style mb-30">
                        <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/Principales/editContacto" method="post" enctype="multipart/form-data">
                        <div class="input-style-1">
                          <label>Titulo</label>
                          <input name="title" type="text" placeholder="Titulo" value="<?php echo $datos['info']->tutulo;?>" required/>
                        </div>
                        <div class="input-style-1">
                          <label>Texto</label>
                          <textarea name="text_content" id="textContent"  placeholder="Message" rows="3" required><?php echo $datos['info']->texto_content; ?></textarea>
                        </div>
                      <input tabindex="3" type="submit" name="editar1" class="main-btn primary-btn rounded-md btn-hover" value="Modificar">
                        </form>
                      </div>
                  </div>

                  <!-- <div class="left">
                    <h6 class="text-medium mb-10">Yearly subscription</h6>
                  </div> -->
                  <!-- <div class="right"></div> -->
                </div>
                <!-- End Title -->

                <!-- End Chart -->
              </div>
            </div>

            <!-- End Col -->
          </div>

          <!-- End Row -->
          <div class="row">
            <div class="col-lg-7">
              <div class="card-style mb-30">

              </div>
            </div>
            <!-- End Col -->
            <div class="col-lg-5">
              <div class="card-style mb-30">

              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
          <div class="row">
            <div class="col-lg-5">
              <div class="card-style calendar-card mb-30">
              </div>
            </div>
            <!-- End Col -->
            <div class="col-lg-7">
              <div class="card-style mb-30">
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      <?php  require RUTA_APP . '/vistas/inc/footer_admin.php'; ?> 
<?php
}else{
redireccionar('/paginas/loginadm');
}
 ?>
