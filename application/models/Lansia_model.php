<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lansia_model extends CI_Model {

    // MULAI CRUD DATA Lansia
    public function getDataLansia(){
        $query = "SELECT * From lansia";
        
        return $this->db->query($query)->result_array();
    }

    public function delDataLansia($id){
        $this->db->where('id_lansia', $id);
        $this->db->delete('lansia');
    }

    public function updDataLansia($id, $data){
        $this->db->where('id_lansia', $id);
        $this->db->update('lansia', $data);
    }
    // SELESAI CRUD DATA Lansia
}
