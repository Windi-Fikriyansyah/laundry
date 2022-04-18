<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waktu extends CI_Controller {

    public function __construct(){
        parent::__construct();

       
        $this->load->model('Waktu_model');
    }
    public function index(){
    $data['judul']="Waktu";

        $data['waktu']=$this->Waktu_model->tampil_data();
        

        $this->load->view('templates/header',$data);
        $this->load->view('waktu/index');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul']="Waktu";
        
        $this->form_validation->set_rules('nama','nama','required|trim');
        


        if ($this->form_validation->run() == FALSE){
            
        $this->load->view('templates/header',$data);
        $this->load->view('waktu/tambah');
        $this->load->view('templates/footer');

        }else{
            $this->Waktu_model->simpan();
            redirect('waktu');
        }

    }

    public function hapus($id)
    {
        
        $this->Waktu_model->hapus($id);
        $pesan="Data berhasil dihapus";
        $url = base_url('waktu');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
    }

    public function ubah($id)
    {
        $data['judul']="waktu";
        $data['ubah_waktu'] = $this->Waktu_model->get_id($id);
        
        $this->form_validation->set_rules('nama','nama','required|trim');
        
        
        if($this->form_validation->run() == FALSE)
        {

        $this->load->view('templates/header',$data);
        $this->load->view('waktu/ubah',$data);
        $this->load->view('templates/footer');
        }else{
            $this->Waktu_model->ubah();
            $pesan="Data berhasil diupdate";
        $url = base_url('waktu');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
        }
    }
    }
