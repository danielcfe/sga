<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Periodo extends CI_Model {
  private $id;
  private $ano_escolar;

  /* Por definir con la institucion*/
  private $ano_inicio;
  private $ano_fin;


  private static $db;


  public function __construct()
  {
    $this->load->helper('form');    
  }

  public function load($param)
  {
    if(is_array($param))
    {
      $this->id = $param['id'];
      $this->ano_escolar = $param['ano_escolar'];
      $this->ano_inicio = $param['ano_inicio'];
      $this->ano_fin = $param['ano_fin'];
    }
    else
    {
      $rs = $this->db->query(self::$sql['load_by_id']);
      $this->load($rs -> row_array());
    }
  }
  /**
  * @return Periodo instance
  */
  public static function get_last_year()
  {
    $db = self::get_instance_db();
    $rs = $db->query(self::$sql['last_year']);
    $periodo = new Periodo();
    return $periodo($rs -> row_array());
  }

  private static function get_instance_db()
  {
    self::$db = &get_instance()->db;
  }

  private static $sql = array(
    'last_year' => 'SELECT * FROM periodo ORDER BY last_year DESC'
  );
}