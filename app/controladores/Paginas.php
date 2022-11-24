<?php

/**
 *
 */
class Paginas extends Controlador{
    public $contactPie;
    public $saccesosRapido;
    public function __construct()
    {
      $this->usuarioModelo = $this->modelo('Usuario');
      $this->contactPie = $this->usuarioModelo->obtenerInfoContactPie();
      $this->saccesosRapido = $this->usuarioModelo->obtenerAccesFast();

    }

    public function index()
    {

      $header = $this->usuarioModelo->obtenerTextoHeader();
      $cont = $this->usuarioModelo->obtenerContentPrincipal();

      $datos = [
        'header' => $header,
        'cont' => $cont,
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];

      $this->vista('paginas/inicio', $datos);
    }

    public function formSesion()
    {
      //verificamos si se enviaron los datos por POST
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $datos = [
          'email' => trim($_POST['email']),
          'password' => trim($_POST['pass'])
        ];
          //verificamos si la consulta al modelo es correcta
        if ($this->usuarioModelo->validarLogin($datos)) {
          $usuarioL  = $this->usuarioModelo->validarLogin($datos);
              //$_SESSION['app_id'] = $db->recorrer($sql)[0];
          $datos = [
            'email' => $usuarioL->email_user,
            'user' => $usuarioL->name_user,
            'access' =>$usuarioL->access_user,
            'tipo_user' =>$usuarioL->tipo_user,
          ];
          $this->vista('paginas/formsesion', $datos);
            //  redireccionar('/paginas/inicio');
        }else{
          die('Algo salio mal');
        }

      }

      //enviar y cargar en la vista inicio los datos
      $this->vista('paginas/formsesion');
    }


    public function informacionInstitucional()
    {
      $id = 1;

      $info = $this->usuarioModelo->obtenerInfoInts($id);

      $datos = [
        'info' => $info,
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];

      $this->vista('paginas/informacioninstitucional', $datos);

    }
    
    public function servicios()
    {
      $id = 2;

      $info = $this->usuarioModelo->obtenerInfoInts($id);

      $datos = [
        'info' => $info,
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];
      $this->vista('paginas/servicios', $datos);
    }
    public function tabuladorPrecio()
    {
      $id = 3;

      $info = $this->usuarioModelo->obtenerInfoInts($id);

      $datos = [
        'info' => $info,
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];

      $this->vista('paginas/tabuladorprecios', $datos);
    }
    public function dondePublicar()
    {
      $id = 4;

      $info = $this->usuarioModelo->obtenerInfoInts($id);

      $datos = [
        'info' => $info,
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];
      $this->vista('paginas/dondepublicar', $datos);
    }
    public function contacto()
    {
      $id = 5;

      $info = $this->usuarioModelo->obtenerInfoInts($id);

      $datos = [
        'info' => $info,
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];
      $this->vista('paginas/contacto', $datos);
    }
    public function suscripciones()
    {
      $id = 6;

      $info = $this->usuarioModelo->obtenerInfoInts($id);
      $datos = [
        'info' => $info,
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];
      $this->vista('paginas/suscripciones', $datos);
    }
    public function archivosPeriodico()
    {
      $datos = [
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];
      $this->vista('paginas/archivosperiodico', $datos);
    }
    public function calendario()
    {
      $datos = [
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];
      $this->vista('paginas/calendario', $datos);
    }
    public function contenidos()
    {
      $datos = [
        'contact' => $this->contactPie,
        'accesos' => $this->saccesosRapido,
      ];
      $this->vista('paginas/contenidos', $datos);
    }

    

}//clases


?>
