<?php
class MY_Controller extends CI_Controller{
	protected $is_logged_in = false;
	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
	}
	

	public function view_page($strPage, $data=NULL, $boolReturnView = FALSE, $boolIsMasterLayout = TRUE){
	  if( TRUE == $boolIsMasterLayout ){
	    $this->load->view('elements/header', $data);
	  }
	    $this->load->view($strPage, $data, $boolReturnView);
	  if( TRUE == $boolIsMasterLayout ){
	    $this->load->view('elements/footer');
	  }
	}

}
