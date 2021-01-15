<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        if ($this->session->userdata('level') === '2') {
            redirect('Home/index');
        } else {
            echo "Access Denied!";
        }
    }
}
