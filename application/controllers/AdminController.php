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

    public function error(){
        $this->load->view("admin/404");
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

    public function fPassword(){
        $this->load->view("admin/fPassword");
    }

    public function tables(){
        $this->load->view("admin/tables");
    }

    public function uAnimation(){
        $this->load->view("admin/uAnimation");
    }

    public function uBorder(){
        $this->load->view("admin/uBorder");
    }

    public function uColor(){
        $this->load->view("admin/uColor");
    }

    public function uOther(){
        $this->load->view("admin/utilities-other");
    }
    
}