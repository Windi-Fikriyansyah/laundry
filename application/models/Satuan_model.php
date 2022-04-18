<?php
class Satuan_model extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_satuan')->result_array();
    }
    

    public function simpan()
    {
        $data=[
            "id_satuan" => $this->input->post('kd'),
            "nama_satuan" => $this->input->post('nama_satuan'),
           
            
        ];
        $this->db->insert('tb_satuan',$data);
    }

    public function hapus($id)
    {
        $this->db->where('id_satuan',$id);
        $this->db->delete('tb_satuan');
    }
    public function get_id($id)
    {
        return $this->db->get_where('tb_satuan',['id_satuan'=>$id])->row_array();
    }

    public function ubah()
    {
        $data=[
             
            "nama_satuan" => $this->input->post('nama_satuan'),
           
            
        ];
        $this->db->where('id_satuan', $this->input->post('id'));
        $this->db->update('tb_satuan',$data);
    }
}