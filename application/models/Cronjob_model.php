<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cronjob_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_all_news()

  {

    $this->db->select('*');

    $this->db->from('schedular');

    $query = $this->db->get(); 

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }            

  }
public function insert_news()

  {

    $query = $this->db->query('update reports set no_of_tables=20 where id=1');

    return $query->result();        

  }
}