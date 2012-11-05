<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscripcion  extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('form');
		
		$this->load->helper('url');
	}
	public function index(){
		$data = array(
			'page' => 'inscripcion_template.php'
			)
		
		$this->load->view('layout',$data);
	}
	public function nuevo_ano()
	{

	}

	public function alumno()
	{
		$data = array(
			'page' => 'inscripcion_template.php'
			)
		
		$this->load->view('layout',$data);
	}
	public function form(){
		$data = [
		'page' => 'inscripcion_template.php'];
		$this->load->view('layout',$data);	
	}
}
