<?php

class Hobi extends CI_Controller {

	public function index()
	{
        $data['judul'] = "Hobi";
		$data["hobbies"] = $this->Hobi_model->getAllHobi();
		
		if ($this->input->post('keyword')) {
			$data["hobbies"] = $this->Hobi_model->cariHobi();
			
		}

		$this->load->view('templates/header',$data);
		$this->load->view('hobi/index',$data);
		$this->load->view('templates/footer');
	}
	
	public function tambah()
	{
		$data['judul'] = "Tambah Hobi";
		$data["sering"] = $this->Hobi_model->getAllKodeSering();
		
		$this->form_validation->set_rules('namaHobi', 'Nama Hobi', 'required'); 
		$this->form_validation->set_rules('namaSering', 'Nama Sering', 'required');
		$this->form_validation->set_rules('deskripsiHobi', 'Deskripsi Hobi', 'required');
		
		if( $this->form_validation->run() == FALSE) {
			
			$this->load->view('templates/header',$data);
			$this->load->view('hobi/tambah',$data);
			$this->load->view('templates/footer');

		} else {
			
		$this->Hobi_model->tambah();
		$this->session->set_flashdata('flash','Ditambahkan');
		redirect('hobi');
			
		}
	}

	public function hapus($id){
		$this->Hobi_model->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('hobi');
	}

	public function detail($id){
		$data['hobbies'] = $this->Hobi_model->detail($id);
		$data['judul'] = "Detail Hobi";
		
		$this->load->view('templates/header',$data);
		$this->load->view('hobi/detail',$data);
		$this->load->view('templates/footer');

	}
	
	public function edit($id)
	{
		$data['judul'] = "Edit Hobi";
		$data["sering"] = $this->Hobi_model->getAllKodeSering();
		$data['detail_hobi'] = $this->Hobi_model->detail($id);
		
		$this->form_validation->set_rules('namaHobi', 'Nama Hobi', 'required'); 
		$this->form_validation->set_rules('namaSering', 'Nama Sering', 'required');
		$this->form_validation->set_rules('deskripsiHobi', 'Deskripsi Hobi', 'required');
		
		if( $this->form_validation->run() == FALSE) {
			
			$this->load->view('templates/header',$data);
			$this->load->view('hobi/edit',$data);
			$this->load->view('templates/footer');

		} else {
			
			$this->Hobi_model->edit($id);
			$this->session->set_flashdata('flash','Diedit');
			redirect('hobi');
			
		}
	}

	
}
