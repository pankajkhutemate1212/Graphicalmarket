<?php

class Csv_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        
    }
    
    function get_addressbook() {     
        $query = $this->db->get('addressbook');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
     
    function insert_csv($data) {
        $this->db->insert('schedular_msr', $data);
		
		 
		
    }

function check_url_dups($data) {
        $this->db->select('*');
    $this->db->from('press_old');
    $this->db->where("press_old.url", $data);
    $query = $this->db->get();
           // $query = $this->db->query("select * from reports where report_name='".$data."'");
            if ($query->num_rows() > 0) {
                 return 1;
        }
    }

    function check_dups($data) {
         $this->db->select('*');
    $this->db->from('schedular_demo');
    $this->db->where("schedular_demo.name", $data);
    $query = $this->db->get();
           // $query = $this->db->query("select * from reports where report_name='".$data."'");
            if ($query->num_rows() > 0) {
                
           
            //$this->db->query("INSERT INTO `reports2`(`report_name`) VALUES ('".$data."')");
            return 1;
        }else{
			
			return 0;
		}
            
        }
    }

/*END OF FILE*/