<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class web extends CI_Controller 
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url'); 
    }

    public function index(){
        $data['judul'] = "Home";
        $this->load->view('i_header', $data);
        $this->load->view('i_index', $data);
        $this->load->view('i_footer', $data);
    }

    public function about(){
        $data['judul'] = "About";
        $this->load->view('i_header', $data);
        $this->load->view('i_about', $data);
        $this->load->view('i_footer', $data);
    }

    public function blog(){
        $data['judul'] = "About";
        $this->load->view('i_header', $data);
        $this->load->view('i_blog', $data);
        $this->load->view('i_footer', $data);
    }
    
}