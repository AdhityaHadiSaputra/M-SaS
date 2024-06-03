<?php 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	function passwd( $userid, $newpassword ){
		$sql = "UPDATE MsUser SET Password = dbo.FuncCrypt('" . $newpassword . "') WHERE UserID = '" . $userid . "' ";
		$query = $this->db->query( $sql );
		return $query;
	}
}