<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stu_parent extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('Login');
        }
    }

    function index()
    {
        if ($this->session->userdata('level') === '5') {
            redirect('PHome/index');
        } else {
            echo "Access Denied!";
        }
    }
}
