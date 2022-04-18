<?php
class Pengeluaran_model extends CI_Model{

    public function tampil_data(){
        return $this->db->get('v_pengeluaran')->result_array();
    }

    public function no_otomatis()
    {
        $this->db->select('kd_pengeluaran');
        $this->db->order_by('kd_pengeluaran DESC');
        return $this->db->get('tb_pengeluaran')->result_array();
    }

    public function simpan()
    {
        $data=[
            "kd_pengeluaran" => $this->input->post('kd'),
            "nama_pl" => $this->input->post('nama_pl'),
            "tanggal" => $this->input->post('tanggal'),
            "keterangan" => $this->input->post('keterangan'),
            "total" => $this->input->post('total'),
            "id_user" => $this->input->post('nama_user')
        ];
        $this->db->insert('tb_pengeluaran',$data);
    }

    public function hapus($id)
    {
        $this->db->where('kd_pengeluaran',$id);
        $this->db->delete('tb_pengeluaran');

    }

    public function get_id($id)
    {
        return $this->db->get_where('v_pengeluaran',['kd_pengeluaran'=>$id])->row_array();
    }

    public function ubah(){
        $data=[
           
            "nama_pl" => $this->input->post('nama_pl'),
            "tanggal" => $this->input->post('tanggal'),
            "keterangan" => $this->input->post('keterangan'),
            "total" => $this->input->post('total'),
            "id_user" => $this->input->post('nama_user')
        ];
        $this->db->where('kd_pengeluaran', $this->input->post('id'));
        $this->db->update('tb_pengeluaran',$data);
    }
}