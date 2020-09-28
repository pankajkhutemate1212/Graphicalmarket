<?php

class Dash extends CI_Controller{

	public function __contsruct(){

		parent :: __construct();
		

		 	}

	public function index(){

	//	$this->load->view('admin/_layout_main');
	
echo "welcome to msf admin ";


	}
	public function press()
{
	
$crud = new grocery_CRUD();
$crud->set_table('press');
//$crud->columns('customerName','phone','addressLine1','creditLimit');
 
$output = $crud->render();
 $this->_example_output($output);
}





}