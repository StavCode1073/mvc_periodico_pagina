<?php
class Principal{
  private $db;

  public function __construct(){
    $this->db = new Base;
  }
  public function obtenerTextoHeader(){
    $this->db->query('SELECT * FROM inicio_content_banner  WHERE id = 1  LIMIT 1;');

    $resultados = $this->db->registro();

    return $resultados;
  }
  public function modificarTextoHeader($datos){
    $this->db->query('UPDATE inicio_content_banner SET   texto_banner1 = :text1, texto_banner2 = :text2 WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id_header']);
    $this->db->bind(':text1', $datos['text1']);
    $this->db->bind(':text2', $datos['text2']);
    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
  public function obtenerContentCards(){
    $this->db->query('SELECT * FROM inicio_content_main  ORDER BY id DESC');

    $resultados = $this->db->registros();
    return $resultados;
  }

  public function obtenerContentPrincipal($id){
    $this->db->query('SELECT * FROM inicio_content_main  WHERE id = :id  LIMIT 1;');

    $this->db->bind(':id', $id);
    $resultado = $this->db->registro();

    return $resultado;
  }
  public function modificarContentPrincipal($datos){
    $this->db->query('UPDATE inicio_content_main SET  texto_cards_title = :titulo, content_main_text = :content, link = :link, date_write = NOW(), state = 1 WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id_header']);
    $this->db->bind(':titulo', $datos['titulo']);
    $this->db->bind(':content', $datos['content']);
    $this->db->bind(':link', $datos['link']);
    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
  public function modificarContentPrincipalimg($datos){
    $this->db->query('UPDATE inicio_content_main SET  texto_cards_title = :titulo, content_main_text = :content, link = :link,      imagen_cards = :nombre_archivo, type = :tipo, date_write = NOW(), state = 1 WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id_header']);
    $this->db->bind(':titulo', $datos['titulo']);
    $this->db->bind(':content', $datos['content']);
    $this->db->bind(':link', $datos['link']);
    $this->db->bind(':nombre_archivo', $datos['nombre_archivo']);
    $this->db->bind(':tipo', $datos['type']);
    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function agregarCardNew($datos){
    $this->db->query('INSERT INTO inicio_content_main(texto_cards_title,content_main_text,link,imagen_cards,type,date_write,state) VALUES (:titulo, :content, :link, :archivo, :tipo, NOW(), 1)');

    //vinvular valores
    $this->db->bind(':archivo', $datos['nombre_archivo']);
    $this->db->bind(':tipo', $datos['type']);
    $this->db->bind(':titulo', $datos['titulo']);
    $this->db->bind(':content', $datos['content']);
    $this->db->bind(':link', $datos['link']);
    //$this->db->bind(':estado', $datos['fechaActual']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
  public function borrarCard($datos){
    //sentencias preparadas (id_usuario = :id) donde :id es un parametro temporal
    $this->db->query('DELETE FROM inicio_content_main WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function obtenerInfoInts($id){
    $this->db->query('SELECT * FROM info_institucional_content  WHERE id = :id  LIMIT 1;');

    $this->db->bind(':id', $id);
    $resultados = $this->db->registro();

    return $resultados;
  }
  public function modificarInfoInst($datos){
    $this->db->query('UPDATE  info_institucional_content SET  tutulo  = :titulo, texto_content = :content, date_write = NOW(), state = 1 WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id']);
    $this->db->bind(':titulo', $datos['title']);
    $this->db->bind(':content', $datos['content']);
    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function registrarAcceso($datos){
    $this->db->query('INSERT INTO info_pie_fast_link(name,link,date_write,state) VALUES (:nombre, :link, NOW(), 1)');

    //vinvular valores
    $this->db->bind(':nombre', $datos['nombre']);
    $this->db->bind(':link', $datos['link']);
    //$this->db->bind(':estado', $datos['fechaActual']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
  public function registrarContactPie($datos){
    $this->db->query('INSERT INTO inifo_pie_contact(info,tipo,date_write,state) VALUES (:text1, :tipo, NOW(), 1)');

    //vinvular valores
    $this->db->bind(':text1', $datos['text1']);
    $this->db->bind(':tipo', $datos['tipo']);
    //$this->db->bind(':estado', $datos['fechaActual']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
  public function obtenerAccesFast(){
    $this->db->query('SELECT * FROM info_pie_fast_link  ORDER BY id DESC');

    $resultados = $this->db->registros();
    return $resultados;
  }
  public function obtenerInfoContactPie(){
    $this->db->query('SELECT * FROM inifo_pie_contact  ORDER BY id DESC');

    $resultados = $this->db->registros();
    return $resultados;
  }

  public function borrarContacto($datos){
    //sentencias preparadas (id_usuario = :id) donde :id es un parametro temporal
    $this->db->query('DELETE FROM inifo_pie_contact WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
  public function borrarAccesosRapido($datos){
    //sentencias preparadas (id_usuario = :id) donde :id es un parametro temporal
    $this->db->query('DELETE FROM info_pie_fast_link WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
}// end class
?>
