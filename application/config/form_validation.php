<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config = array(
                 'inquiry' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'phone',
                                            'label' => 'Phone',
                                            'rules' => 'required|max_length[30]'
                                         ),
                                    ),
                 'sample' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'phone',
                                            'label' => 'Phone',
                                            'rules' => 'required|max_length[30]'
                                         ),
                                    array(
                                            'field' => 'message',
                                            'label' => 'Message',
                                            'rules' => 'required'
                                         ),
                                    ), 
                'brochure' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'phone',
                                            'label' => 'Phone',
                                            'rules' => 'required|max_length[30]'
                                         ),
                                    array(
                                            'field' => 'message',
                                            'label' => 'Message',
                                            'rules' => 'required'
                                         ),
                                    ),  
                'contact' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'phone',
                                            'label' => 'Phone',
                                            'rules' => 'required|max_length[30]'
                                         ),
                                    array(
                                            'field' => 'message',
                                            'label' => 'Message',
                                            'rules' => 'required'
                                         )
                                    )                                           
               );