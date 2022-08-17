<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lansia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('lansia_model');
    }

    public function index()
    {
        $data['title'] = 'Data Lansia | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['lansia'] = $this->lansia_model->getDataLansia();

        $this->load->view('templates/header-datatables', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('lansia/index', $data);
        $this->load->view('templates/footer-datatables');
    }

    // MULAI CREATE DATA Lansia
    public function createDataLansia()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
        ];

        $this->db->insert('lansia', $data);
        $this->session->set_flashdata('msg', 'Berhasil Ditambahkan');

        redirect('lansia');
    }
    // SELESAI CREATE DATA Lansia

    //     // MULAI READ DATA IBU
    //     public function viewData()
    //     {
    //         $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //         // print_r($data);

    //         $this->load->view('templates/header-datatables');
    //         $this->load->view('templates/sidebar');
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('ibu/index', $data);
    //         $this->load->view('templates/footer-datatables');
    //     }
    //     // SELESAI READ DATA IBU

    // MULAI UPDATE DATA lansia
    public function updateDataLansia($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),

        ];

        $this->lansia_model->updDataLansia($id, $data);
        $this->session->set_flashdata('msg', 'Berhasil Diubah');

        redirect('lansia/index');
    }
    // SELESAI UPDATE DATA lansia

    // MULAI DELETE DATA lansia
    public function deleteDataLansia($id)
    {
        $this->lansia_model->delDataLansia($id);
        $this->session->set_flashdata('msg', 'Berhasil Dihapus');

        redirect('lansia/index');
    }
    // SELESAI DELETE DATA IBU

    public function pemeriksaanlansia(){
        $data['title'] = 'Pemeriksaan Lansia | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['lansia'] = $this->lansia_model->getDataLansia();

        $this->load->view('templates/header-datatables', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('lansia/pemeriksaanlansia', $data);
        $this->load->view('templates/footer-datatables');
    }

     public function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'usia' => $this->input->post('usia'),
            'bb' => $this->input->post('bb'),
            'tensi' => $this->input->post('tensi'), 

        ];
        $where = [
            'id_lansia' => $this->input->post('id_lansia')
        ];
        
        $this->db->where($where);
        $this->db->update('lansia', $data);
        
        $this->session->set_flashdata('msg', 'Berhasil Diubah');

        redirect('lansia/index');
    }
}
