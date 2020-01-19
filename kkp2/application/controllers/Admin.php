<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Model_portofolio','m');
	}

	function index(){
		$this->load->view('admin/dashboard');
	}

	function data_portofolio(){
		$data['portofolio'] = $this->m->ambil_data('portofolio_t')->result();
		$keyword = $this->input->post('sort');
		if($keyword){
			if($keyword != 'Normal'){
				$data['portofolio'] = $this->m->sort_data('portofolio_t',$keyword)->result();
			}
		}		
		$this->load->view('admin/data_port', $data);
	}

	function tambah_portofolio(){
		$this->load->view('admin/tambah_port');
	}

	function proses_tambah(){
		// set rules(name, as, rulesnya)
		$this->form_validation->set_rules('judul', 'Judul', 'required', 
		 	array('required' => 'Judul harus diisi!')
		);
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric', 
			array('required' => 'Harga harus diisi!',
				  'numeric' => 'Isi dengan angka!'
			)
		);

		if($this->form_validation->run() == FALSE){
			$this->load->view('admin/tambah_port');
		}else{
			// post sesuai name
			$judul = $this->input->post('judul');
			$tag = $this->input->post('tag');
			$deskripsi = $this->input->post('deskripsi');
			$foto = $_FILES['foto']['name'];
			$harga = $this->input->post('harga');

			if($foto==''){
				$foto='no-image.jpg';
			}else{
				$config['upload_path']='./images';
				$config['allowed_types']='jpg|gif|png';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('foto')){
					echo "gagal upload"; die();
				}else{
					$foto=$this->upload->data('file_name');
				}

			}
			$data=array(
				'judul'=> $judul,
				'tag'=> $tag,
				'deskripsi'=> $deskripsi,
				'foto'=> $foto,
				'harga'=> $harga
			);
			$this->m->input_data($data,'portofolio_t');
			// session (nama bebas, yang ditampilin)
			$this->session->set_flashdata('tambah', 'ditambahkan');
			redirect('admin/data_portofolio');
		}

	}

	function edit_portofolio($id){
		$where=array('id_port'=>$id);
		$data['portofolio'] = $this->m->ambil_id($where,'portofolio_t')->result();
		$data['tag'] = ['Tag 1', 'Tag 2'];
		$this->load->view('admin/edit_port',$data);
	}

	function proses_edit(){
		// set rules(name, as, rulesnya)
		$this->form_validation->set_rules('judul', 'Judul', 'required', 
		 	array('required' => 'Judul harus diisi!')
		);
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric', 
			array('required' => 'Harga harus diisi!',
				  'numeric' => 'Isi dengan angka!'
			)
		);
		
		if($this->form_validation->run() == FALSE){
			$id = $this->input->post('id_port');
			$where=array('id_port'=>$id);
			$data['portofolio'] = $this->m->ambil_id($where,'portofolio_t')->result();
			$data['tag'] = ['Tag 1', 'Tag 2'];
			$this->load->view('admin/edit_port',$data);
		}else{
			// di post sama kek name di view
			$id = $this->input->post('id_port');
			$judul = $this->input->post('judul');
			$tag = $this->input->post('tag');
			$deskripsi = $this->input->post('deskripsi');
			$foto = $_FILES['foto']['name'];
			$harga = $this->input->post('harga');

			if($foto){
				$config['upload_path']='./images';
				$config['allowed_types']='jpg|gif|png';

				$this->load->library('upload',$config);
				if($this->upload->do_upload('foto')){
					$foto_baru=$this->upload->data('file_name');
					print($foto_baru);
					$this->db->set('foto', $foto_baru);
				}else{
					echo "gagal upload"; die();
				}

			}
			
			$data=array(
				'judul'=> $judul,
				'tag'=> $tag,
				'deskripsi'=> $deskripsi,
				'foto'=> $foto_baru,
				'harga'=> $harga
			);
			$where = array('id_port'=>$id);

			$this->m->update_data($where,$data,'portofolio_t');
			$this->session->set_flashdata('ubah', 'diubah');
			redirect('admin/data_portofolio');
			
		}

		
	}

	function hapus_portofolio($id){
		$where=array('id_port'=>$id);
		$this->m->hapus_data($where,'portofolio_t');
		// session (nama bebas, yang ditampilin)
		$this->session->set_flashdata('hapus', 'dihapus');
		redirect('admin/data_portofolio');
	}
}