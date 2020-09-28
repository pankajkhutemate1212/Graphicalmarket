<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class allpress extends CI_Controller 

  {

    public function __construct(){

      parent::__construct();

     $this->load->model('press_model');

     // $this->load->model('category_model');

	 // $this->load->model('page_model');

    }



    public function index()

    {   

      $data['press'] = $this->press_model->get_report();

      $data['title'] = 'Admin Panel';

      $data['description'] = 'Admin Panel';

      $data['keywords'] = 'Admin Panel';

    //  $data['content'] = 'elements/home';

     // $this->load->view('admin/_layout_allpress', $data);



       if(($this->session->userdata('user_id')!=""))

                                    {

            $data['content'] = 'admin/press_master';

            $this->load->view('admin/_layout_allpress', $data);

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }

            

      

    }

    

      public function editpress()

	{

		$url = $this->uri->segment($this->uri->total_segments());
		if(($this->session->userdata('user_id')!="")){
			

	  $data['press'] = $this->press_model->get_rep_detail($url);

        

      $data['title'] = '';

      $data['description'] = '';

      $data['keywords'] = '';

     //  $data['content'] = 'elements/home';

        

     // $this->load->view('admin/_layout_allpress', $data);



      // if(($this->session->userdata('user_id')!=""))

         //                           {

                // $data['content'] = 'admin/edit_press';



                $this->load->view('admin/components/page_head');



               $this->load->view('admin/components/admin_header_menu');

     

   				     $this->load->view('admin/edit_press', $data);



                $this->load->view('admin/components/page_foot');





                                   }
 else

                   {

                  $this->load->view("register_view");

                }

	}  

       

	

        

  }