<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiante extends CI_Model {
  /* Atributos base */
  private $nombres;
  private $apellidos;
  private $cedula;
  private $edad;
  private $sexo;
  private $lugar_nacimiento;
  private $direccion;
  private $telefono;
  private $fecha_nacimiento;

  /*
    Objetos que pertenecen a la relacion
    Todos estos objetos vendran como un array.
  */
  private $medicamentos;
  private $representantes_legal;
  private $inscripcion;

  public function __construct(){
    $this->nombres = '';
    $this->apellidos = '';
    $this->cedula = '';
    $this->edad = '';
    $this->sexo = '';
    $this->lugar_nacimiento = '';
    $this->direccion = '';
    $this->telefono = '';
    $this->fecha_nacimiento = '';

    $this->medicamentos = array();
    $this->representantes_legal = array();
    $this->inscripcion = array();
  }
  public function __get($param){
    foreach (self::$mode_access as $mode => $fields) {
      if (in_array($param, $fields))
      {
        return attribute_format($mode,$param);
      }
    }
  }
  public function to_array($recursive = true){
    $estudiante = array(
     'nombres' => $this->nombres,
     'apellidos' => $this->apellidos,
     'cedula' => $this->cedula,
     'edad' => $this->edad,
     'sexo' => $this->sexo,
     'lugar_nacimiento' => $this->lugar_nacimiento,
     'direccion' => $this->direccion,
     'telefono' => $this->telefono,
     'fecha_nacimiento' => $this->fecha_nacimiento
     );

    if($recursive)
    {
      $medicamentos = $this->medicamentos_to_array();
      $estudiante['medicamentos'] = $medicamentos;

      $representantes_legal = $this->representantes_legal_to_array();
      $estudiante['representantes_legal'] = $representantes_legal;

      $inscripciones = $this->inscripciones_to_array();
      $estudiante['inscripciones'] = $inscripciones;
    }    

    return $estudiante;
  }
  /**
  * @return Representante_legan, este representante debe pertenecer a la relacin y el campo "pueed retirar" debe estar habilitado
  */
  public function representante_que_retira()
  {

  }


  private function medicamentos_to_array()
  {
    $medicamentos = array();
    foreach ($this->medicamentos as $medicamento)
    {
      $medicamentos[] = $medicamento->to_array();
    }
    return $medicamentos;
  }

  private function representantes_legal_to_array()
  {
    $representates_legal = array();
    foreach ($this->representates_legal as $representante)
    {
      $representates_legal[] = $representante->to_array();
    }
    return $representates_legal;
  }

  private function representantes_legal_to_array()
  {
    $inscripciones = array();
      foreach ($this->inscripciones as $inscripcion) {
        $inscripciones[] = $inscripcion->to_array();
      }
    return $inscripciones;
  }

  private static $sql_select = array();
  private static $sql_insert = array();
  private static $sql_update = array();

  private static $mode_access = 
    array(
      'direct' => array('nombres','apellidos','edad','lugar_nacimiento','direccion','fecha_nacimiento'),
      'number_format' => array('cedula'),
      'telf_format' => array('telefono'),
      'object_array' => array('medicamentos','representantes_legal','inscripciones','')
    )

}

/* End of file estudiante.php */
/* Location: ./application/controllers/estudiante.php */