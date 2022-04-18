<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pengeluaran extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        cek_not_login();
        $this->load->model('Lap_pengeluaran_model');
    }

    public function index()
    {
        $data['judul']="Laporan pengeluaran";
        $this->load->view('templates/header',$data);
        $this->load->view('laporan_pengeluaran/index');
        $this->load->view('templates/footer');
    }

    public function lap_pengeluaran()
    {
        $data['judul']="Laporan pengeluaran";
        
        $tgl_mulai = str_replace('/', '-', $this->input->post('tgl_mulai'));
		$tgl_ambil = str_replace('/', '-', $this->input->post('tgl_ambil'));

        $data['tgl_awal'] = $tgl_mulai;
        $data['tgl_akhir'] = $tgl_ambil;
        $data['lap_pengeluaran'] = $this->Lap_pengeluaran_model->Laporan_pengeluaran($tgl_mulai, $tgl_ambil);
        $data['total'] = $this->Lap_pengeluaran_model->total($tgl_mulai, $tgl_ambil);
        
        $this->load->view('templates/header',$data);
        $this->load->view('laporan_pengeluaran/lap_pengeluaran',$data);
        $this->load->view('templates/footer');
    }

    public function cetak_laporan_pengeluaran()
    {
        $data['judul']="Laporan pengeluaran";

        if (!$this->uri->segment(3) && !$this->uri->segment(4)) {
			$tgl_mulai = str_replace('/', '-', $this->input->post('tgl_mulai'));
			$tgl_ambil = str_replace('/', '-', $this->input->post('tgl_ambil'));
		} else {
			$tgl_mulai = $this->uri->segment(3);
			$tgl_ambil = $this->uri->segment(4);
		}
		$tgl_awal = str_replace('-', '/', $tgl_mulai);
		$tgl_akhir = str_replace('-', '/', $tgl_ambil);

        $data['tgl_awal'] = $tgl_awal;
        $data['tgl_akhir'] = $tgl_akhir;
        $data['lap_pengeluaran'] = $this->Lap_pengeluaran_model->Laporan_pengeluaran($tgl_mulai, $tgl_ambil);
        $data['total'] = $this->Lap_pengeluaran_model->total($tgl_awal, $tgl_akhir);
        
        $this->load->view('laporan_pengeluaran/cetak_laporan_pengeluaran',$data);
    }

   

}