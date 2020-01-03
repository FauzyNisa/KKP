<?php

class Page extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Model_portofolio');
    }

    function index(){
        $data['data_portofolio']= $this->Model_portofolio->ambil_data('portofolio_t')->result();

        $this->load->view('main/header');
        $this->load->view('home',$data);
        $this->load->view('main/footer');
    }

    function contact(){
        $this->load->view('main/header');
        $this->load->view('contact');
        $this->load->view('main/footer');
    }

    function proses_kirim_pesan(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $isi = $this->input->post('isi');

        $data=array(
            'nama'=>$nama,
            'email'=>$subject,
            'subject'=>$subject,
            'isi'=>$isi
        );
        $this->Model_portofolio->input_data($data,'pesan_t');
        redirect('page/contact');
    }

    function data_portofolio(){
        $data['data_portofolio']= $this->Model_portofolio->ambil_data('portofolio_t')->result();

        $this->load->view('main/header');
        $this->load->view('port1',$data);
        $this->load->view('main/footer');
    }

    function tambah_portofolio(){
        $this->load->view('admin/add_Port');
    }

    function proses_tambah_portofolio(){
        $judul = $this->input->post('judul');
        $tag = $this->input->post('tag');
        $deskripsi = $this->input->post('deskripsi');
        $foto = $_FILES['foto']['nama'];

        if ($foto=''){}else{
            $config['upload_path']='./images';
            $config['allowed_types']='jpg|gif|png';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "upload gagal"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }

            $data=array(
                'judul'=>$judul,
                'tag'=>$tag,
                'deskripsi'=>$deskripsi,
                'foto'=>$foto
            );

            $this->Model_portofolio->input_data($data,'portofolio_t');
            redirect('page/data_portofolio');
        }        
        
    }
    
}
