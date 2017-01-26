<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_basisdata_cek');
		if($this->form_validation->run()==false){
			$query=$this->db->query('select * from posts');
			$rows=$query->result();
			$post_data=array('result'=>$rows);
			$this->load->view('header');
			$this->load->view('home',$post_data);
			$this->load->view('login_view');
			$this->load->view('footer');
		} else{
			redirect(base_url('index.php/home'), 'refresh');
		}
	}

	function basisdata_cek($password){
		$username = $this->input->post('username');
		$result = $this->login->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = $arrayName = array('id' => $row->id, 'username' => $row->username, 'email' => $row->email);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		} else{
			$this->form_validation->set_message('basisdata_cek', 'Invalid username or password.');
			return false;
		}
	}

	public function register(){
		if($this->input->post('daftar')){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required|callback_basisdata_cek');
			$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');
			$this->login->register();
			redirect('login/#login');
		} else{
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('register_view');
			$this->load->view('footer');
		}
	}


}
