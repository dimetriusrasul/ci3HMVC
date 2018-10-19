<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_table extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data_table');
	}

	public function index() {
		$this->load->view('v_data_table', array('grid' => $this->model_data_table->get_personal()));
	}
}