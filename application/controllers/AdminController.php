<?php


class AdminController extends CI_Controller{

    public function index(){
        $this->load->view("admin/index");
    }

    public function login(){
        $this->load->view("admin/login");
    }

    public function charts(){
        $this->load->view("admin/charts");
    }

    public function register(){
        $this->load->view("admin/register");
    }

    public function blank(){
        $this->load->view("admin/blank");
    }

    public function buttons(){
        $this->load->view("admin/buttons");
    }

    public function cards(){
        $this->load->view("admin/cards");
    }
    
    public function tables(){
        $this->load->view("admin/tables");
    }

    public function staff(){
        $this->load->view("admin/staff");
    }
    
}