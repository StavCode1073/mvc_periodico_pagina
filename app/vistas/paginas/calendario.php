<?php require RUTA_APP . '/vistas/inc/header_public.php'; ?>
<section class="container">
  <ul class="nav nav-pills my-5">
    <li class="nav-item">
      <a class="btn btn-info mx-1" href="<?php echo RUTA_URL; ?>/paginas/calendario">Calendario</a>
    </li>
    <li class="nav-item">
      <a class="btn btn-outline-info mx-1" href="<?php echo RUTA_URL; ?>/paginas/contenidos">Contenidos</a>
    </li>
  </ul>
</section>
<section class="">
<div class="container pt-2 pb-5 px-2 px-md-5">
  <!-- <iframe style="height: 880px; width: 100%; border: none;" src="http://localhost/proyectos_all/calendar-php-master/calendar2.php" width="300" height="150" frameborder="0" scrolling="no"></iframe> -->
  <iframe style="height: 880px; width: 100%; border: none;" src="https://poax.b32.mx/calendar2.php" width="300" height="150" frameborder="0" scrolling="no"></iframe>
  </div>
</section>
<?php require RUTA_APP . '/vistas/inc/footer_public.php'; ?>