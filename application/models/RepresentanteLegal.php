<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RepresentanteLegal extends CI_Model {
  private $id;
  private $cedula;
  private $nombres;
  private $apellidos;
  private $telefono_local;
  private $telfono_celular;
  private $id_parentesco;
  private $parentesco;

  /* objetos relacionados */
  private $estudiantes;

  public function __construct()
  {
    parent::__construct();
    $this->cedula = '';
    $this->nombres = '';
    $this->apellidos = '';
    $this->telefono_local = '';
    $this->telfono_celular = '';
    $this->parentesco = '';

    /*Objecto estudiante*/
    $this->estudiante = array();
  }

  public function load($representante_id)
  {
    $rs = $this->db->query(self::$sql_select['load_by_id']);
    if ($rs->num_row() > 0)
    {
      $this->representante_param($rs->row_array());
    }
  }

  private function representante_set_param($representante_array)
  {
    $this->id = $representante_array['id_representante'];
    $this->cedula = $representante_array['cedula'];
    $this->nombres = $representante_array['nombres'];
    $this->apellidos = $representante_array['apellidos'];
    $this->telefono_local = $representante_array['telefono_local'];
    $this->telfono_celular = $representante_array['telefono_celular'];
    $this->id_parentesco = $representante_array['id_parentesco'];
    $this->parentesco = $representante_array['parentesco'];
  }
  private function representante_set_estudiantes()
  {
    $rs = $this->db->query(self::$sql_select['load_estudiantes_id']);
    if ($rs->num_row() > 0)
    {
      $this->representante_param($rs->row_array());
    }
  }

  private static $sql_select = array(
    'load_by_id' => 'SELECT id_representante,id_parentesco,cedula,parentesco,nombres,apellidos,telefono_local,telefono_celular FROM medicamentos WHERE id_representante = ?',
    'load_estudiantes_id' => 'SELECT id_representante,is_numero_registro,puede_retirar FROM estudiantes_has_medicamentos WHERE id_medicamentos = ? AND id_numero_registro = ?'
  );

}

/* End of file RepresentanteLegal.php */
/* Location: ./application/models/RepresentanteLegal.php */


