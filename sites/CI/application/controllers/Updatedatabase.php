<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatedatabase extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function updatedata()
	{
		$this->load->view('insertdata_form');
		
		if(isset($_GET["name"]) && isset($_GET["description"])){
			echo "New Name: ".$_GET["name"]."</br>";
			echo "New Description: ".$_GET["description"]."</br>";
		}
		//$this->load->model('UpdateData_model');
		//$this->UpdateData_model->insertData($_GET["name"]);
	}
}


