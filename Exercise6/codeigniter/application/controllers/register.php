<?php
class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['users'] = $this->register_model->get_users();
        $data['title'] = 'Register';

        $this->load->view('body', $data);
        $this->load->view('register/index', $data);
        
    }

    public function view($user_id = NULL)
    {
        $data['user_id'] = $this->register_model->get_users($user_id);

        if (empty($data['user_id']))
        {
            show_404();
        }

        $data['user_item'] = $this->register_model->get_users($user_id);

        $this->load->view('body', $data);
        $this->load->view('register/view', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Register now';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('homead', 'Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('body', $data);
            $this->load->view('register/create');

        }
        else
        {
            $this->register_model->set_news();
            $this->load->view('body', $data);
            $this->load->view('register/success');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3); //segmet (link)

        if (empty($id))
        {
            show_404();
        }
    
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update item';
        $data['user_item'] = $this->register_model->get_user_by_id($id);

         $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('homead', 'Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('comment', 'Comment');


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('body', $data);
            $this->load->view('register/edit', $data);

        }
        else
        {
            $this->register_model->set_news($id);
            redirect( base_url() . 'index.php/register');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $user_item = $this->register_model->get_user_by_id($id);

        $this->register_model->delete_news($id);
        redirect( base_url() . 'index.php/register');
    }
}
