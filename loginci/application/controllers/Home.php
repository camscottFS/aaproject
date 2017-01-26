<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['email'] = $session_data['email'];
			$data['username'] = $session_data['username'];
			$query=$this->db->query('select * from posts');
			$rows=$query->result();
			$post_data=array('result'=>$rows);
			$this->load->view('user/header', $data);
			$this->load->view('user/home_view', $post_data);
			$this->load->view('footer', $data);
		} else{
			redirect('login', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url(''), 'refresh');
	}


}
