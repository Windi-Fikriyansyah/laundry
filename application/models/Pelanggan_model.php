<?php
class Pelanggan_model extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_pelanggan')->result_array();
    }
    public function no_otomatis()
    {
        $this->db->select('id_pelanggan');
        $this->db->order_by('id_pelanggan DESC');
        return $this->db->get('tb_pelanggan')->result_array();
    }

    public function simpan()
    {
        $data=[
            "id_pelanggan" => $this->input->post('kd'),
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "no_telpn" => $this->input->post('no_telpn'),
            
        ];
        $this->db->insert('tb_pelanggan',$data);
    }

    public function hapus($id)
    {
        $this->db->where('id_pelanggan',$id);
        $this->db->delete('tb_pelanggan');
    }
    public function get_id($id)
    {
        return $this->db->get_where('tb_pelanggan',['id_pelanggan'=>$id])->row_array();
    }

    public function ubah()
    {
        $data=[
             
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "no_telpn" => $this->input->post('no_telpn')
            
        ];
        $this->db->where('id_pelanggan', $this->input->post('id'));
        $this->db->update('tb_pelanggan',$data);
    }
    public function get($id = null)
//membuat 1 fungsi untuk menampilkan semua data
//dan menampilkan data per id/satu data
{
    $this->db->select('*');
    $this->db->from('tb_pelanggan');
    if($id != null)
    {
        $this->db->where('id_pelanggan',$id);
    }
    return $this->db->get();
}
}
