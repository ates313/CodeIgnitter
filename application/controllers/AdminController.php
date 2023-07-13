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

            $data = $this->security->xss_clean($data);

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

        $data = $this->security->xss_clean($data);
    
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

        $data = $this->security->xss_clean($data);

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

        $data = $this->security->xss_clean($data);
    
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

        $data = $this->security->xss_clean($data);


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
    
        $data = $this->security->xss_clean($data);

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

        $data = $this->security->xss_clean($data);


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

        $data = $this->security->xss_clean($data);

    
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

        $data = $this->security->xss_clean($data);

        $this->AdminModel->time_edit_e($time_id, $data);
        redirect(base_url("timeList"));
    }

    public function timeDelete($time_id){
        $this->AdminModel->timeDelete_db($time_id);
        redirect(base_url("timeList"));
    }

    // ==Contact

    public function Ccontact(){
        $this->load->view('admin/product/contact/Ccontact');
    }

    public function contactList(){
        $data["contact_get_list"] = $this->AdminModel->contact_get_list();
        $this->load->view('admin/product/contact/contactList', $data);
    }

    public function c_contact_act(){
        $contactNumber = $_POST['contactNumber'];
        $contactEmail  = $_POST['contactEmail'];

        $data =[
            'contact_Number'=> $contactNumber,
            'contact_Email' => $contactEmail
        ];
        
        $data = $this->security->xss_clean($data);


        $this->AdminModel->contact_insert($data);
        redirect(base_url('contactList'));

    }

    public function contactEdit($contact_id){
        $data ["contact_get_list_rw"] = $this->AdminModel->contact_get_list_rw($contact_id);
        $this->load->view("admin/product/contact/contactEdit", $data);
    }

    public function contact_edit_act($contact_id){
        $contact_edit_inp_h = $_POST['contactNumber'];
        $contact_edit_inp_p = $_POST['contactEmail'];

        $data = [
            "contact_Number" => $contact_edit_inp_h,
            "contact_Email"  => $contact_edit_inp_p
        ];

        $data = $this->security->xss_clean($data);


        $this->AdminModel->contact_edit_e($contact_id, $data);
        redirect(base_url('contactList'));
    }

    public function contactDelete($contact_id){
        $this->AdminModel->contactDelete_db($contact_id);
        redirect(base_url("contactList"));
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
        $data['position'] = $this->db->get('position')->result_array();


        // print_r('<pre>');
        // print_r($data['position']);
        // die();
        $this->load->view("admin/product/create", $data);
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

            $checkPosition =  $this->db->where("p_id", $position)->get('position')->row_array();

            if(!$checkPosition){
                $this->session->set_flashdata("err", "Boşluq buraxmayın!");
                redirect($_SERVER['HTTP_REFERER']);
            }

            




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

                $data = $this->security->xss_clean($data);

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
                
                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_staff($data);
                redirect(base_url('c_list'));
            }
        }
        else{
            $this->session->set_flashdata("err", "Boşluq buraxmayın!");
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

                $data = $this->security->xss_clean($data);

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

                $data = $this->security->xss_clean($data);


                $this->AdminModel->update_staff($id, $data);
                redirect(base_url('c_list'));
            }
        }
        else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

}
