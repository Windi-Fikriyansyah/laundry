<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

    public function __construct(){ 
        parent::__construct();

        $this->load->model(['Paket_model','Satuan_model','Waktu_model']);

    }

    public function index(){


        $data['judul']="paket";

        $data['paket']=$this->Paket_model->tampil_data();


        $this->load->view('templates/header',$data);
        $this->load->view('paket/index',$data);
        $this->load->view('templates/footer');
}

    public function tambah()
{
    $data['judul']="paket";

    $data['nama_satuan']=$this->Satuan_model->tampil_data();
    $data['nama']=$this->Waktu_model->tampil_data();

    $tampil= $this->Paket_model->no_otomatis();
    if (empty($tampil[0]['kd_paket']))
    {
        $no = "PKT"."0001";
    } else {
        $a= "PKT";
        $urut = $tampil[0]['kd_paket'];
        $no_1 = substr($urut, 3, 4);
        $hasil = ((int) $no_1) + 1;
        $hasil_2 = sprintf('%04s', $hasil);
        $no = $a . $hasil_2;
    }
    $data['no_otomatis'] = $no;

    $this->form_validation->set_rules('nama_paket','Nama Paket','required|trim');
    $this->form_validation->set_rules('harga','Harga Barang','required|trim|numeric');
    $this->form_validation->set_rules('keterangan','keterangan','required|trim');
    $this->form_validation->set_rules('nama_satuan','nama_satuan','required|trim');
    $this->form_validation->set_rules('nama','nama','required|trim');
    
    if ($this->form_validation->run() == FALSE)
    {   
        $this->load->view('templates/header',$data);
        $this->load->view('paket/tambah',$data);
        $this->load->view('templates/footer');
    }else{
        $this->Paket_model->simpan();
        redirect('paket');
    }
}

    public function hapus($id)
        {
            $this->Paket_model->hapus($id);

            $pesan="Data berhasil Hapus";
            $url = base_url('paket');
            echo "<script> 
                alert('$pesan');
                location='$url';
            </script>";
        }

        public function ubah($id)
        {
            $data['judul']="Paket";
            $data['ubah_paket'] = $this->Paket_model->get_id($id);
            $data['nama_satuan']=$this->Satuan_model->tampil_data();
            $data['nama']=$this->Waktu_model->tampil_data();

            $this->form_validation->set_rules('nama_paket','Nama Paket','required|trim');
            $this->form_validation->set_rules('harga','Harga Paket','required|trim|numeric');
            $this->form_validation->set_rules('keterangan','keterangan','required|trim');
            $this->form_validation->set_rules('nama_satuan','nama_satuan','required|trim');
            $this->form_validation->set_rules('nama','nama','required|trim');
            

        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('templates/header',$data);
            $this->load->view('paket/ubah',$data);
            $this->load->view('templates/footer');
        }else{
            $this->Paket_model->ubah();
            $pesan="Data berhasil di Update";
            $url = base_url('paket');
            echo "<script> 
                alert('$pesan');
                location='$url';
            </script>";
        }
    }
}
