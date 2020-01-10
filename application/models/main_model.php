<?php

class Main_model extends CI_Model{
	function test_main()
	{
		echo "string";
	}
	
	function insert_data($data)
	{
		$this->db->insert("tbl_user", $data);
	}





	//database operations
}

?>