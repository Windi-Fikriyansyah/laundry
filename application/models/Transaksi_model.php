<?php
class Transaksi_model extends CI_Model{

    public function no_otomatis()
    {
        $this->db->select('no_faktur');
        $this->db->order_by('no_faktur DESC');
        return $this->db->get('tb_transaksi')->result_array();
    }

    public function tampil()
    {
        $this->db->select('no_faktur');
        $this->db->order_by('no_faktur DESC');
        return $this->db->get('v_transaksi')->result_array();
    }

    public function simpan_keranjang()
    {
        $harga=$this->input->post('harga');
        $jumlah=$this->input->post('berat');
        $subtotal = $harga * $jumlah;
        $data=[
            "kd_paket"=> $this->input->post('kd_paket'),
            "nama_paket"=> $this->input->post('nama_paket'),
            "waktu"=> $this->input->post('waktu'),
            "jumlah"=> $this->input->post('berat'),
            "harga"=> $this->input->post('harga'),
            "subtotal"=> $subtotal,
            "id_user"=> $this->input->post('id_user'),
        ];
        $this->db->insert('tb_keranjang',$data);
    }

    public function tampil_keranjang($id)
    {
        return $this->db->get_where('tb_keranjang',['id_user'=>$id])->result_array();
    }

    public function hapus_keranjang($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tb_keranjang');
    }

    public function tampil_total($id){
        $this->db->select('SUM(subtotal) as total');
        return $this->db->get_where('tb_keranjang',['id_user=>$id'])->row()->total;
    }

    public function hapus_id(){
        $id=$this->fungsi->user_login()->id_user;
        $this->db->where('id_user',$id);
        $this->db->delete('tb_keranjang');
    }
    public function simpan_transaksi()
    {
        $transaksi=0;
        $byr = $this->input->post('bayar');
        $total = $this->input->post('total');
        $kembalian = $byr - $total;
        $data=[
            "no_faktur" => $this->input->post('nofaktur'),
            "tgl_masuk" => $this->input->post('tgl_masuk'),
            "tgl_ambil" => $this->input->post('tgl_ambil'),
            "id_user" => $this->input->post('id_user'),
            "id_pelanggan" => $this->input->post('pelanggan'),
            "bayar" => $this->input->post('bayar'),
            "kembalian" => $kembalian,
            "total" => $this->input->post('total'),
        ];
        $this->db->insert('tb_transaksi',$data);
    }

    public function tampil_data(){
        
        return $this->db->get('v_transaksi')->result_array();
    }

    public function tampil_pengambilan(){
        
        return $this->db->get('v_pengambilan')->result_array();
    }
    public function hapus($id)
    {
        $this->db->where('no_faktur',$id);
        $this->db->delete('tb_transaksi');
    }

    public function hapus_transaksi($id)
    {
        $this->db->where('no_faktur',$id);
        $this->db->delete('tb_transaksi');
    }

    public function hapus_detail($id)
    {
        $this->db->where('no_faktur',$id);
        $this->db->delete('tb_detail_transaksi');
    }

    public function get_transaksi($id)
    {
        return $this->db->get_where('v_transaksi',['no_faktur'=>$id])->row_array();
    }

    public function get_detail($id)
    {
        return $this->db->get_where('v_detail_transaksi',['no_faktur'=>$id])->result_array();
    }
    public function get($id = null)

{
    $this->db->select('*');
    $this->db->from('tb_detail_transaksi');
    if($id != null)
    {
        $this->db->where('id_detail_transaksi',$id);
    }
    return $this->db->get();
}

    public function update()
    {
        $byr=$this->input->post('bayar');
        $ttl=$this->input->post('total');
        $kembalian=$byr-$ttl;
        $data=[
            "bayar" => $this->input->post('bayar'),
            "kembalian" => $kembalian
        ];
        $this->db->where('no_faktur', $this->input->post('id'));
        $this->db->update('tb_transaksi',$data);
    }
}