<?php
class Paket_model extends CI_Model{

    public function tampil_data(){
        return $this->db->get('v_paket')->result_array();
    }

    public function no_otomatis()
    {
        $this->db->select('kd_paket');
        $this->db->order_by('kd_paket DESC');
        return $this->db->get('tb_paket')->result_array();
    }

    public function simpan()
    {
        $data=[
            "kd_paket" => $this->input->post('kd_paket'),
            "nama_paket" => $this->input->post('nama_paket'),
            "harga" => $this->input->post('harga'),
            "keterangan" => $this->input->post('keterangan'),
            "id_satuan" => $this->input->post('nama_satuan'),
            "id_waktu" => $this->input->post('nama')
        ];
        $this->db->insert('tb_paket',$data);
    }

    public function hapus($id)
    {
        $this->db->where('kd_paket',$id);
        $this->db->delete('tb_paket');

    }

    public function get_id($id)
    {
        return $this->db->get_where('v_paket',['kd_paket'=>$id])->row_array();
    }

    public function ubah(){
        $data=[
            "kd_paket" => $this->input->post('kd_paket'),
            "nama_paket" => $this->input->post('nama_paket'),
            "harga" => $this->input->post('harga'),
            "keterangan" => $this->input->post('keterangan'),
            "id_satuan" => $this->input->post('nama_satuan'),
            "id_waktu" => $this->input->post('nama')
        ];
        $this->db->where('kd_paket', $this->input->post('kd_paket'));
        $this->db->update('tb_paket',$data);
    }
    public function get($id = null)

{
    $this->db->select('*');
    $this->db->from('tb_paket');
    if($id != null)
    {
        $this->db->where('id_paket',$id);
    }
    return $this->db->get();
}
}