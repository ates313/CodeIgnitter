<?php

class AdminController extends CI_Controller{
    public function index(){
        $this->load->View("user/index");
    }
}