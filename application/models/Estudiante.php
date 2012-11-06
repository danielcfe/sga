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
  private $representante_legal;
  private $inscripcion;

  public __get($param){
    foreach (self::$mode_access as $mode => $fields) {
      if (in_array($param, $fields))
      {
        return attribute_format($mode,$param);
      }
    }
  }

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