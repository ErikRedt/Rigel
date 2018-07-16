<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//Cargamos el modelo admin_model.php
		//disponible para cualquier metodo
		$this->load->model('admin_model');
		//Cargamos helper de url
		$this->load->helper('url');

	}

	public function index()
	{
		//Creamos arreglo $data
		$data['menus'] = $this->admin_model->menu();
		$data['alumnos'] = $this->admin_model->devuelveAlumno();
		$data['descripcion'] = 'Mi descripcion';
		$data['titulo'] = 'Administración';
		$this->load->view('template/header',$data);
		$this->load->view('alumnos');
		$this->load->view('template/footer');
	}

	public function view($nocta)
	{
		//Creamos arreglo $data
		$data['menus'] = $this->admin_model->menu();
		$data['alumnos'] = $this->admin_model->devuelveAlumno($nocta);

		if( empty( $data ['alumnos'] ) ){
			show_404();
		}

		$data['descripcion'] = 'Mi descripcion';
		$data['titulo'] = 'Administración - Ver';
		$this->load->view('template/header', $data);
		$this->load->view('alumno_ver');
		$this->load->view('template/footer');
	}

	 public function add()
	 {

	 	$this->load->library('form_validation');

	 	$data['menus'] = $this->admin_model->menu();
		$data['descripcion'] = 'Mi descripcion';
		$data['titulo'] = 'Administración - Ver';
		$data['message'] = '';

		$this->form_validation->set_rules('ctafrm', 'nocta', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header', $data);
			$this->load->view('alumno_alta');
			$this->load->view('template/footer');

		}else{
			$data['message'] = 'Su registro fue dado de alta';
			//alta del alumno
			$this->admin_model->setAlumno();

			$this->load->view('template/header', $data);
			$this->load->view('alumno_alta');
			$this->load->view('template/footer');
		}
	 }


public function borrarAlumno($id)
			{
				$data['id'] = (int)$id;

				$this->admin_model->borrarAlumno($data['id']);
				$data['menus'] = $this->admin_model->menu();
				$data['descripcion'] = 'Mi descripcion';
				$data['titulo'] = 'Borrar alumno';
				$data['message'] = 'Los datos fueron borrados con exito';
				$this->load->view('template/header', $data);


			$this->load->view('alumno_baja');
			$this->load->view('template/footer');


}





	public function editAlumno($id)
	{

		$data['id'] = (int)$id;
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['descripcion'] = '';

		$this->form_validation->set_rules('idfrm', 'idalumno', 'required');

		if ($this->form_validation->run() == FALSE)
		{

			$data['alumnos']=$this->admin_model->getQuerySimple("alumno", "idalumno", $data['id']);
			$data['message'] = '';


			$this->load->view('template/header', $data);
			$this->load->view('alumno_edit');
			$this->load->view('template/footer');

		}else{

			$process = $this->admin_model->updateDataAlumno($data['id']);
			$data['alumnos']=$this->admin_model->getQuerySimple("alumno", "idalumno", $data['id']);
			$data['message'] = 'Los datos fueron modificados con exito';

			$this->load->view('template/header', $data);
			$this->load->view('alumno_alta');
			$this->load->view('template/footer');
		}
	}
}
