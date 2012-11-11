<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medicamento extends CI_Model {
  private $id;
  private $nombre;
  private $descripcion;

  /* Objecto estudiante*/
  private $estudiante;
  /* Datos de respecto a la medicina del estudiante*/

  private $dosis;
  private $cuando;
  private $donde;
  private $motivo;

  public function __construct()
  {
    parent::__construct();
    $this->id = '';
    $this->nombre = '';
    $this->descripcion = '';

    /*Objecto estudiante*/
    $this->estudiante = null;
    /*Datos de respecto a la medicina del estudiante*/

    $this->dosis = '';
    $this->cuando = '';
    $this->donde = '';
    $this->motivo = '';
  }

  public function load($medicamento_id,$estudiante_id=false)
  {
    $rs = $this->db->query(self::$sql_select['load_by_id']);
    if ($rs->num_row() > 0)
    {
      $this->medicamento_set_param($rs->row_array());
    }
    if($estudiante_id)
    {
      $rs = $this->db->query(self::$sql_select['load_by_estudiante_id']);
      if ($rs->num_row() > 0)
      {
        $this->estudiante_set_param($rs->row_array());
      }
    }
  }

  private function medicamento_set_param($medicamento_array)
  {
    $this->id = $medicamento_array['id_medicamentos'];
    $this->nombre = $medicamento_array['nombre'];
    $this->descripcion = $medicamento_array['descripcion'];
  }

  private function estudiante_set_param($estudiante_array)
  {
    $this->estudiante = $estudiante_array['id_numero_registro'];
    /*Datos de respecto a la medicina del estudiante*/
    $this->dosis = $estudiante_array['dosis'];
    $this->cuando = $estudiante_array['cuando'];
    $this->donde = $estudiante_array['donde'];
    $this->motivo = $estudiante_array['motivo_uso'];
  }

  private static $sql_select = array(
    'load_by_id' => 'SELECT id_medicamentos, nombre,descripcion FROM medicamentos WHERE id_medicamentos = ?',
    'load_by_estudiante_id' => 'SELECT id_medicamentos,id_numero_registro, dosis,donde,motivo_uso,cuando FROM estudiantes_has_medicamentos WHERE id_medicamentos = ? AND id_numero_registro = ?'
  );
}