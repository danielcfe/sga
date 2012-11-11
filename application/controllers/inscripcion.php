<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscripcion  extends CI_Controller {
	private $estudiante;
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Estudiante');
		$this->estudiante = new Estudiante();

	}
	public function index()
	{
		redirect('inscripcion/alumno');
	}

	public function nuevo_ano()
	{

	}

	public function ano_escolar_actual()
	{
		$this->load->model('Inscripcion');
		$periodo = $this->Inscripcion->get_last_year();
		$this->load->view('json',array('json' => $periodo));
	}

	public function nuevo_alumno()
	{
		$data = array(
			'page' => 'inscripcion/formulario.php'
			);
		$this->load->view('layout',$data);
	}

	public function reinscripcion_alumno($id_alumno){
		$estudiante -> load($id_alumno);
		$data = array(
			'page' => 'inscripcion/formulario.php'
			'estudiante' => $estudiante->to_array()
		);
		$this->load->view('layout',$data);

	}

	public function register()
	{

	}
	public function update()
	{

	}

}
