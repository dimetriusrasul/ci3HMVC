<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_table extends MX_Controller {
	public function index() {
		$this->load->view('v_data_table');
	}
}