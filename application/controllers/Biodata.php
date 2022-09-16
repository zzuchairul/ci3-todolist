<?php

class Biodata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BiodataModel');
    }

    public function index()
    {
        $biodata = $this->BiodataModel->getBiodata();
        $data['biodata'] = $biodata;

        $data['judul'] = 'Biodata';
        $this->load->view('templates/header', $data);
        $this->load->view('biodata/index', $data);
        $this->load->view('templates/footer');
    }
}
