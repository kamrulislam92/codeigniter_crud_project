<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('userModel');
    }


    public function create() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    
        if ($this->form_validation->run() == false) {
            $data['main_content'] = $this->load->view('create', array(), TRUE);
            $this->load->view('template', $data);
        } 
        else {
            // Save user to the database
            $formArray = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'created_at' => date('Y-m-d')
            );
            $this->userModel->create($formArray);
            $this->session->set_flashdata('success', 'This record inserted successfully!');
            redirect(base_url() . 'userController/view');
        }
    }
    
    public function view() {
        $data['view_users'] = $this->userModel->getViewUser();
        $data['main_content'] = $this->load->view('view', $data, TRUE); // Use TRUE to get the view as a string
        $this->load->view('template', $data);
    }
    public function edit($id){
  
        $data['edit_data'] = $this->userModel->get_user_by_id($id);
        if (empty($data['edit_data'])) {
            $this->load->view('user_not_found');
        } else {
            $this->load->view('edit', $data);
        }
   }
 
   public function update() {
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
        );
        $this->userModel->update_user($id, $data);
        redirect('userController/view/'. $id);
    }

    public function delete($id) {
        $this->userModel->delete_user($id);
        redirect('userController/view');
    }
}
