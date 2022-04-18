<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

    public function __construct(){
        parent::__construct();

       
        $this->load->model('Satuan_model');
    }
    public function index(){
    $data['judul']="Satuan";

        $data['satuan']=$this->Satuan_model->tampil_data();
        

        $this->load->view('templates/header',$data);
        $this->load->view('satuan/index');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul']="Satuan";

        
        
        $this->form_validation->set_rules('nama_satuan','nama','required|trim');
       
       


        if ($this->form_validation->run() == FALSE){
            
        $this->load->view('templates/header',$data);
        $this->load->view('satuan/tambah');
        $this->load->view('templates/footer');

        }else{
            $this->Satuan_model->simpan();
            redirect('satuan');
        }

    }

    public function hapus($id)
    {
       
        $this->Satuan_model->hapus($id);
        $pesan="Data berhasil dihapus";
        $url = base_url('satuan');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
    }

    public function ubah($id)
    {
        $data['judul']="Satuan";
        $data['ubah_satuan'] = $this->Satuan_model->get_id($id);
        
        $this->form_validation->set_rules('nama_satuan','nama','required|trim');
        
        
        if($this->form_validation->run() == FALSE)
        {

        $this->load->view('templates/header',$data);
        $this->load->view('satuan/ubah',$data);
        $this->load->view('templates/footer');
        }else{
            $this->Satuan_model->ubah();
            $pesan="Data berhasil diupdate";
        $url = base_url('satuan');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
        }
    }
    }
