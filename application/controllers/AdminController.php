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

    public function create(){
        $this->load->view("admin/product/create");
    }

    public function list(){
        $this->load->view("admin/product/list");
    }

    public function update(){
        $this->load->view("admin/product/update");
    }    
    




    public function staff_create_act(){
        $firstName_az   = $_POST['FirstName_az'];
        $lastName_az    = $_POST['LastName_az'];
        $description_az = $_POST['user_description_az'];

        $position    = $_POST['Position'];
        $status      = $_POST['Status'];

        $firstName_en   = $_POST['FirstName_en'];
        $lastName_en    = $_POST['LastName_en'];
        $description_en = $_POST['user_description_en'];

        $firstName_ru   = $_POST['FirstName_ru'];
        $lastName_ru    = $_POST['LastName_ru'];
        $description_ru = $_POST['user_description_ru'];

        $email       = $_POST['Email'];
        $mobile      = $_POST['Mobile'];
        $instagram    = $_POST['Instagram'];
        $facebook    = $_POST['Facebook'];
        $telegram    = $_POST['Telegram'];
        $youtube     = $_POST['Youtube'];
        
        
        if(!empty($firstName_az) && !empty($lastName_az) && !empty($description_az) && !empty($status) && !empty($position)){
            

            $data = [
                '' => $firstName_az,
                '' => $lastName_az,
                '' => $description_az,

                '' => $firstName_en,
                '' => $lastName_en,
                '' => $description_en,

                '' => $firstName_ru,
                '' => $lastName_ru,
                '' => $description_ru,

                '' => $position,
                '' => $status,
                '' => $email,
                '' => $mobile,
                '' => $whatsApp,
                '' => $facebook,
                '' => $telegram,
                '' => $youtube,
                'create_date' => 1,
                'creater_id'  => 1,
            ];
            


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }




        
    }
}