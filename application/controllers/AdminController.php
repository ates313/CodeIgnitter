<?php

class AdminController extends CI_Controller{
    public function index(){
        $this->load->view("user/index");
    }

    public function about(){
        $this->load->view("user/about");
    }

    public function contact(){
        $this->load->view("user/contact");
    }

    public function gallery(){
        $this->load->view("user/gallery");
    }

    public function service(){
        $this->load->view("user/service");
    }

    
}