<?php
class Lap_transaksi_model extends CI_Model{

    public function total_perhari(){
        $tgl=date('Ymd');
        $this->db->select('SUM(total) as total');
        return $this->db->get_where('tb_transaksi',['tgl_ambil'=>$tgl])->row()->total;
    }

    public function total_perbulan(){
        $tgl=date('m');
        $this->db->select('SUM(total) as total');
        $this->db->where('MONTH(tgl_ambil)',$tgl);
        return $this->db->get('tb_transaksi')->row()->total;
    }

    public function total($tgl_awal, $tgl_akhir){
        $this->db->select('SUM(total) as total');
        $this->db->where('tgl_ambil >=', $tgl_awal);
        $this->db->where('tgl_ambil <=', $tgl_akhir);
        return $this->db->get('tb_transaksi')->row()->total;
    }

    public function laporan_transaksi($tgl_mulai, $tgl_ambil)
    {
        $this->db->where('tgl_ambil >=', $tgl_mulai);
        $this->db->where('tgl_ambil <=', $tgl_ambil);
        return $this->db->get('v_transaksi')->result_array();
    }

    public function laporan_detail_transaksi($id)
    {
        $this->db->where('no_faktur', $id);
        return $this->db->get('v_detail_transaksi')->result_array();
    }

    public function tampil_paket(){
        return $this->db->get('v_paket')->num_rows();
    }

    public function tampil_pelanggan(){
        return $this->db->get('tb_pelanggan')->num_rows();
    }
}