<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('sign_in');
    }
    function auth()
    {
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $result = $this->Login_model->check_user($email, $password);
        if ($result->num_rows() > 0) {
            $data = $result->row_array();
            $name = $data['username'];
            $email = $data['email'];
            $level = $data['level'];
            $sesdata = array(
                'username' => $name,
                'email' => $email,
                'level' => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            if ($level === '1') {
                redirect("SuperAdmin");
            } elseif ($level === '2') {
                redirect("Admin");
            } elseif ($level === '3') {
                redirect("Teacher");
            } elseif ($level === '4') {
                redirect("Student");
            } else {
                redirect("Stu_parent");
            }
        } else {
            echo "<script>alert('access denied');history.go(-1);</script>";
        }
        $this->load->view('Login/index');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Login/index');
    }
}
