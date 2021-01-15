<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function check_user($email, $password)
    {
        $this->db->select('*'); //select all
        $this->db->from('user_tbl'); // table name
        $this->db->where('email', $email); // where username is equal to $username
        $this->db->where('password', md5($password)); // and password is equal to  $password (md5 format)
        $query = $this->db->get(); //get data from DB
        return $query;
    }
}
