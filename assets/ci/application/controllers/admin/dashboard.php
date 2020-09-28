<?php
class Dashboard extends MY_controller{
	public function __contsruct(){
		parent :: __construct();
		 	}
	public function index(){
		$this->load->view('admin/_layout_main');
	}
	public function modal(){
		$this->load->view('admin/_layout_modal');
	}

}