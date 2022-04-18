<?php
class Pesan_model extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_pesan')->result_array();
    }
    

    public function simpan()
    {
        $data=[
            "id" => $this->input->post('kd'),
            "judul" => $this->input->post('judul'),
            "isi" => $this->input->post('isi'),
            "status" => $this->input->post('status')
            
        ];
        $this->db->insert('tb_pesan',$data);
    }

    public function hapus($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tb_pesan');
    }
    public function get_id($id)
    {
        return $this->db->get_where('tb_pesan',['id'=>$id])->row_array();
    }

    public function ubah()
    {
        $data=[
             
            "id" => $this->input->post('id'),
            "judul" => $this->input->post('judul'),
            "isi" => $this->input->post('isi'),
            "status" => $this->input->post('status')
            
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pesan',$data);
    }
}