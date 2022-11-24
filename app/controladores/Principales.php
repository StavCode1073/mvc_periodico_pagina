<?php

/**
 *
 */
class Principales extends Controlador{

    public function __construct()
    {
       $this->principalModelo = $this->modelo('Principal');
    }
    public function index()
    {
      //obtener usuarios
      /*$usuarios = $this->usuarioModelo->obtenerUsuarios();
      $datos = [
        'usuarios' => $usuarios
      ];*/
      //enviar y cargar en la vista inicio los datos
      //$this->vista('paginas/inicio',$datos);
      $this->vista('paginas/inicio', $datos = []);
    }
    public function dashboard()
    {
      //obtener usuarios
      /*$usuarios = $this->usuarioModelo->obtenerUsuarios();
      $datos = [
        'usuarios' => $usuarios
      ];*/
      //enviar y cargar en la vista inicio los datos
      //$this->vista('paginas/inicio',$datos);
      $this->vista('adminpaginasection/dashboard', $datos = []);
    }

    public function logout()
    {
      //verificamos si se enviaron los datos por POST
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user= trim($_POST['usuario']);
        if (isset($_SESSION['correo'])) {
          if ($user == $_SESSION['correo']) {
            session_destroy();
            session_write_close();
            redireccionar('/paginas/formsesion/');
          }else{
            die('Algo salio mal');
          }
        }
      }

