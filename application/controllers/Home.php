<?php 
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){

  		$this->load->view('v_home');
    }
	
	private static function formatNumberAbbreviation($number) {
        // $abbrevs = array(12 => "T", 9 => "B", 6 => "M", 3 => "K", 0 => "");

        // foreach ( $abbrevs as $exponent => $abbrev ) {
        //     if ( $number >= pow( 10, $exponent ) ) {
        //         return round( $number / pow(10, $exponent), 2 ) . ' ' . $abbrev;
        //     }
        // }

        $number = (0+str_replace(",", "", $number));
        if (!is_numeric($number)) return false;
        if ($number > 1) return round(($number/1000000), 2). " M";
        return number_format($number);
    }

	function changepassword(){
		$this->load->view('v_changepassword');
	}

	function do_pass(){
		$this->load->model('m_login');
		$UserID = get_cookie('UserID');
		$currentpassword = $this->input->post('currentpassword');
		$newpassword = $this->input->post('newpassword');
		$confirmpassword = $this->input->post('confirmpassword');
		$where = array(
			'UserID' => $UserID,
			'dbo.FuncCrypt(Password)' => $currentpassword
		);
		$cek = $this->m_login->cek_login("MsUser",$where)->num_rows();
		if($cek > 0){
			if($newpassword==$confirmpassword){
				$login = $this->m_login->passwd($UserID,$newpassword);
				if($login){
		    		echo "<script>alert('change password successfully');window.location.href='../home';</script>";
				}else{
					echo "<script>alert('change password failed');window.history.go(-1);</script>";					
				}
			}else{
				echo "<script>alert('New Password value did not match compare to Confirm Password');window.history.go(-1);</script>";
			}
		}else{			
			echo "<script>alert('Current Password Incorrect');window.history.go(-1);</script>";
		}
	}
}