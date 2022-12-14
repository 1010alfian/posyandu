<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    // MULAI GET DATA ANAK IBU
    public function getDataAnakIbu()
    {
        $query = "SELECT *
                    From anak 
                    ";

        return $this->db->query($query)->result_array();
    }
    // SELESAI GET DATA ANAK IBU

    function getlansia(){
        $this->db->select('*')
            ->from('lansia h')
            ->join('layanan_lansia q', 'q.id_lansia = h.id_lansia');

        // var_dump($res->result());
        // die;

        $res = $this->db->get();
        // echo $this->db->last_query();
        return $res->result();
    }

    function getanak(){
        $this->db->select('*')
            ->from('penimbangan h')
            ->join('imunisasi q', 'q.anak_id = h.anak_id')
            ->join('anak i', 'i.id_anak = h.anak_id');

        // var_dump($res->result());
        // die;

        $res = $this->db->get();
        // echo $this->db->last_query();
        return $res->result();
    }

    // MULAI GET DATA UTK CETAK LAPORAN
    function get($where = array())
    {

        $this->db->select('i.nik_anak, h.tgl_lahir, h.tgl_skrng, h.usia, h.bb, h.tb, h.deteksi, h.bb, q.imunisasi, q.vit_a, q.ket, i.nama_anak')
            ->from('penimbangan h')
            ->join('imunisasi q', 'q.anak_id = h.anak_id')
            ->join('anak i', 'i.id_anak = h.anak_id');
        if (count($where) > 0)
            $this->db->where($where);

        $this->db->where('`h.tgl_skrng = q.tgl_skrng`');
        $this->db->order_by('h.tgl_skrng asc');
        // var_dump($res->result());
        // die;

        $res = $this->db->get();
        // echo $this->db->last_query();
        return $res->result();
    }

    function getId($where = array())
    {

        $this->db->select('i.nik_anak, h.tgl_lahir, h.tgl_skrng, h.usia, h.bb, h.tb, h.deteksi, h.bb, q.imunisasi, q.vit_a, q.ket, i.nama_anak,i.nama_ibu')
            ->from('penimbangan h')
            ->join('imunisasi q', 'q.anak_id = h.anak_id')
            ->join('anak i', 'i.id_anak = h.anak_id');
        if (count($where) > 0)
            $this->db->where($where);

        $this->db->group_by('h.anak_id');
        $this->db->order_by('h.tgl_skrng asc');
        // var_dump($res->result());
        // die;

        $res = $this->db->get();
        // echo $this->db->last_query();
        return $res->result();
    }
    // SELESAI GET DATA UTK CETAK LAPORAN
}
