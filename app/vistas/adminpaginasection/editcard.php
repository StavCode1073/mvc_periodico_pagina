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
                        Editar
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

          <!-- End Row -->
          <div class="row">
            <div class="col-lg-7">
              <div class="card-style mb-30">
                <div class="title d-flex flex-wrap justify-content-between">
                  <div class="w-100">
                    <h6 class="text-medium mb-10">Contenido Banner</h6>
                      <!-- input style start -->

                      <div class="card-style mb-30">
                      <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/Principales/editCard/<?php echo $datos['cont']->id; ?>" method="post" enctype="multipart/form-data">
                        <!-- <h6 class="mb-25">Input Fields</h6> -->
                          <div class="input-style-1">
                            <label>Titulo</label>
                            <input name="title_card" type="text" placeholder="Titulo" value="<?php echo $datos['cont']->texto_cards_title ?>" />
                          </div>
                          <div class="input-style-1">
                            <label>Link</label>
                            <input name="link" type="text" placeholder="url de la página" value="<?php echo $datos['cont']->link;?>" required/>
                          </div>
                          <div class="input-style-1">
                            <label>Texto</label>
                            <textarea name="text_content"  placeholder="Message" rows="3"><?php echo $datos['cont']->content_main_text ?></textarea>
                          </div>

                          <div class="imput-style-1">
                              <p id="obligatorio"><label for="archivo">Imagen *</label></p>
                              <input type="file" name="imagen" id="imagen" class="btn btn-danger btn-lg" >
                              <p class="help-block">Maximo 3MB</p>
                          </div>
                          <!-- <a
                          href="#0"
                          class="main-btn primary-btn rounded-md btn-hover"
                          >Primary</a
                        > -->
                        <input  id="id_user" name="imgname" type="hidden" value="<?php echo $datos['cont']->imagen_cards;?>" size="26" required />
                        <input tabindex="3" type="submit" name="editar2" class="main-btn primary-btn rounded-md btn-hover" value="Modificar">
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
            <div class="col-lg-5">
              <div class="card-style mb-30">
              <h6 class="text-medium mb-10">Imagen card</h6>
              <?php
              switch ($datos['cont']->type) {
              case 'application/pdf':
              echo"
                <h4>Nobre del Archivo: ".$datos['cont']->type."</h4>
                <br>
                <a  title='VISUALIZAR IMAGEN' target='_Blank' href='".RUTA_URL."/img/imgall/".$datos['cont']->imagen_cards."'>
                  <span class='fas fa-file-pdf tamanioiconEdit'></span>
                </a>";
              break;
              case 'application/xlsx':
              echo"
                  <h4>Nobre del Archivo: ".$datos['cont']->type."</h4>
                  <br>
                  <a  title='VISUALIZAR IMAGEN' target='_Blank' href='".RUTA_URL."/img/imgall/".$datos['cont']->imagen_cards."'>
                    <span class='fas fa-file-excel tamanioiconEditexel'></span>
                  </a>";
              break;
              case 'application/docx':
                  echo"
                  <h4>Nobre del Archivo: ".$datos['cont']->type."</h4>
                  <br>
                    <a  title='VISUALIZAR IMAGEN' target='_Blank' href='".RUTA_URL."/img/imgall/".$datos['cont']->imagen_cards."'>
                      <span class='fas fa-file-word tamanioiconEditword'></span>
                    </a>";
              break;
              default:
                  echo"
                  <a title='VISUALIZAR IMAGEN'>
                    <img src='".RUTA_URL."/img/imgall/".$datos['cont']->imagen_cards."' class='img-responsive img-thumbnail'>
                  </a>";
              break;
              }
               ?>
                <!-- End Title -->
                <div class="chart">
                 
                </div>
                <!-- End Chart -->
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card-style mb-30">
              <div class="title d-flex flex-wrap justify-content-between">
                  <div class="w-100">
                    <h6 class="text-medium mb-10">Contenido Principal</h6>
                      <!-- input style start -->
                      <div class="card-style mb-30">

                      </div>

                  </div>
                </div>
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
