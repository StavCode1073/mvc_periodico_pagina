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
                        Editar footer
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
                  <h5 class="mb-10"> Contenido footer</h5>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->

          <!-- End Row -->
          <div class="row">
            <div class="col-lg-6">
              <div class="card-style mb-30">
                <div class="title d-flex flex-wrap justify-content-between">
                  <div class="w-100">
                    <h6 class="text-medium mb-10">Agregar acceso rapido </h6>
                      <!-- input style start -->

                      <div class="card-style mb-30">
                        <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/Principales/pie" method="post" enctype="multipart/form-data">
                        <div class="input-style-1">
                          <label>Nombre</label>
                          <input name="nombre" type="text" placeholder="Nombre" value="" required/>
                        </div>
                        <div class="input-style-1">
                          <label>Link</label>
                          <input name="link" type="text" placeholder="url de la página" value="" required/>
                        </div>

                      <input tabindex="3" type="submit" name="editar1" class="main-btn primary-btn rounded-md btn-hover" value="Agregar">
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
            <div class="col-lg-6">
              <div class="card-style mb-30">
                <!-- End Title -->
                <div class="title d-flex flex-wrap justify-content-between">
                  <div class="w-100">
                    <h6 class="text-medium mb-10">Registrar correo o teléfono</h6>
                      <div class="card-style mb-30">
                      <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/Principales/pie" method="post" enctype="multipart/form-data">
                        <!-- <h6 class="mb-25">Input Fields</h6> -->
                        <div class="input-style-1">
                          <label>Ingrese información</label>
                          <input name="text1" type="text" placeholder="Correo o teléfono" value="" required />
                        </div>
                        <div class="select-style-1">
                            <label>Tipo de información</label>
                            <div class="select-position">
                            <select name="tipo">
                                <option value="tel">Teléfono</option>
                                <option value="mail">Correo electrónico</option>
                            </select>
                            </div>
                        </div>
                  <!-- end select -->
                      <input tabindex="3" type="submit" name="editar2" class="main-btn primary-btn rounded-md btn-hover" value="Agregar">

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
            <div class="col-lg-6">
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
                      <h6 class="text-medium mb-30">Lista acceso rapido</h6>
                    </div>
                    <div class="right">

                    </div>
                  </div>
                  <!-- End Title -->
                  <div class="table-responsive">
                    <table class="table top-selling-table">
                      <thead>
                        <tr>
                          <th></th>
                          <th>
                            <h6 class="text-sm text-medium">Nombre</h6>
                          </th>
                          <th class="min-width">
                            <h6 class="text-sm text-medium">Link</h6>
                          </th>
                          <th class="min-width">
                            <h6 class="text-sm text-medium">Fecha</h6>
                          </th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $contador = 1;
                      foreach ($datos['accesos'] as $acces) : 
                      ?>
                        <tr>
                          <td>
                            <p class="text-sm"><?php echo $contador++; ?></p>
                          </td>
                          <td>
                            <p class="text-sm"><?php echo $acces->name ; ?></p>
                          </td>
                          <td>
                            <p class="text-sm"><?php echo $acces->link; ?></p>
                          </td>
                          <td>
                            <p class="text-sm"><?php echo $acces->date_write; ?></p>
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
                                <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/Principales/pie" method="post">
                                <input  name="id" type="hidden" value="<?php echo $acces->id; ?>" size="26" required />
                                  <button type="submit" name="remover2" class="text-gray fs-6">Remover </button>
                                </form>
                                </li>
                                <li class="dropdown-item">
                                  <a href="<?php echo RUTA_URL;?>/Principales/editCard/<?php echo $acces->id ?>" class="text-gray">Edit</a>
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
            <div class="col-lg-6">
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
                      <h6 class="text-medium mb-30">Lista Contactos</h6>
                    </div>
                    <div class="right">

                    </div>
                  </div>
                  <!-- End Title -->
                  <div class="table-responsive">
                    <table class="table top-selling-table">
                      <thead>
                        <tr>
                          <th></th>
                          <th>
                            <h6 class="text-sm text-medium">Contacto</h6>
                          </th>
                          <th class="min-width">
                            <h6 class="text-sm text-medium">Fecha</h6>
                          </th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $contador = 1;
                      foreach ($datos['contact'] as $contacto) : 
                      ?>
                        <tr>
                          <td>
                            <p class="text-sm"><?php echo $contador++; ?></p>
                          </td>
                          <td>
                            <p class="text-sm"><?php echo $contacto->info ; ?></p>
                          </td>

                          <td>
                            <p class="text-sm"><?php echo $contacto->date_write; ?></p>
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
                                <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/Principales/pie" method="post">
                                <input  name="id" type="hidden" value="<?php echo $contacto->id; ?>" size="26" required />
                                  <button type="submit" name="remover1" class="text-gray fs-6">Remover </button>
                                </form>
                                </li>
                                <li class="dropdown-item">
                                  <a href="<?php echo RUTA_URL;?>/Principales/editCard/<?php echo $contacto->id ?>" class="text-gray">Edit</a>
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
