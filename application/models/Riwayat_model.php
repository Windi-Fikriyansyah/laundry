<?php
class Riwayat_model extends CI_Model{

    public function tampil_data(){
        return $this->db->get('v_pengambilan')->result_array();
    }
}