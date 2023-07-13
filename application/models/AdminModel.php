<?php

class AdminModel extends CI_Model{

    
    public function insert_staff($data){
        $this->db->insert('staff', $data);
    }

    public function get_all_data(){
        return $this->db->order_by('s_creater_id',"DESC")->join("position", "position.p_id = staff.s_Position", "left")->get('staff')->result_array();
    }

    public function get_single_staff($id){
        return $this->db->where('s_creater_id', $id )->get('staff')->row_array();
    }

    public function delete_staff($id){
        $this->db->where('s_creater_id',$id)->delete('staff');
        redirect(base_url('c_list'));
    }

    public function update_staff($id, $data){
        $this->db->where('s_creater_id', $id)->update('staff', $data);
    }


    // ===SERVVICE

    public function service_insert($data){
        $this->db->insert("service", $data);
    }
    
    public function service_get_list(){
        return $this->db->order_by("service_id", "DESC")->get("service")->result_array();
    }

    public function services_get_list_rw($service_id){
        return $this->db->where("service_id", $service_id)->get("service")->row_array();
    }

    public function services_edit_e($service_id, $data){
        $this->db->where("service_id", $service_id)->update("service", $data);
    }

    public function serviceDelete_db($service_id){
        $this->db->where("service_id", $service_id)->delete("service");
    }


    // =====PRICE

    public function price_insert($data){
        $this->db->insert("price", $data);
    }
    
    public function price_get_list(){
        return $this->db->order_by("price_id", "DESC")->get("price")->result_array();
    }

    public function price_get_list_rw($price_id){
        return $this->db->where("price_id", $price_id)->get("price")->row_array();
    }

    public function price_edit_e($price_id, $data){
        $this->db->where("price_id", $price_id)->update("price", $data);
    }

    public function priceDelete_db($price_id){
        $this->db->where("price_id", $price_id)->delete("price");
    }


    // ====ABOUT

    public function about_insert($data){
        $this->db->insert("about", $data);
    }
    
    public function about_get_list(){
        return $this->db->order_by("about_id", "DESC")->get("about")->result_array();
    }

    public function about_get_list_rw($about_id){
        return $this->db->where("about_id", $about_id)->get("about")->row_array();
    }

    public function about_edit_e($about_id, $data){
        $this->db->where("about_id", $about_id)->update("about", $data);
    }

    public function aboutDelete_db($about_id){
        $this->db->where("about_id", $about_id)->delete("about");
    }


    // ====TIME

    public function time_insert($data){
        $this->db->insert("time", $data);
    }
    
    public function time_get_list(){
        return $this->db->order_by("time_id", "DESC")->get("time")->result_array();
    }

    public function time_get_list_rw($time_id){
        return $this->db->where("time_id", $time_id)->get("time")->row_array();
    }

    public function time_edit_e($time_id, $data){
        $this->db->where("time_id", $time_id)->update("time", $data);
    }

    public function timeDelete_db($time_id){
        $this->db->where("time_id", $time_id)->delete("time");
    }

    // contact

    public function contact_insert($data){
        $this->db->insert("contact", $data);
    }

    public function contact_get_list(){
        return $this->db->order_by("contact_id", "DESC")->get("contact")->result_array();
    }

    public function contact_get_list_rw($contact_id){
        return $this->db->where("contact_id", $contact_id)->get('contact')->row_array();
    }

    public function contact_edit_e($contact_id, $data){
        $this->db->where("contact_id", $contact_id)->update("contact", $data);
    }

    public function contactDelete_db($contact_id){
        $this->db->where("contact_id", $contact_id)->delete("contact");
    }

}