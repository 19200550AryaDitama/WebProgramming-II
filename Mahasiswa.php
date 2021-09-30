<?php
class Mahasiswa extends CI_Controller
{

    public function index()

    {
        $this->load->view('view-form-mahasiswa');
    }

    public function cetak()
    {
        $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'alamat' => $this->input->post('alamat'),
        'usia' => $this->input->post('usia')
        ];

        $this->load->view('view-data-mahasiswa', $data);
    }
}