<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();

        
        $this->load->model('User_model');
    }
    public function index(){
    $data['judul']="User";

        $data['user']=$this->User_model->tampil_data();

        $this->load->view('templates/header',$data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul']="User";

        $this->form_validation->set_rules('nama','nama','required|trim');
        $this->form_validation->set_rules('alamat','alamat','required|trim');
        $this->form_validation->set_rules('no_telpn','no_telpn','required|trim|numeric');
        $this->form_validation->set_rules('username','Username',
        'required|trim|is_unique[tb_user.username]');
        $this->form_validation->set_rules('pass1','Password',
        'min_length[5]|matches[pass2]',[
            'min_length' => "Password minimal 5 digit",
            'matches' => "Password tidak sesuai"
        ]);
        $this->form_validation->set_rules('pass2','Konfirmasi Password',
        'matches[pass1]',
        ['matches' => "Konfirmasi Password tidak sesuai"]);
        $this->form_validation->set_rules('bagian','bagian','required|trim');

        if ($this->form_validation->run() == FALSE){
            
        $this->load->view('templates/header',$data);
        $this->load->view('user/tambah',$data);
        $this->load->view('templates/footer');
    }else{
        $upload_foto = $_FILES['foto']['name'];
        if($upload_foto != null){
            $config['upload_path'] ='./assets/foto/'; //tempat ubah file foto
            $config['allowed_types'] = 'jpg|png|jpeg'; //mengatur type foto
            $config['max_size'] = '5048'; //besar kecil ukrn file(5mb)
            $config['remove_space'] = TRUE;
            $config['overwrite'] = TRUE;

            $this->upload->initialize($config);

            if($this->upload->do_upload('foto')){
                $pict = $this->upload->data('file_name');
                $this->User_model->simpan($pict);
                $pesan="Data berhasil Disimpan";
                $url = base_url('user');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
                </script>";
            } else{
                $pesan="Gagal ubah. file yang anda upload salah!!!";
                $url = base_url('user');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
                </script>";
            }
        } else{
            $pict = 'default.jpg';
            $this->User_model->simpan($pict);
            $pesan="Data berhasil Disimpan";
            $url = base_url('user');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
            </script>";
        }
        
    }
}

    public function hapus($id){
           
            $this->_deletefile($id);
            $this->User_model->hapus($id);

            $pesan="Data berhasil Hapus";
            $url = base_url('user');
            echo "<script> 
                alert('$pesan');
                location='$url';
            </script>";
        }

        public function _deletefile($id){
            $user = $this->User_model->get_id($id);
            if ($user['foto'] != "default.jpeg") {
                $filename = explode(".", $user['foto'])[0];
                return array_map('unlink', glob(FCPATH . "laundry/assets/dist/foto/$filename.*"));
            }
        }

        public function ubah($id = '')
        {
            $data['judul']="User";
            $data['ubah_user'] = $this->User_model->get_id($id);

            $this->form_validation->set_rules('nama','nama','required|trim');
            $this->form_validation->set_rules('alamat','alamat','required|trim');
            $this->form_validation->set_rules('no_telpn','no_telpn','required|trim|numeric');
            $this->form_validation->set_rules('user_name','Username',
            'required|trim');
            $this->form_validation->set_rules('pass1','Password',
            'min_length[5]|matches[pass2]',[
                'min_length' => "Password minimal 5 digit",
                'matches' => "Password tidak sesuai"
            ]);
            $this->form_validation->set_rules('pass2','Konfirmasi Password',
            'matches[pass1]',
            ['matches' => "Konfirmasi Password tidak sesuai"]);
            

        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('templates/header',$data);
            $this->load->view('user/ubah',$data);
            $this->load->view('templates/footer');
        }else{
            $username = $this->input->post('user_name');
            $id=$this->input->post('id');
            $cek=$this->User_model->usernamecek($username, $id);
            if($cek == 0){
            $upload_foto = $_FILES['foto']['name'];
        if($upload_foto != null){
            $config['upload_path'] ='./assets/foto/'; //tempat ubah file foto
            $config['allowed_types'] = 'jpg|png|jpeg'; //mengatur type foto
            $config['max_size'] = '5048'; //besar kecil ukrn file(5mb)
            $config['remove_space'] = TRUE;
            $config['overwrite'] = TRUE;

            $this->upload->initialize($config);

            if($this->upload->do_upload('foto')){

                $id = $this->input->post('id'); //menghapus gambar didalam folder foto
                $this->_deletefile($id);

                $pict = $this->upload->data('file_name');
                $this->User_model->ubah($pict);
                $pesan="Data berhasil Diupdate";
                $url = base_url('user');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
                </script>";
            } else{
                $pesan="Gagal update. file yang anda upload salah!!!";
                $url = base_url('user');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
                </script>";
            }
        } else{
            $pict = $this->input->post('image');
            $this->User_model->ubah($pict);
            $pesan="Data berhasil Diupdate";
            $url = base_url('user');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
            </script>";
        } 
    } else {
            $pesan = "Gagal Update. username Sudah ada";
            $url = base_url('user');
            echo "<script>
            alert('$pesan');
            location='$url';
            </script>";
        }
    }
        }
}