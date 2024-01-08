<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // public function __construct()
    // {
    // }
    public function index()
    {
        $this->load->view('bagian/Header');
        $this->load->view('Home');
        $this->load->view('bagian/Footer');
    }
}
