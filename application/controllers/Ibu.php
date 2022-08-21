<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ibu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ibu_model');
    }

    public function index()
    {
        $data['title'] = 'Data Ibu Hamil | Posyandu Kencana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['ibu'] = $this->Ibu_model->getDataIbu();

        $this->load->view('templates/header-datatables', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('ibu/index', $data);
        $this->load->view('templates/footer-datatables');
    }

    // MULAI CREATE DATA IBU
    public function createDataIbu()
    {
        $data = [
            'nama_ibu' => $this->input->post('nama-ibu'),
            'tempat_lahir' => $this->input->post('tempat-lhr-ibu'),
            'tgl_lahir' => $this->input->post('tgl-lahir-ibu'),
            'nama_suami' => $this->input->post('nama-suami'),
            'alamat' => $this->input->post('alamat'),
            'no_tlp' => $this->input->post('no-tlp'),
            'hpht' => $this->input->post('hpht'),
        ];

        $this->db->insert('ibu', $data);
        $this->session->set_flashdata('msg', 'Berhasil Ditambahkan');

        redirect('ibu');
    }
    // SELESAI CREATE DATA IBU

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

    // MULAI UPDATE DATA IBU
    public function updateDataIbu($id)
    {
        $data = [
            'nama_ibu' => $this->input->post('nama-ibu'),
            'tempat_lahir' => $this->input->post('tempat-lhr-ibu'),
            'tgl_lahir' => $this->input->post('tgl-lahir-ibu'),
            'nama_suami' => $this->input->post('nama-suami'),
            'alamat' => $this->input->post('alamat'),
            'no_tlp' => $this->input->post('no-tlp'),
            'hpht' => $this->input->post('hpht'),

        ];

        $this->Ibu_model->updDataIbu($id, $data);
        $this->session->set_flashdata('msg', 'Berhasil Diubah');

        redirect('ibu/index');
    }
    // SELESAI UPDATE DATA IBU

    // MULAI DELETE DATA IBU
    public function deleteDataIbu($id)
    {
        $this->Ibu_model->delDataIbu($id);
        $this->session->set_flashdata('msg', 'Berhasil Dihapus');

        redirect('ibu/index');
    }
    // SELESAI DELETE DATA IBU


    // Layanan
    public function pemeriksaanibuhamil(){
        $data['title'] = 'Pemeriksaan Ibu Hamil | Posyandu Kencana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['ibu'] = $this->Ibu_model->getDataIbu();

        $this->load->view('templates/header-datatables', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('ibu/pemeriksaan', $data);
        $this->load->view('templates/footer-datatables');
    }

    public function addlayanan(){
        $data = [
            'ibu_id' => $this->input->post('id'),
            'tgl_pemeriksaan' => $this->input->post('tgl_pemeriksaan'),
            'usia_kandungan' => $this->input->post('hpht'),
            'bb' => $this->input->post('bb'),
            'tensi' => $this->input->post('tensi'),
            'lingkar_perut' => $this->input->post('lingkar_perut')
        ];

        $this->db->insert('layanan_ibu_hamil', $data);
        $this->session->set_flashdata('msg', 'Berhasil Ditambahkan');

        redirect('ibu/pemeriksaanibuhamil');
    }

    // Laporan
    public function laporan()
    {
        $data['title'] = 'Laporan Ibu Hamil | Posyandu Kencana';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['ibu'] = $this->Ibu_model->getIbuLaporan();

        $this->load->view('templates/header-datatables', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('ibu/laporan', $data);
        $this->load->view('templates/footer-datatables');
    }
}
