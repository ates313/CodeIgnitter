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
    // =========SERVICE======
    public function Cservice(){
        $this->load->view("admin/product/service/Cservice");
    }
    
    public function serviceList(){
        $data["service_get_list"] = $this->AdminModel->service_get_list();
        $this->load->view("admin/product/service/serviceList", $data);
    }


    public function c_service_act(){
        $serviceHeading = $_POST["serviceHeading"];
        $serviceParagraph = $_POST["serviceParagraph"];
    
        $data = [
            "service_Heading"=> $serviceHeading,
            "service_Paragraph"=> $serviceParagraph
        ];
    
        $this->AdminModel->service_insert($data);
        redirect(base_url("serviceList"));

    }

    public function serviceEdit($service_id){
        $data["services_get_list_rw"] = $this->AdminModel->services_get_list_rw($service_id);
        $this->load->view("admin/product/service/serviceEdit", $data);
    }

    public function service_edit_act($service_id){
        $service_edit_inp_h = $_POST["serviceHeading"];
        $service_edit_inp_p = $_POST["serviceParagraph"];

        $data = [
            "service_Heading" => $service_edit_inp_h,
            "service_Paragraph" => $service_edit_inp_p
        ];

        $this->AdminModel->services_edit_e($service_id, $data);
        redirect(base_url("serviceList"));
    }

    public function serviceDelete($service_id){
        $this->AdminModel->serviceDelete_db($service_id);
        redirect(base_url("serviceList"));
    }


    // =======PRICE======
    public function Cprice(){
        $this->load->view('admin/product/price/Cprice');
    }

    public function priceList(){
        $data["price_get_list"] = $this->AdminModel->price_get_list();
        $this->load->view("admin/product/price/priceList", $data);
    }

    public function c_price_act(){
        $priceHeading = $_POST["priceHeading"];
        $pricePrice = $_POST["pricePrice"];
    
        $data = [
            "price_Heading"=> $priceHeading,
            "price_price"=> $pricePrice
        ];
    
        $this->AdminModel->price_insert($data);
        redirect(base_url("priceList"));

    }

    public function priceEdit($price_id){
        $data ["price_get_list_rw"] = $this->AdminModel->price_get_list_rw($price_id);
        $this->load->view("admin/product/price/priceEdit", $data);
    }

    public function price_edit_act($price_id){
        $price_edit_inp_h = $_POST["priceHeading"];
        $price_edit_inp_p = $_POST["pricePrice"];

        $data = [
            "price_Heading" => $price_edit_inp_h,
            "price_price" => $price_edit_inp_p
        ];

        $this->AdminModel->price_edit_e($price_id, $data);
        redirect(base_url("priceList"));
    }

    public function priceDelete($price_id){
        $this->AdminModel->priceDelete_db($price_id);
        redirect(base_url("priceList"));
    }

    // ====ABOUT==

    public function Cabout(){
        $this->load->view('admin/product/about/Cabout');
    }

    public function aboutList(){
        $data["about_get_list"] = $this->AdminModel->about_get_list();
        $this->load->view("admin/product/about/aboutList", $data);
    }

    public function c_about_act(){
        $aboutHeading = $_POST["aboutHeading"];
        $aboutAbout = $_POST["aboutAbout"];
    
        $data = [
            "about_Heading"=> $aboutHeading,
            "about_about"=> $aboutAbout
        ];
    
        $this->AdminModel->about_insert($data);
        redirect(base_url("aboutList"));

    }

    public function aboutEdit($about_id){
        $data ["about_get_list_rw"] = $this->AdminModel->about_get_list_rw($about_id);
        $this->load->view("admin/product/about/aboutEdit", $data);
    }

    public function about_edit_act($about_id){
        $about_edit_inp_h = $_POST["aboutHeading"];
        $about_edit_inp_p = $_POST["aboutAbout"];

        $data = [
            "about_Heading" => $about_edit_inp_h,
            "about_about" => $about_edit_inp_p
        ];

        $this->AdminModel->about_edit_e($about_id, $data);
        redirect(base_url("aboutList"));
    }

    public function aboutDelete($about_id){
        $this->AdminModel->aboutDelete_db($about_id);
        redirect(base_url("aboutList"));
    }


    // ===TIME

    public function Ctime(){
        $this->load->view('admin/product/time/Ctime');
    }

    public function timeList(){
        $data["time_get_list"] = $this->AdminModel->time_get_list();
        $this->load->view("admin/product/time/timeList", $data);
    }

    public function c_time_act(){
        $timeWeek = $_POST["timeWeek"];
        $timeTime = $_POST["timeTime"];
    
        $data = [
            "time_Week"=> $timeWeek,
            "time_Time"=> $timeTime
        ];
    
        $this->AdminModel->time_insert($data);
        redirect(base_url("timeList"));
    }

    public function timeEdit($time_id){
        $data ["time_get_list_rw"] = $this->AdminModel->time_get_list_rw($time_id);
        $this->load->view("admin/product/time/timeEdit", $data);
    }

    public function time_edit_act($time_id){
        $time_edit_inp_h = $_POST["timeWeek"];
        $time_edit_inp_p = $_POST["timeTime"];

        $data = [
            "time_Week" => $time_edit_inp_h,
            "time_time" => $time_edit_inp_p
        ];

        $this->AdminModel->time_edit_e($time_id, $data);
        redirect(base_url("timeList"));
    }

    public function timeDelete($time_id){
        $this->AdminModel->timeDelete_db($time_id);
        redirect(base_url("timeList"));
    }


    // ============================================

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
                    's_Mobile' => $mobile,
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
