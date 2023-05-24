<?php

class AdminModel extends CI_Model{

    public function insert_staff($data){
        $this->db->insert('staff', $data);
    }

    public function get_all_data(){
        return $this->db->order_by('s_creater_id',"DESC")->get('staff')->result_array();
    }

}