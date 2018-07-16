<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Admin_model extends CI_Model {

	function __construct() {
		parent::__construct();

		$this->load->database();
	}

	/**
	 * Devolvemos Arreglo de Menu
	 *
	 *
	 * @access public
	 * @return $menus String
	 *
	 */
	public function Menu()
	{
		//Arreglo del Menu
		$menus = array('Alumnos');
		//retornamos el array
		return $menus;
	}

	public function devuelveAlumno($nocta = FALSE)
	{

		if(empty($nocta)){
			$query = $this->db->query('SELECT * FROM alumno');
			return $query;
		}

		$query = $this->db->query("SELECT * FROM alumno WHERE nocta =$nocta");
		$query = $query->row();
		return $query;
	}

	public function setAlumno()
	{
		$data = $this->getAlumno();	//llama al arreglo y hace operacion

		$this->db->insert('alumno', $data);
	}

	/**
	 * Crea un arreglo con los campos del formulario
	 */

	public function getAlumno()
	{
		$datapost = array( 'idalumno'=> $_POST['idfrm'],
			       	'nocta'=> $_POST['ctafrm'],
				   'noalumno'=> $_POST['nomfrm'],
						   'appaterno'=> $_POST['appfrm'],
						   'apmaterno'=> $_POST['apmfrm']);
		return $datapost;
	}

	public function borrarAlumno($id){
		$datos = $this->devuelveAlumno();
		$table = 'alumno';
		$this->db->where('idalumno', $id);
		$this->db->delete($table, $datos);
		return TRUE;

	}



	public function getQuerySimple($table, $id_field, $id)
	{

			$queries = $this->db->query("SELECT * FROM $table WHERE $id_field = $id");

			$query = $queries->row();
		return $query;
	}

	public function updateDataAlumno($id)
	{
		//llamamos metodo para obtener variables por POST
		$data = $this->getAlumno();
		//asignamos el nombre de la tabla
		$table = 'alumno';
		//active record
		//donde idalumno sea igual a $id
		$this->db->where('idalumno', $id);
		//actualizamos la tabala con los datos obtenidos de $data
		$this->db->update($table, $data);
		//devolvemos verdadero
		return TRUE;
	}

}
