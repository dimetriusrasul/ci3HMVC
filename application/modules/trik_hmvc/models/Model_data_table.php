<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data_table extends CI_Model {
	public function get_personal(){
		$query = "SELECT * FROM personal ORDER BY id DESC";
		return $this->db->query($query)->result();	
	}
}