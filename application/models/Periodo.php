<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Periodo extends CI_Model {
  private $id;
  private $ano_escolar;

  /* Por definir con la institucion*/
  private $ano_inicio;
  private $ano_fin;


  private static $db;


  public function get_last_year()
  {
    $db = self::get_instance_db();
    $db->query(self::$sql['last_year']);
  }

  private static function get_instance_db()
  {
    self::$db = &get_instance()->db;
  }

  private static $sql = array(
    'last_year' => 'SELECT * FROM periodo'
  );
}