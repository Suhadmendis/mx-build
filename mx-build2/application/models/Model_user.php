<?php

class Model_user extends CI_Model {

       

        function __construct()
        {
            parent::__construct();
        }

        public function getFirstNames()
        {
                $query = $this->db->query('SELECT name from student');
                if ($query->num_rows() > 0) {
                    return $query->result();
                }else{
                    return null;
                }
                
        }

        public function getusers()
        {
                $query = $this->db->query('SELECT name from student');
                if ($query->num_rows() > 0) {
                    return $query->result();
                }else{
                    return null;
                }
                
        }

     

}

?>