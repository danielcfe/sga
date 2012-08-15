<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscripcion  extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('form');
	}
	public function index(){
		$data = [
		'page' => 'inscripcion_template.php'];
		$this->load->view('layout',$data);
	}
	public function form(){
		$data = [
		'page' => 'inscripcion_template.php'];
		$this->load->view('layout',$data);	
	}
}
