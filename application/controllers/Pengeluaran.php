<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

    public function __construct(){ 
        parent::__construct();

        $this->load->model(['Pengeluaran_model','User_model']);

    }

    public function index(){


        $data['judul']="Pengeluaran";

        $data['pengeluaran']=$this->Pengeluaran_model->tampil_data();


        $this->load->view('templates/header',$data);
        $this->load->view('pengeluaran/index',$data);
        $this->load->view('templates/footer');
}

    public function tambah()
{
    $data['judul']="pengeluaran";
    $data['nama_user']=$this->User_model->tampil_data();
    
    $tampil= $this->Pengeluaran_model->no_otomatis();
    if(empty($tampil[0]['kd_pengeluaran']))
    {
        $no = "PL" . "001";
    } else{
        $a= "PL";
        $urut = $tampil[0]['kd_pengeluaran'];
        $no_1 = substr($urut, 2, 3 );
        $hasil = ((int) $no_1) + 1;
        $hasil_2 = sprintf('%03s', $hasil);
        $no = $a . $hasil_2;
    }
    $data['no_otomatis'] = $no;
    

    

    $this->form_validation->set_rules('nama_pl','Nama Pengeluaran','required|trim');
    $this->form_validation->set_rules('tanggal','tanggal','required|trim');
    $this->form_validation->set_rules('keterangan','keterangan','required|trim');
    $this->form_validation->set_rules('total','total','required|trim|numeric');
    $this->form_validation->set_rules('nama_user','nama_user','required|trim');
    
    if ($this->form_validation->run() == FALSE)
    {   
        $this->load->view('templates/header',$data);
        $this->load->view('pengeluaran/tambah',$data);
        $this->load->view('templates/footer');
    }else{
        $this->Pengeluaran_model->simpan();
        redirect('pengeluaran');
    }
}

    public function hapus($id)
        {
            
            $this->Pengeluaran_model->hapus($id);

            $pesan="Data berhasil Hapus";
            $url = base_url('pengeluaran');
            echo "<script> 
                alert('$pesan');
                location='$url';
            </script>";
        }

        public function ubah($id)
        {
            $data['judul']="Pengeluaran";
            $data['ubah_pengeluaran'] = $this->Pengeluaran_model->get_id($id);
            $data['nama_user']=$this->User_model->tampil_data();

            $this->form_validation->set_rules('nama_pl','Nama pl','required|trim');
            $this->form_validation->set_rules('tanggal','tanggal','required|trim');
            $this->form_validation->set_rules('keterangan','keterangan','required|trim');
            $this->form_validation->set_rules('total','total','required|trim|numeric');
            $this->form_validation->set_rules('nama_user','nama_user','required|trim');
            

        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('templates/header',$data);
            $this->load->view('pengeluaran/ubah',$data);
            $this->load->view('templates/footer');
        }else{
            $this->Pengeluaran_model->ubah();
            $pesan="Data berhasil di Update";
            $url = base_url('pengeluaran');
            echo "<script> 
                alert('$pesan');
                location='$url';
            </script>";
        }
    }
}
