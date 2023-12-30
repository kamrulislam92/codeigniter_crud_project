<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {

    function create(){
        $this->load->model('userModel');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == false){
            $this->load->view('create');
        }else{
            // Save user to database
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['created_at'] = date('Y-m-d');
            $this->userModel->create($formArray);
            $this->session->set_flashdata('success','This record insert successfully!');
            redirect(base_url().'userController/create');


        }

    }

}
