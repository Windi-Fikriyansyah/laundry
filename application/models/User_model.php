<?php
class User_model extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_user')->result_array();
    }

    public function simpan($pict)
    {
        $data=[
           
            "nama_user" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "no_telpn" => $this->input->post('no_telpn'),
            "username" => $this->input->post('username'),
            "password" => sha1($this->input->post('pass1')),
            "bagian" => $this->input->post('bagian'),
            "foto" => $pict
        ];
        $this->db->insert('tb_user',$data);
    }

    public function hapus($id)
    {
        $this->db->where('id_user',$id);
        $this->db->delete('tb_user');
    }
    public function get_id($id)
    {
        return $this->db->get_where('tb_user',['id_user'=>$id])->row_array();
    }

    public function usernamecek($username, $id)
    {
    $this->db->where('username =', $username);
    $this->db->where('id_user !=', $id);
    $cek = $this->db->get('tb_user')->num_rows();
    return $cek;
}
    

    public function ubah($pict)
    {
        $pass = $this->input->post('pass1');

        $data=[
            "nama_user" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "no_telpn" => $this->input->post('no_telpn'),
            "username" => $this->input->post('user_name'), 
            "bagian" => $this->input->post('bagian'),
            "foto" => $pict
        ];

        if($pass != null) { //jika input password tidak kosong maka yang disimpan password baru
            $data=["password" => sha1($this->input->post('pass1'))];
        }
        $this->db->where('id_user', $this->input->post('id'));
        $this->db->update('tb_user',$data);
    }
    
    public function login($post){
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->where('username',$post['user_name']);
    $this->db->where('password',sha1($post['pass']));
    return $this->db->get();
}

        public function get($id = null)
//membuat 1 fungsi untuk menampilkan semua data
//dan menampilkan data per id/satu data
{
    $this->db->select('*');
    $this->db->from('tb_user');
    if($id != null)
    {
        $this->db->where('id_user',$id);
    }
    return $this->db->get();
}
}