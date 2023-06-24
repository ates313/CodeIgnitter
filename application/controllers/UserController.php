<?php

class UserController extends CI_Controller{
    public function index(){
        $data['staff'] = $this->db
        ->select('s_creater_id ,s_FirstName_az,s_LastName_az,s_Position,s_Email,s_Facebook,s_Telegram,s_Youtube,s_Instagram,s_image')
        
        ->get('staff')->result_array();
    
        $data['service_get_list'] = $this->db
        ->select('service_Heading, service_Paragraph')
        
        ->get('service')->result_array();

        $this->load->view("user/index", $data);
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