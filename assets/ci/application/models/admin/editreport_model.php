<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editreport_model extends CI_model

{

    function __contruct()

    {

        parent:: __contruct();

    }

    public function checkId($id)
    {
        $query = $this->db->query("select * from reports where id='".$id."'");

            if ($query->num_rows() != 0) {
                 return $query->row_array();
        } 
    }
    function get_rep_detail($id)
    {
        $query = $this->db->query("select * from reports where id='".$id."'");

        if ($query->num_rows() != 0) {
            return $query->row_array();
        }
    }

}

