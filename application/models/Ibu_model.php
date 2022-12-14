<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu_model extends CI_Model {

    // MULAI CRUD DATA IBU
    public function getDataIbu(){
        $this->db->select();
        $this->db->from('ibu as a');     
        $query = $this->db->get();
        
        return $query->result_array();
    }


    public function delDataIbu($id){
        $this->db->where('id_ibu', $id);
        $this->db->delete('ibu');
    }

    public function updDataIbu($id, $data){
        $this->db->where('id_ibu', $id);
        $this->db->update('ibu', $data);
    }

    public function editTensi($id, $data){
        $this->db->where('id_tensi_ibu', $id);
        $this->db->update('tensi_ibu', $data);
    }
    // SELESAI CRUD DATA IBU
    // get for laporan
    public function getIbuLaporan(){
        $this->db->select('*');
        $this->db->from('ibu as a');
        $this->db->join('layanan_ibu_hamil as b', 'a.id_ibu = b.ibu_id');
             
        $query = $this->db->get();
        
        return $query->result();
    }
}
