<?php
defined ('BASEPATH') OR exit();

class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('Model_portofolio','m');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    function index(){
        $data['title']="ADMIN";
        $this->load->view('admin/partial/head');
        $this->load->view('admin/data_Port',$data);
        $this->load->view('admin/partial/script');
    }
    
    function ambil_portofolio(){
        $data_portofolio = $this->m->ambil_data('portofolio_t')->result();
        echo json_encode($data_portofolio);
    }

    function tambah_portofolio(){
        $judul=$this->input->post('judul');
        $tag=$this->input->post('tag');
        $deskripsi=$this->input->post('deskripsi');
        $foto=$this->input->post('foto');

        if($judul==''){
            $result['pesan']="Harap isi judul";
        }elseif($tag==''){
            $result['pesan']="Harap isi tag";
        }elseif($deskripsi==''){
            $result['pesan']="Harap isi deskripsi";
        }elseif($foto==''){
            $result['pesan']="Harap isi foto";
        }else{
            $result['pesan']="";

            $data=array(
                'judul'=>$judul,
                'tag'=>$tag,
                'deskripsi'=>$deskripsi,
                'foto'=>$foto
            );
            $this->m->input_data($data,'portofolio_t');
        }
        echo json_encode($result);
    }

    function ubah_portofolio(){
        $id=$this->input->post('id_port');
        $where=array('id_port'=>$id);
        $data_ubah = $this->m->ubah_data('portofolio_t',$where)->result();

        echo json_encode($data_ubah);
    }

    function proses_ubah(){
        $id_port=$this->input->post('id_port');
        $judul=$this->input->post('judul');
        $tag=$this->input->post('tag');
        $deskripsi=$this->input->post('deskripsi');
        $foto=$this->input->post('foto');

        if($judul==''){
            $result['pesan']="Harap isi judul";
        }elseif($tag==''){
            $result['pesan']="Harap isi tag";
        }elseif($deskripsi==''){
            $result['pesan']="Harap isi deskripsi";
        }elseif($foto==''){
            $result['pesan']="Harap isi foto";
        }else{
            $result['pesan']="";
            $where=array('id_port'=>$id_port);
            $data=array(
                'judul'=>$judul,
                'tag'=>$tag,
                'deskripsi'=>$deskripsi,
                'foto'=>$foto
            );
            $this->m->proses_ubah_data($where,$data,'portofolio_t');
        }
        echo json_encode($result);
    }

    function hapus_portofolio(){
        $id_port=$this->input->post('id_port');
        $where=array('id_port'=>$id_port);
        $this->m->hapus_data($where,'portofolio_t');
    }
}
