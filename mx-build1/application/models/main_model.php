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
	function fetch_data()
	{
		$query = $this->db->get("tbl_user");
		return $query;
	}
	function delete_data($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("tbl_user");

	}
	





	//database operations
}

?>