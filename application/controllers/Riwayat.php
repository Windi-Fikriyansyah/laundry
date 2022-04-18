<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

    public function __construct(){
        parent::__construct();

       
        $this->load->model(['Transaksi_model','Pelanggan_model','User_model']);
    }
    public function index(){
    $data['judul']="riwayat";

        $data['riwayat']=$this->Transaksi_model->tampil_pengambilan();
        

        $this->load->view('templates/header',$data);
        $this->load->view('riwayat/index');
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->Transaksi_model->update();
        $pesan ="Pembayaran Berhasil";
        $url = base_url('riwayat');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
    }
    public function hapus($id)
    {
       
        $this->Transaksi_model->hapus($id);
        $pesan="Data berhasil dihapus";
        $url = base_url('riwayat');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
    }
}
