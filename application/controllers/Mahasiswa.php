<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {
        $getData = $this->mahasiswa_model->get();

        $data = [
            'mahasiswa' => $getData->result_array(),
            'jumlah_data' => $getData->num_rows()
        ];

        $this->load->view('mahasiswa/index', $data);
    }

    public function create()
    {
        $validation_rules = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'nis',
                'label' => 'NIS',
                'rules' => 'required'
            ],
            [
                'field' => 'kelas',
                'label' => 'Kelas',
                'rules' => 'required'
            ],
            [
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'tempat_lahir',
                'label' => 'Tempat Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ],
            [
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required'
            ]
            
        ];

        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('mahasiswa/add');
        } else {

            //data mahasiswa
            $mahasiswa = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama')
            ];

            $this->mahasiswa_model->insert($mahasiswa);

            $data['msg']  =  'Data berhasil disimpan';

            $this->load->view('mahasiswa/notifikasi', $data);
        }
    }

}