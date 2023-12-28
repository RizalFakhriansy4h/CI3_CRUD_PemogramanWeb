<?php 
    class Penduduk extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->dbPenduduk = $this->load->database('dbPenduduk', TRUE);
        }


        public function index() {

            // tangkap input keyword
            if ($this->input->post('submit')) {
                
                $data["keyword"] = $this->input->post('keyword');
                $this->session->set_userdata('keyword', $data['keyword']);
            } else {

                $data['keyword'] = $this->session->userdata('keyword');
            }

            // config
            $this->dbPenduduk->like('nama', $data['keyword']);
            $this->dbPenduduk->or_like('email', $data['keyword']);
            $this->dbPenduduk->from('profil');
            $config['total_rows'] = $this->dbPenduduk->count_all_results();
            $data['total_rows'] = $config['total_rows'];
            $config['per_page']= 15;
            
            // initialize
            $this->pagination->initialize($config);


            $data['judul'] = "Penduduk";
            $data["start"] = $this->uri->segment(3);
            $data["penduduk"] = $this->Penduduk_model->getPendudukByValue( $config["per_page"], $data["start"], $data["keyword"]);

            $this->load->view("templates/header", $data);
            $this->load->view("penduduk/index", $data);
            $this->load->view("templates/footer");
        }
    
    
    
    
    }    