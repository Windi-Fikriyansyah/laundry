<?php
class Waktu_model extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_waktu')->result_array();
    }
    

    public function simpan()
    {
        $data=[
            "id_waktu" => $this->input->post('kd'),
            "nama" => $this->input->post('nama'),
           
            
        ];
        $this->db->insert('tb_waktu',$data);
    }

    public function hapus($id)
    {
        $this->db->where('id_waktu',$id);
        $this->db->delete('tb_waktu');
    }
    public function get_id($id)
    {
        return $this->db->get_where('tb_waktu',['id_waktu'=>$id])->row_array();
    }

    public function ubah()
    {
        $data=[
             
            "nama" => $this->input->post('nama'),
           
            
        ];
        $this->db->where('id_waktu', $this->input->post('id'));
        $this->db->update('tb_waktu',$data);
    }
}