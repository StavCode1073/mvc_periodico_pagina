<?php

  class Usuario{
    private $db;

    public function __construct(){
      $this->db = new Base;
    }

    public function obtenerTextoHeader(){
      $this->db->query('SELECT * FROM inicio_content_banner  WHERE id = 1  LIMIT 1;');
  
      $resultados = $this->db->registro();
  
      return $resultados;
    }
    public function obtenerContentPrincipal(){
      $this->db->query('SELECT * FROM inicio_content_main ORDER BY id DESC');
  
      $resultados = $this->db->registros();
  
      return $resultados;
    }
    public function obtenerInfoInts($id){
      $this->db->query('SELECT * FROM info_institucional_content  WHERE id = :id  LIMIT 1;');

      $this->db->bind(':id', $id);
  
      $resultados = $this->db->registro();
  
      return $resultados;
    }

    public function validarLogin($datos){
    $this->db->query('SELECT * FROM login_partner WHERE email_user = :email AND passw_user = :password LIMIT 1;');

    $this->db->bind(':email', $datos['email']);
    $this->db->bind(':password', $datos['password']);

    $resultados = $this->db->registro();

    return $resultados;
    }
    public function obtenerInfoContactPie(){
      $this->db->query('SELECT * FROM inifo_pie_contact  ORDER BY id DESC');
  
      $resultados = $this->db->registros();
      return $resultados;
    }
    public function obtenerAccesFast(){
      $this->db->query('SELECT * FROM info_pie_fast_link  ORDER BY id ASC');
  
      $resultados = $this->db->registros();
      return $resultados;
    }
    
    public function validarUser($datos){
      $this->db->query('SELECT * FROM info_partner_user WHERE email_user = :email_user LIMIT 1;');

        $this->db->bind(':email_user', $datos['email_user']);
        //$this->db->bind(':passw_user', $datos['passw_user']);

        $resultados = $this->db->registro();

        return $resultados;
    }

  public function agregarUser($datos){
    $this->db->query('INSERT INTO info_partner_user
      (name_user,apellidos_user,email_user,telefono_user,company_user,direccion_user,direccion_user2,estado_user, ciudad_user,cp_user,passw_user,fecha_write_user,state_user,access_user,tipo_user) 
    VALUES 
    (:name_user, :apellidos_user, :email_user, :telefono_user, :company_user, :direccion_user, :direccion_user2, :estado_user, :ciudad_user, :cp_user, :passw_user, NOW(), 1, 100,"USR")');

    //vinvular valores
    $this->db->bind(':name_user', $datos['name_user']);
    $this->db->bind(':apellidos_user', $datos['apellidos_user']);
    $this->db->bind(':email_user', $datos['email_user']);
    $this->db->bind(':telefono_user', $datos['telefono_user']);
    $this->db->bind(':company_user', $datos['company_user']);
    $this->db->bind(':direccion_user', $datos['direccion_user']);
    $this->db->bind(':direccion_user2', $datos['direccion_user2']);
    $this->db->bind(':estado_user', $datos['estado_user']);
    $this->db->bind(':ciudad_user', $datos['ciudad_user']);
    $this->db->bind(':cp_user', $datos['cp_user']);
    $this->db->bind(':passw_user', $datos['passw_user']);

    //$this->db->bind(':estado', $datos['fechaActual']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
    public function consultarUser($datos){
      $this->db->query('SELECT * FROM info_partner_user WHERE email_user = :email_user LIMIT 1;');

        $this->db->bind(':email_user', $datos['email_user']);
        $resultados = $this->db->registro();

        return $resultados;
    }

    public function insertarPago($datos){
        $this->db->query('INSERT INTO account_pyment(id_user,pago,num_card,fecha_write, state) VALUES (:id_user, :pago, :cart_num, NOW(), 1)');

        //vinvular valores
        $this->db->bind(':id_user', $datos['id']);
        $this->db->bind(':pago', $datos['paquete']);
        $this->db->bind(':cart_num', $datos['cart_num']);
        //$this->db->bind(':num-sdd', $datos['num-sdd']);

        //Ejecutar
        if ($this->db->execute()) {
            $this->db->query('UPDATE info_partner_user SET  access_user =  100 WHERE id = :id');
            //vinvular valores
            $this->db->bind(':id', $datos['id']);

            //Ejecutar
            $this->db->execute();

          return true;
        }else {
          return false;
        }
    }

    public function accesoPago($datos){
      $this->db->query('UPDATE info_partner_user SET  access_user = :acceso WHERE id = :id');
      //vinvular valores
      $this->db->bind(':id', $datos['id']);
      $this->db->bind(':acceso', $datos['acceso']);
      //Ejecutar
      if ($this->db->execute()) {
        return true;
      }else {
        return false;
      }
    }


    public function publicTypeAll(){
      $this->db->query('SELECT * FROM tipo_publicacion ORDER BY id ASC');
  
      $resultados = $this->db->registros();
      return $resultados;
    }
    public function typeDocAll(){
      $this->db->query('SELECT * FROM tipo_documento ORDER BY id ASC');
  
      $resultados = $this->db->registros();
      return $resultados;
    }
    public function clasificAll(){
      $this->db->query('SELECT * FROM clasificacion_archivo ORDER BY id ASC');
  
      $resultados = $this->db->registros();
      return $resultados;
    }
    

    public function buscarArchivosPublic($datos){


        if(empty($datos['palabras'])){

        $where =' WHERE cmf.id_tipo_pub  = :pub OR YEAR(cmf.date_write) = :anio OR MONTH(cmf.date_write) = :mes OR cmf.id_doc = :doc OR cmf.sujeto = :suj OR cmf.id_clasificacion = :cla';
        }else{
        $where =' WHERE cmf.id_tipo_pub  = :pub OR YEAR(cmf.date_write) = :anio OR MONTH(cmf.date_write) = :mes OR cmf.id_doc = :doc OR cmf.sujeto = :suj OR cmf.id_clasificacion = :cla OR cmf.palabra_clave LIKE "%":palabras"%"';
        }
  
        $this->db->query('SELECT 
        cm.nombrearchivo, 
        cm.description,
        cm.tipo,
        cmf.sujeto,
        cmf.palabra_clave,
        cmf.fechaCaptura, 
        cmf.id_doc,
        cmf.id_clasificacion,
        doc.name as docs,
        cla.name as clas
      FROM archivos_cms cm
        LEFT JOIN  archivos_cms_info cmf ON  cm.id_especial=cmf.id_especial
        LEFT JOIN tipo_documento doc ON doc.id = cmf.id_doc
        LEFT JOIN clasificacion_archivo cla ON cla.id = cmf.id_clasificacion
        '.$where);
      
      $this->db->bind(':pub', $datos['pub']);

      if(!empty($datos['palabras'])){

        $this->db->bind(':palabras', $datos['palabras']);
      }
      $this->db->bind(':mes', $datos['mes']);
      $this->db->bind(':anio', $datos['anio']);
      $this->db->bind(':doc', intval($datos['doc']));
      $this->db->bind(':suj', $datos['suj']);
      $this->db->bind(':cla', $datos['cla']);

    
  
      $resultados = $this->db->registros();
  
      return $resultados;
      }
      
        //numero de regustros en la tabla
  public function numeroPub(){
    $this->db->query('SELECT cm.nombrearchivo, cm.description, cm.tipo, cmf.sujeto FROM archivos_cms cm
    LEFT JOIN  archivos_cms_info cmf ON  cm.id_especial=cmf.id_especial');
  
    $resultados = $this->db->rowCount();
    return $resultados;
  }

  }

?>
