<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lfg_model extends CI_Model {

	function lfg(){
		$em = $this->input->post('email');
		$un = $this->input->post('username');
		$pw = md5($this->input->post('password'));
		$data = array(
			'id' => '',
			'email' => $em,
			'username' => $un,
			'password' => $pw
		);
		$this->db->insert('user', $data);
	}
}
