<?php
class NewBlog extends Frontend_controller{
	public function __contsruct()
    {
		parent :: __construct();
	}
	public function index(){
		$this->load->view('admin/_layout_newblog');
	}
	public function modal(){
		//$this->load->view('admin/_layout_modal');
	}

}