      //enviar y cargar en la vista inicio los datos
      $this->vista('adminpaginasection/dashboard', $datos = []);
    }

    public function inicioEdit()
    {
      $header = $this->principalModelo->obtenerTextoHeader();
      $cards = $this->principalModelo->obtenerContentCards();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

              if(isset($_POST['editar2'])){
                  $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg", "application/pdf", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
                  $limite = 60024;
                  //if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 60024) {
                  if (in_array($_FILES['imagen']['type'], $permitidos)) {
                  $nombre = date('is') . $_FILES['imagen']['name'];
                  $nombre2 = date('is') . utf8_decode($_FILES['imagen']['name']);
                  $tamanio = $_FILES['imagen']['size'];
                  //$ruta = "Views" . DS . "template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
                  //validar tipos de archivos
                  if ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                    $tipo = "application/xlsx";
                  }elseif ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
                    $tipo = "application/docx";
                  }else {
                    $tipo = $_FILES['imagen']['type'];
                  }
                  $ruta = "img" . DS . "imgall" . DS . $nombre2;
                  //$ruta ="public/img/nuevos/" . $nombre;
                  move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
    
                  $titulo = trim($_POST['title_card']);
                  $content = trim($_POST['text_content']);
                  $link = trim($_POST['link']);
    
                  $datos = [
                    'nombre_archivo' => $nombre,
                    'type' => $tipo,
                    'titulo' => $titulo,
                    'content' => $content,
                    'link' => $link,
                  ];
              if ($this->principalModelo->agregarCardNew($datos)) {
                  redireccionar('/Principales/inicioedit');
                }else{
                  die('Algo salio mal');
                }
              }else{
                  die('Tipo o tamanio no permitida');
              }
            }

            if(isset($_POST['editar1'])){
              $texto1 = trim($_POST['text1']);
              $texto2 = trim($_POST['text2']);

              $datos = [
                'id_header' => 1,
                'text1' => $texto1,
                'text2' => $texto2,
              ];

              if($this->principalModelo->modificarTextoHeader($datos)){
                redireccionar('/Principales/inicioedit');
              }else{
                die('Algo salio mal');
              }
            }
              //tipo de imagen
      }
      //obtener usuarios
      /*$usuarios = $this->usuarioModelo->obtenerUsuarios();*/
      $datos = [
        'header' => $header,
        'cards' => $cards,
      ];
      //enviar y cargar en la vista inicio los datos
      //$this->vista('paginas/inicio',$datos);
      $this->vista('adminpaginasection/inicioedit', $datos);
    }

    public function editCard($id){

      $cont = $this->principalModelo->obtenerContentPrincipal($id);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              if(isset($_POST['editar2'])){

                if(empty($_FILES['imagen']['name'])){
                  $titulo = trim($_POST['title_card']);
                  $content = trim($_POST['text_content']);
                  $link = trim($_POST['link']);
                    $datos = [
                      'id_header' => $id,
                      'titulo' => $titulo,
                      'content' => $content,
                      'link' => $link,
                    ];
        
                    if($this->principalModelo->modificarContentPrincipal($datos)){
                    redireccionar('/Principales/editCard/'.$id);
                    }else{
                    die('Algo salio mal');
                  }
                }else{
                  $nameimg =  utf8_decode($_POST['imgname']);
                  
                  $ruta_foto_db = "img" . DS . "imgall" . DS . $nameimg;
        
                    if(file_exists($ruta_foto_db)){
                    unlink($ruta_foto_db);
                    }else{
                    echo "Ruta no valida ". $ruta_foto_db;
                    }
                  //tipo de imagen
                    $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg", "application/pdf", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
                    $limite = 60024;
                    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 60024) {
                    $nombre = date('is') . $_FILES['imagen']['name'];
                    $nombre2 = date('is') . utf8_decode($_FILES['imagen']['name']);
                    //$ruta = "Views" . DS . "template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
                    //validar tipos de archivos
                    if ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                      $tipo = "application/xlsx";
                    }elseif ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
                      $tipo = "application/docx";
                    }else {
                      $tipo = $_FILES['imagen']['type'];
                    }
                    $ruta = "img" . DS . "imgall" . DS . $nombre2;
                    //$ruta ="public/img/nuevos/" . $nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    $titulo = trim($_POST['title_card']);
                    $content = trim($_POST['text_content']);
                    $link = trim($_POST['link']);
                    
                    $datos = [
                      'id_header' => $id,
                      'nombre_archivo' => $nombre,
                      'type' => $tipo,
                      'titulo' => $titulo,
                      'content' => $content,
                      'link' => $link,
                    ];
          
                    if($this->principalModelo->modificarContentPrincipalimg($datos)){
                      redireccionar('/Principales/editCard/'.$id);
                    }else{
                    die('Algo salio mal');
                  }
                }
              }

          }

        }
      //obtener usuarios
      /*$usuarios = $this->usuarioModelo->obtenerUsuarios();*/
      $datos = [
        'cont' => $cont,
      ];
      //enviar y cargar en la vista inicio los datos
      //$this->vista('paginas/inicio',$datos);
      $this->vista('adminpaginasection/editcard', $datos);
    }

    public function eliminarCard($id){

      $cont = $this->principalModelo->obtenerContentPrincipal($id);

      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['editar1'])){
          $nameimg =  utf8_decode($_POST['imgname']);
          $ruta_foto_db = "img" . DS . "imgall" . DS . $nameimg;
  
            if(file_exists($ruta_foto_db)){
            unlink($ruta_foto_db);
            }else{
            echo "Ruta no valida ". $ruta_foto_db;
            }
            $datos = [
              'id' => $id
            ];
  
        if ($this->principalModelo->borrarCard($datos)) {
            redireccionar('/Principales/inicioEdit');
          }else{
            die('Algo salio mal');
          }
        }
      }
      
      $datos = [
        'cont' => $cont,
      ];
      $this->vista('adminpaginasection/eliminarcard', $datos);
    }
    public function editarInfoInst(){
      $id = 1;
      $info = $this->principalModelo->obtenerInfoInts($id);

      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['editar1'])){
          $titulo = trim($_POST['title']);
          $content = trim($_POST['text_content']);

            $datos = [
              'id' => 1,
              'title' => $titulo,
              'content' => $content,
            ];
  
        if ($this->principalModelo->modificarInfoInst($datos)) {
            redireccionar('/Principales/editarInfoInst');
          }else{
            die('Algo salio mal');
          }
        }
      }
      
      $datos = [
        'info' => $info,
      ];
      $this->vista('adminpaginasection/editarinfoinst', $datos);
    }

    public function editarServicio(){

      $id = 2;
      $info = $this->principalModelo->obtenerInfoInts($id);

      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['editar1'])){
          $titulo = trim($_POST['title']);
          $content = trim($_POST['text_content']);

            $datos = [
              'id' => 2,
              'title' => $titulo,
              'content' => $content,
            ];
  
        if ($this->principalModelo->modificarInfoInst($datos)) {
            redireccionar('/Principales/editarServicio');
          }else{
            die('Algo salio mal');
          }
        }
      }
      
      $datos = [
        'info' => $info,
      ];
      $this->vista('adminpaginasection/editarservicio', $datos);
    }

    public function tabPrecios(){

      $id = 3;
      $info = $this->principalModelo->obtenerInfoInts($id);

      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['editar1'])){
          $titulo = trim($_POST['title']);
          $content = trim($_POST['text_content']);

            $datos = [
              'id' => 3,
              'title' => $titulo,
              'content' => $content,
            ];
  
        if ($this->principalModelo->modificarInfoInst($datos)) {
            redireccionar('/Principales/tabPrecios');
          }else{
            die('Algo salio mal');
          }
        }
      }
      
      $datos = [
        'info' => $info,
      ];
      $this->vista('adminpaginasection/tabprecios', $datos);
    }

    public function dondePublicar(){

      $id = 4;
      $info = $this->principalModelo->obtenerInfoInts($id);

      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['editar1'])){
          $titulo = trim($_POST['title']);
          $content = trim($_POST['text_content']);

            $datos = [
              'id' => 4,
              'title' => $titulo,
              'content' => $content,
            ];
  
        if ($this->principalModelo->modificarInfoInst($datos)) {
            redireccionar('/Principales/dondePublicar');
          }else{
            die('Algo salio mal');
          }
        }
      }
      
      $datos = [
        'info' => $info,
      ];
      $this->vista('adminpaginasection/dondepublicar', $datos);
    }

    public function editContacto(){

      $id = 5;
      $info = $this->principalModelo->obtenerInfoInts($id);

      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['editar1'])){
          $titulo = trim($_POST['title']);
          $content = trim($_POST['text_content']);

            $datos = [
              'id' => 5,
              'title' => $titulo,
              'content' => $content,
            ];
  
        if ($this->principalModelo->modificarInfoInst($datos)) {
            redireccionar('/Principales/editContacto');
          }else{
            die('Algo salio mal');
          }
        }
      }
      
      $datos = [
        'info' => $info,
      ];
      $this->vista('adminpaginasection/editcontacto', $datos);
    }

    public function pie(){
      $accesosRapido = $this->principalModelo->obtenerAccesFast();
      $contactPie = $this->principalModelo->obtenerInfoContactPie();
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['editar1'])){
          $datos = [
            'nombre' => trim($_POST['nombre']),
            'link' => trim($_POST['link'])
          ];
      if ($this->principalModelo->registrarAcceso($datos)) {
          redireccionar('/Principales/pie');
        }else{
          die('Algo salio mal');
        }    
      }
      if(isset($_POST['editar2'])){
        $datos = [
          'text1' => trim($_POST['text1']),
          'tipo' => trim($_POST['tipo']),
        ];
      if ($this->principalModelo->registrarContactPie($datos)) {
          redireccionar('/Principales/pie');
        }else{
          die('Algo salio mal');
        }    
      }
      if(isset($_POST['remover1'])){
        $datos = [
          'id' => trim($_POST['id']),
        ];
        if ($this->principalModelo->borrarContacto($datos)) {
          redireccionar('/Principales/pie');
        }else{
          die('Algo salio mal');
        }
      }
      if(isset($_POST['remover2'])){
        $datos = [
          'id' => trim($_POST['id']),
        ];
        if ($this->principalModelo->borrarAccesosRapido($datos)) {
          redireccionar('/Principales/pie');
        }else{
          die('Algo salio mal');
        }
      }
      
    }

      $datos = [
        'accesos' => $accesosRapido,
        'contact' => $contactPie,
        
      ];

      $this->vista('adminpaginasection/pie', $datos);
    }

    public function editarSuscripciones(){

      $id = 6;
      $info = $this->principalModelo->obtenerInfoInts($id);

      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['editar1'])){
          $titulo = trim($_POST['title']);
          $content = trim($_POST['text_content']);

            $datos = [
              'id' => 6,
              'title' => $titulo,
              'content' => $content,
            ];
  
        if ($this->principalModelo->modificarInfoInst($datos)) {
            redireccionar('/Principales/editarSuscripciones');
          }else{
            die('Algo salio mal');
          }
        }
      }
      
      $datos = [
        'info' => $info,
      ];
      $this->vista('adminpaginasection/editarsuscripciones', $datos);
    }

}//clases


?>
