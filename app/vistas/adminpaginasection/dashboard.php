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
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Inicio 
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
                <div class="icon purple">
                  <a href="<?php echo RUTA_URL; ?>/Principales/inicioedit"> 
                    <!-- <i class="lni lni-cart-full"></i> -->
                    <i class="lni lni-html5"></i>
                  </a>
                </div>                
                  <div class="content">
                    <a href="<?php echo RUTA_URL; ?>/Principales/inicioedit">
                    <!-- <h6 class="mb-10">New Ordersaaaa</h6>
                    <h3 class="text-bold mb-10">34567</h3>
                    <p class="text-sm text-success">
                      <i class="lni lni-arrow-up"></i> +2.00%
                      <span class="text-gray">(30 days)</span>
                    </p> -->
                      <h5 class="mb-10"> Contenido inicio</h5>
                    </a>
                  </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
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
                  <a href="<?php echo RUTA_URL; ?>/Principales/editarinfoinst"> 
                    <h5 class="mb-10"> Información institucional</h5>
                  </a>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon primary">
                  <!-- <i class="lni lni-credit-cards"></i> -->
                  <i class="lni lni-html5"></i>
                </div>
                <div class="content">
                  <!-- <h6 class="mb-10">Total Expense</h6>
                  <h3 class="text-bold mb-10">$24,567</h3>
                  <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> -2.00%
                    <span class="text-gray">Expense</span>
                  </p> -->
                  <a href="<?php echo RUTA_URL; ?>/Principales/editarServicio"> 
                  <h5 class="mb-10"> Servicios</h5>
                  </a>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon orange">
                  <!-- <i class="lni lni-user"></i> -->
                  <i class="lni lni-html5"></i>
                </div>
                <div class="content">
                  <!-- <h6 class="mb-10">New User</h6>
                  <h3 class="text-bold mb-10">34567</h3>
                  <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> -25.00%
                    <span class="text-gray"> Earning</span>
                  </p> -->
                  <a href="<?php echo RUTA_URL; ?>/Principales/tabPrecios"> 
                    <h5 class="mb-10"> Tabuladores de precios</h5>
                  </a>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon purple">
                  <!-- <i class="lni lni-cart-full"></i> -->
                  <i class="lni lni-html5"></i>
                </div>
                <div class="content">
                  <!-- <h6 class="mb-10">New Ordersaaaa</h6>
                  <h3 class="text-bold mb-10">34567</h3>
                  <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +2.00%
                    <span class="text-gray">(30 days)</span>
                  </p> -->
                  <a href="<?php echo RUTA_URL; ?>/Principales/dondePublicar"> 
                    <h5 class="mb-10"> Dónde publicar</h5>
                  </a>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
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
          <!-- End Row -->

          <div class="row">
            <div class="col-lg-5">
              <div class="card-style mb-30">

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
