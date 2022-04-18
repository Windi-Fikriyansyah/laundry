<?php
//untuk menampilkan data user berdasarkan id session
Class Fungsi{
    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('User_model');
        $id = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->User_model->get($id)->row();
        return $user_data;
    }
    public function count_user() 
    {
        $this->ci->load->model('User_model');
        return $this->ci->User_model->get()->num_rows();
    }
    public function count_pelanggan() 
    {
        $this->ci->load->model('Pelanggan_model');
        return $this->ci->Pelanggan_model->get()->num_rows();
    }
    public function count_paket() 
    {
        $this->ci->load->model('Paket_model');
        return $this->ci->Paket_model->get()->num_rows();
    }
    public function count_transaksi() 
    {
        $this->ci->load->model('Transaksi_model');
        return $this->ci->Transaksi_model->get()->num_rows();
    }
    
}