<?php
class Lap_pengeluaran_model extends CI_Model{

    public function total_perhari(){
        $tgl=date('Ymd');
        $this->db->select('SUM(total) as total');
        return $this->db->get_where('tb_pengeluaran',['tanggal'=>$tgl])->row()->total;
    }

    public function total_perbulan(){
        $tgl=date('m');
        $this->db->select('SUM(total) as total');
        $this->db->where('MONTH(tanggal)',$tgl);
        return $this->db->get('tb_pengeluaran')->row()->total;
    }

    public function total($tgl_awal, $tgl_akhir){
        $this->db->select('SUM(total) as total');
        $this->db->where('tanggal >=', $tgl_awal);
        $this->db->where('tanggal <=', $tgl_akhir);
        return $this->db->get('tb_pengeluaran')->row()->total;
    }

    public function laporan_pengeluaran($tgl_mulai, $tgl_ambil)
    {
        $this->db->where('tanggal >=', $tgl_mulai);
        $this->db->where('tanggal <=', $tgl_ambil);
        return $this->db->get('v_pengeluaran')->result_array();
    }

    public function laporan_detail_pengeluaran($id)
    {
        $this->db->where('no_faktur', $id);
        return $this->db->get('v_pengeluaran')->result_array();
    }

    public function tampil_paket(){
        return $this->db->get('v_paket')->num_rows();
    }

    public function tampil_user(){
        return $this->db->get('tb_user')->num_rows();
    }
}