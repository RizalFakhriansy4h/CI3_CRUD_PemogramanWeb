<?php
    class Penduduk_model extends CI_Model {

        public function getAllPenduduk() {
            
            return $this->dbPenduduk->get('profil')->result_array();
            
        }
        public function getPendudukByValue($limit,$start, $keyword = "") {

            if ($keyword) {
                
             $this->dbPenduduk->like('nama',$keyword);
             $this->dbPenduduk->or_like('email',$keyword);

            }

            return $this->dbPenduduk->get('profil',$limit,$start)->result_array();

        }

        public function countAllPenduduk() {
            
            return $this->dbPenduduk->get('profil')->num_rows();
            
        }

    }