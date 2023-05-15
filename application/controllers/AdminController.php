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
q
    public function list(){
        $this->load->view("admin/product/list");
    }

    public function update(){
        $this->load->view("admin/product/update");
    }    
    public function c_creat_act(){


        $firstName_az   = $_POST['FirstName_az'];
        $lastName_az    = $_POST['LastName_az'];
        $description_az = $_POST['user_description_az'];

        $firstName_en   = $_POST['FirstName_en'];
        $lastName_en    = $_POST['LastName_en'];
        $description_en = $_POST['user_description_en'];

        $firstName_ru   = $_POST['FirstName_ru'];
        $lastName_ru    = $_POST['LastName_ru'];
        $description_ru = $_POST['user_description_ru'];

        $position    = $_POST['Position']; 
        $email       = $_POST['Email'];
        $mobile      = $_POST['Mobile'];
        $instagram    = $_POST['instagram'];
        $facebook    = $_POST['Facebook'];
        $telegram    = $_POST['Telegram'];
        $youtube     = $_POST['Youtube'];
        $position     = $_POST['Position'];
        
        
        if(!empty($firstName_az) && !empty($lastName_az) && !empty($description_az) && !empty($position)){
            

            $data = [
                's_FirstName_az' => $firstName_az,
                's_LastName_az	' => $lastName_az,
                's_user_description_az	' => $description_az,

                's_FirstName_en' => $firstName_en,
                's_LastName_en' => $lastName_en,
                's_user_description_en' => $description_en,

                's_FirstName_ru' => $firstName_ru,
                's_LastName_ru	' => $lastName_ru,
                's_user_description_ru' => $description_ru,

                's_Position' => $position,
                's_Email' => $email,
                's_Mobile' => $mobile,
                's_Instagram' => $instagram,
                's_Facebook' => $facebook,
                's_Telegram' => $telegram,
                's_Youtube' => $youtube,
                's_create_date' => $today = date("Y-m-d H:i:s"),
                's_creater_id'  => "",
            ];
            
            $this->db->insert('staff', $data);
            redirect(base_url('c_create'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }
}