<?php
class Newreport extends CI_controller{
	public function __contsruct()
    {
		parent :: __construct();
	}
	public function index()
    {
		$this->load->library('form_validation');

        //$this->form_validation->set_rules('rid', 'ReportID', 'required');
		//$this->form_validation->set_rules('isbn', 'ISBN', 'required');
		$this->form_validation->set_rules('pages', 'Pages', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('keyword', 'Keyword', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('cat', 'Category', 'required');
        $this->form_validation->set_rules('publisher', 'Publisher', 'required');
        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');

        if ($this->form_validation->run() == FALSE)
        {

            if(($this->session->userdata('user_id')!=""))
            {

                $this->load->view('admin/_layout_new_single_report_upload');
            }
            else
            {
                $this->load->view("register_view");
            }
            
        }
        else
        {
            $this->load->model('admin/model_newreport');
            $result = $this->model_newreport->insert_report();
            if($result==1)
            {
                $this->load->view('admin/report_uploaded');

            }
            else
            {
                echo "Error in coading";
            }
        }
	
    }
	
public function update()
    {
		$this->load->library('form_validation');


        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('cat', 'Category', 'required');
        $this->form_validation->set_rules('publisher', 'Publisher', 'required');
        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');

        if ($this->form_validation->run() == FALSE)
        {

            if(($this->session->userdata('user_id')!=""))
            {

                $this->load->view('admin/_layout_edit_report');
            }
            else
            {
                $this->load->view("register_view");
            }
            
        }
        else
        {
            $id = $this->input->post('id');
            $this->load->model('admin/model_newreport');
            $result = $this->model_newreport->update_report($id);
            if($result==1)
            {
                $this->load->view('admin/report_uploaded');

            }
            else
            {
                echo "Error in coading";
            }
        }
	
    }
	
}

?>