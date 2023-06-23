<?php

class AdminModel extends CI_Model{

    public function insert_staff($data){
        $this->db->insert('staff', $data);
    }

    public function get_all_data(){
        return $this->db->order_by('s_creater_id',"DESC")->get('staff')->result_array();
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
    
    public function service_get_list()
    {
        return $this->db->order_by("service_id", "DESC")->get("service")->result_array();
    }

    public function services_get_list_rw($service_id)
    {
        return $this->db->where("service_id", $service_id)->get("service")->row_array();
    }

    public function services_edit_e($service_id, $data)
    {
        $this->db->where("service_id", $service_id)->update("service", $data);
    }

    public function services_delete_db()
    {
        $this->db->where();
    }

}