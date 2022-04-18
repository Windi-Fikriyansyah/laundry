<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

    public function __construct(){
        parent::__construct();

       
        $this->load->model('Pesan_model');
    }
    public function index(){
    $data['judul']="Pesan";

        $data['pesan']=$this->Pesan_model->tampil_data();
        

        $this->load->view('templates/header',$data);
        $this->load->view('pesan/index');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul']="Pesan";
        $this->form_validation->set_rules('judul','judul','required|trim');
        $this->form_validation->set_rules('isi','isi','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');
       


        if ($this->form_validation->run() == FALSE){
            
        $this->load->view('templates/header',$data);
        $this->load->view('pesan/tambah');
        $this->load->view('templates/footer');

        }else{
            $this->Pesan_model->simpan();
            redirect('pesan');
        }

    }

    public function hapus($id)
    {
        
        $this->Pesan_model->hapus($id);
        $pesan="Data berhasil dihapus";
        $url = base_url('Pesan');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
    }

    public function ubah($id)
    {
        $data['judul']="Pesan";
        $data['ubah_pesan'] = $this->Pesan_model->get_id($id);
        
        $this->form_validation->set_rules('judul','judul','required|trim');
        $this->form_validation->set_rules('isi','isi','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');
        
        if($this->form_validation->run() == FALSE)
        {

        $this->load->view('templates/header',$data);
        $this->load->view('Pesan/ubah',$data);
        $this->load->view('templates/footer');
        }else{
            $this->Pesan_model->ubah();
            $pesan="Data berhasil diupdate";
        $url = base_url('pesan');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
        }
    }
    }
