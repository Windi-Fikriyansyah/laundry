<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct(){
        parent::__construct();

       
        $this->load->model('Pelanggan_model');
    }
    public function index(){
    $data['judul']="Pelanggan";

        $data['pelanggan']=$this->Pelanggan_model->tampil_data();
        

        $this->load->view('templates/header',$data);
        $this->load->view('pelanggan/index');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul']="Pelanggan";

        $tampil= $this->Pelanggan_model->no_otomatis();
        if(empty($tampil[0]['id_pelanggan']))
        {
            $no = "CS" . "001";
        } else{
            $a= "CS";
            $urut = $tampil[0]['id_pelanggan'];
            $no_1 = substr($urut, 2, 3 );
            $hasil = ((int) $no_1) + 1;
            $hasil_2 = sprintf('%03s', $hasil);
            $no = $a . $hasil_2;
        }
        $data['no_otomatis'] = $no;
        
        $this->form_validation->set_rules('nama','nama','required|trim');
        $this->form_validation->set_rules('alamat','alamat','required|trim');
        $this->form_validation->set_rules('no_telpn','no_telpn','required|trim|numeric');
       


        if ($this->form_validation->run() == FALSE){
            
        $this->load->view('templates/header',$data);
        $this->load->view('pelanggan/tambah');
        $this->load->view('templates/footer');

        }else{
            $this->Pelanggan_model->simpan();
            redirect('pelanggan');
        }

    }

    

    public function hapus($id)
    {
       
        $this->Pelanggan_model->hapus($id);
        $pesan="Data berhasil dihapus";
        $url = base_url('pelanggan');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
    }

    public function ubah($id)
    {
        $data['judul']="Pelanggan";
        $data['ubah_pelanggan'] = $this->Pelanggan_model->get_id($id);
        
        $this->form_validation->set_rules('nama','nama','required|trim');
        $this->form_validation->set_rules('alamat','alamat','required|trim');
        $this->form_validation->set_rules('no_telpn','no telpn','required|trim|numeric');
        
        if($this->form_validation->run() == FALSE)
        {

        $this->load->view('templates/header',$data);
        $this->load->view('pelanggan/ubah',$data);
        $this->load->view('templates/footer');
        }else{
            $this->Pelanggan_model->ubah();
            $pesan="Data berhasil diupdate";
        $url = base_url('pelanggan');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
        }
    }

    
    }
