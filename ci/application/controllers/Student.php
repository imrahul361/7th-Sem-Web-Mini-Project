<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
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
        if ($this->session->userdata('level') === '4') {
            redirect('SHome/index');
        } else {
            echo "Access Denied!";
        }
    }
}
