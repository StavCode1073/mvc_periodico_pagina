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
                        Contenido inicio
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
                  <h5 class="mb-10"> Contenido inicio</h5>
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
                    <h6 class="text-medium mb-10">Registrar Cards </h6>
                      <!-- input style start -->

                      <div class="card-style mb-30">
                        <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/Principales/inicioEdit" method="post" enctype="multipart/form-data">
                        <div class="input-style-1">
                          <label>Titulo</label>
                          <input name="title_card" type="text" placeholder="Titulo" value="" required/>
                        </div>
                        <div class="input-style-1">
                          <label>Texto</label>
                          <textarea name="text_content"  placeholder="Message" rows="3" required></textarea>
                        </div>
                        <div class="input-style-1">
                          <label>Link</label>
                          <input name="link" type="text" placeholder="url de la página" value="" required/>
                        </div>
                        <div class="imput-style-1">
                            <p id="obligatorio"><label for="archivo">Imagen *</label></p>
                            <input type="file" name="imagen" id="imagen" class="btn btn-danger btn-lg" required>
                            <p class="help-block">Maximo 3MB</p>
                        </div>
                      <input tabindex="3" type="submit" name="editar2" class="main-btn primary-btn rounded-md btn-hover" value="Agregar">
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
                <!-- End Title -->
                <div class="title d-flex flex-wrap justify-content-between">
                  <div class="w-100">
                    <h6 class="text-medium mb-10">Contenido Banner</h6>
                      <div class="card-style mb-30">
                      <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/Principales/inicioEdit" method="post" enctype="multipart/form-data">
                        <!-- <h6 class="mb-25">Input Fields</h6> -->
                        <div class="input-style-1">
                          <label>Texto 1</label>
                          <input name="text1" type="text" placeholder="Texto 1" value="<?php echo $datos['header']->texto_banner1 ?>" required />
                        </div>
                        <div class="input-style-1">
                          <label>Texto 2</label>
                          <input name="text2" type="text" placeholder="Texto 2" value="<?php echo $datos['header']->texto_banner2 ?>" required />
                        </div>

                      <input tabindex="3" type="submit" name="editar1" class="main-btn primary-btn rounded-md btn-hover" value="Modificar">

                        <!-- end input -->
                        <!-- <div class="input-style-2">
                          <input type="text" placeholder="Full Name" />
                          <span class="icon"> <i class="lni lni-user"></i> </span>
                        </div> -->
                        <!-- end input -->
                        <!-- <div class="input-style-3">
                          <input type="text" placeholder="Full Name" />
                          <span class="icon"><i class="lni lni-user"></i></span>
                        </div> -->
                        <!-- end input -->
                        </form>
                      </div>
                  </div>
                </div>

                <!-- End Chart -->
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
          <div class="row">
            <div class="col-lg-12">

            <div class="col-lg-7">
              <div class="card-style mb-30">
                <div
                  class="
                    title
                    d-flex
                    flex-wrap
                    justify-content-between
                    align-items-center
                  "
                >
                  <div class="left">
                    <h6 class="text-medium mb-30">Lista cards</h6>
                  </div>
                  <div class="right">
                    <!-- <div class="select-style-1">
                      <div class="select-position select-sm">
                        <select class="light-bg">
                          <option value="">Yearly</option>
                          <option value="">Monthly</option>
                          <option value="">Weekly</option>
                        </select>
                      </div>
                    </div> -->
                    <!-- end select -->
                  </div>
                </div>
                <!-- End Title -->
                <div class="table-responsive">
                  <table class="table top-selling-table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>
                          <h6 class="text-sm text-medium">Imagen</h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">Titulo</h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">Fecha</h6>
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($datos['cards'] as $card) : ?>
                      <tr>
                        <td>
                          <div class="check-input-primary">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="checkbox-1"
                            />
                          </div>
                        </td>
                        <td>
                          <div class="product">
                            <div class="image">
                              <img
                                src="<?php echo RUTA_URL;?>/img/imgall/<?php echo $card->imagen_cards; ?>"
                                alt=""
                              />
                            </div>
                            <p class="text-sm"><?php echo $card->imagen_cards; ?></p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm"><?php echo $card->texto_cards_title; ?></p>
                        </td>
                        <td>
                          <p class="text-sm"><?php echo $card->date_write; ?></p>
                        </td>

                        <td>
                          <div class="action justify-content-end">
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="<?php echo RUTA_URL;?>/Principales/eliminarCard/<?php echo $card->id ?>" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="<?php echo RUTA_URL;?>/Principales/editCard/<?php echo $card->id ?>" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <?php
                        endforeach;
                      ?>
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
              </div>
            </div>
            <!-- End Col -->

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
