<?php


class AdminController extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index()
    {
        $this->load->view("admin/index");
    }

    public function login()
    {
        $this->load->view("admin/login");
    }

    public function logout(){
        unset($_SESSION['admin_id']);
        redirect(base_url("a_login"));
    }

    public function login_act()
    {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password)){

            $data = [
                'a_username' => $username,
                'a_password' => md5($password),
            ];

            $checkUser = $this->db->select("a_id")->where($data)->get("admin")->row_array();

            if($checkUser){
                $_SESSION['admin_id'] = $checkUser['a_id'];
                redirect(base_url('a_dashboard'));
            }else{
                $this->session->set_flashdata('er',"Username ve ya password yanlisdir!");
                redirect($_SERVER['HTTP_REFERER']);
            }




        }else{
            $this->session->set_flashdata('er',"Bosluq buraxma!");
            redirect($_SERVER['HTTP_REFERER']);
        }
        
    }

    public function charts()
    {
        $this->load->view("admin/charts");
    }

    public function register()
    {
        $this->load->view("admin/register");
    }

    public function blank()
    {
        $this->load->view("admin/blank");
    }

    public function buttons()
    {
        $this->load->view("admin/buttons");
    }

    public function cards()
    {
        $this->load->view("admin/cards");
    }

    public function tables()
    {
        $this->load->view("admin/tables");
    }

    public function create()
    {
        $this->load->view("admin/product/create");
    }

    public function list()
    {
        $data['get_all_data'] = $this->AdminModel->get_all_data();
        $this->load->view("admin/product/list", $data);
    }

     
    public function c_creat_act()
    {
        $firstName_az   = $_POST['FirstName_az'];
        $lastName_az    = $_POST['LastName_az'];
        $description_az = $_POST['user_description_az'];
        $firstName_en   = $_POST['FirstName_en'];
        $lastName_en    = $_POST['LastName_en'];
        $description_en = $_POST['user_description_en'];
        $firstName_ru   = $_POST['FirstName_ru'];
        $lastName_ru    = $_POST['LastName_ru'];
        $description_ru = $_POST['user_description_ru'];
        $position       = $_POST['Position'];
        $email          = $_POST['Email'];
        $mobile         = $_POST['Mobile'];
        $instagram      = $_POST['instagram'];
        $facebook       = $_POST['Facebook'];
        $telegram       = $_POST['Telegram'];
        $youtube        = $_POST['Youtube'];
        $experience     = $_POST['experience'];


        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4|PNG';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        //$this->upload->initialize($config);
        //$uploaded_acc_photo = $this->upload->data();

        if (!empty($firstName_az) && !empty($lastName_az) && !empty($description_az) && !empty($position)){
            if ($this->upload->do_upload('acc_photo')) {
                $uploaded_acc_photo = $this->upload->data();
    
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
                    's_Instagram' => $instagram,
                    's_Facebook' => $facebook,
                    's_Telegram' => $telegram,
                    's_Mobile' => $mobile,
                    's_Youtube' => $youtube,
                    's_experience' => $experience,
                    's_image' => $uploaded_acc_photo["file_name"],
                    's_create_date' => date("Y-m-d H:i:s"),
                    's_creater_id' => "",
                ];
                $this->db->insert('staff', $data);
                redirect(base_url('c_list'));
            } 
            else
            {
                $data = [
                    's_FirstName_az' => $firstName_az,
                    's_LastName_az' => $lastName_az,
                    's_user_description_az' => $description_az,
                    's_FirstName_en' => $firstName_en,
                    's_LastName_en' => $lastName_en,
                    's_user_description_en' => $description_en,
                    's_FirstName_ru' => $firstName_ru,
                    's_LastName_ru' => $lastName_ru,
                    's_user_description_ru' => $description_ru,
                    's_Position' => $position,
                    's_Email' => $email,
                    's_Mobile' => $mobile
                    's_Instagram' => $instagram,
                    's_Facebook' => $facebook,
                    's_Telegram' => $telegram,
                    's_Youtube' => $youtube,
                    's_experience' => $experience,
                    's_create_date' => date("Y-m-d H:i:s"),
                    's_creater_id' => "",
                ];
                $this->AdminModel->insert_staff($data);
                redirect(base_url('c_list'));
            }
        }
        else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function detail_staff($id){
        $data["singe_data"] = $this->AdminModel->get_single_staff($id);
        $this->load->view("admin/product/detail", $data);
    }

    public function delete_staff($id){
        $this->AdminModel->delete_staff($id);
    }

    public function edit_staff($id){
        $data['single_data'] = $this->AdminModel->get_single_staff($id);
        $this->load->view('admin/product/update', $data);
    }

    public function edit_staff_act($id){

        $firstName_az   = $_POST['FirstName_az'];
        $lastName_az    = $_POST['LastName_az'];
        $description_az = $_POST['user_description_az'];
        $firstName_en   = $_POST['FirstName_en'];
        $lastName_en    = $_POST['LastName_en'];
        $description_en = $_POST['user_description_en'];
        $firstName_ru   = $_POST['FirstName_ru'];
        $lastName_ru    = $_POST['LastName_ru'];
        $description_ru = $_POST['user_description_ru'];
        $position       = $_POST['Position'];
        $email          = $_POST['Email'];
        $mobile         = $_POST['Mobile'];
        $instagram      = $_POST['instagram'];
        $facebook       = $_POST['Facebook'];
        $telegram       = $_POST['Telegram'];
        $youtube        = $_POST['Youtube'];
        $experience     = $_POST['experience'];


        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4|PNG';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        //$this->upload->initialize($config);
        //$uploaded_acc_photo = $this->upload->data();

        if (!empty($firstName_az) && !empty($lastName_az) && !empty($description_az) && !empty($position)){
            if ($this->upload->do_upload('acc_photo')) {
                $uploaded_acc_photo = $this->upload->data();
    
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
                    's_Instagram' => $instagram,
                    's_Facebook' => $facebook,
                    's_Telegram' => $telegram,
                    's_Youtube' => $youtube,
                    's_experience' => $experience,
                    's_image' => $uploaded_acc_photo["file_name"],
                    's_create_date' => date("Y-m-d H:i:s"),
                    's_creater_id' => "",
                ];
            } 
            else
            {
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
                    's_Instagram' => $instagram,
                    's_Facebook' => $facebook,
                    's_Telegram' => $telegram,
                    's_Youtube' => $youtube,
                    's_experience' => $experience,
                    's_create_date' => date("Y-m-d H:i:s")
                ];

                $this->AdminModel->update_staff($id, $data);
                redirect(base_url('c_list'));
            }
        }
        else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

}
