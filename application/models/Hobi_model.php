<?php

class Hobi_model extends CI_Model {

    public function getAllKodeSering() {
        
        return $this->db->get('kode_sering')->result_array();
        
    }

    public function getAllHobi() {
        
        return $this->db->get('hobi')->result_array();
        
    }
    public function tambah() {

        $data = [
            "nama_hobi" => $this->input->post('namaHobi', true),
            "keseringan" => $this->input->post('namaSering', true),
            "deskripsi_hobi" => $this->input->post('deskripsiHobi', true)
        ];
        
        $this->db->insert('hobi', $data);
        
    }

    public function hapus($id) {
        
        // $this->db->where('id', $id);
        $this->db->delete('hobi',['id'=> $id]);
        
    }
    
    public function detail($id) {
        
        return $this->db->get_where('hobi', ['id'=> $id])->row_array();

    }
    public function edit() {

        $data = [
            "nama_hobi" => $this->input->post('namaHobi', true),
            "keseringan" => $this->input->post('namaSering', true),
            "deskripsi_hobi" => $this->input->post('deskripsiHobi', true)
        ];
        
        $this->db->where('id', $this->input->post('idHobi'));
        $this->db->update('hobi', $data);
        
    }
    
    public function cariHobi() {
        
        $keyword = $this->input->post('keyword', true);
        
        $this->db->like('nama_hobi', $keyword);       
        return $this->db->get('hobi')->result_array();
    }
}