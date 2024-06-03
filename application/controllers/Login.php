<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');	
	}

	function aksi_login(){
		$userid = $this->input->post('userid');
		$password = $this->input->post('password');
		$where = array(
			'UserID' => $userid,
			'Password' => $password
			);
		$cek = $this->m_login->cek_login("MsUser",$where)->num_rows();
		$dUser = $this->m_login->cek_login("MsUser",$where)->row();
		if($cek > 0){
			$this->input->set_cookie(array('name' => 'AmsUserID', 'value' => $dUser->UserID, 'expire' => 365*86500));
			$this->input->set_cookie(array('name' => 'AmsUserName', 'value' => $dUser->UserName, 'expire' => 365*86500));
			$this->input->set_cookie(array('name' => 'AmsJobID', 'value' => $dUser->JobID, 'expire' => 365*86500));
			$this->input->set_cookie(array('name' => 'AmsRole', 'value' => $dUser->Role, 'expire' => 365*86500));
			$this->input->set_cookie(array('name' => 'Amsstatus', 'value' => "login", 'expire' => 365*86500));
			redirect(base_url("home"));
		}else{
			echo "<script>alert('Username / Password Salah !!');window.location.href='../login';</script>";
		}
	}

	function logout(){
		delete_cookie('AmsUserID'); 
		delete_cookie('AmsUserName'); 
		delete_cookie('AmsJobID'); 
		delete_cookie('AmsRole'); 
		delete_cookie('Amsstatus');  
		redirect(base_url('login'));
	}
}