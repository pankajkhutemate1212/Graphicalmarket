<?php

class news_csv_model extends CI_Model {
    
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
        $this->db->insert('press', $data);
    }

    function check_dups($data) {
        
            $query = $this->db->query("select * from press where name='".$data."'");
            
            if ($query->num_rows() == 0) {
                
           
           
            return 1;
        }
            
        }
         function get_report_url_by_id($data) 
         {
            $this->db->select('*');

    		$this->db->from('reports');
    		
    		$this->db->where("id", $data);

    		$query = $this->db->get(); 

    		if ($query->num_rows() > 0){ 

     			return $query->row_array();

    		}

    		else {

      			return NULL;

    		}       
        }
    }

/*END OF FILE*/