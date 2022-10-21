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
                'nis' => $this->input->post('nis'), 
                'kelas' => $this->input->post('kelas'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat'), 
                'jns_kelamin' => $this->input->post('jns_kelamin'),
                'agama' => $this->input->post('agama')  
            ];

        $this->load->view('view-data-mahasiswa', $data); 
    } 
         
}