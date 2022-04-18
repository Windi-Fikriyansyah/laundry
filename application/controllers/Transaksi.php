<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct(){
        parent::__construct();
       
        $this->load->model(['Pelanggan_model','Transaksi_model','User_model','Paket_model']);
    }

    
    public function index(){
        $data['judul']="Transaksi";

        $tampil= $this->Pelanggan_model->no_otomatis();
        if(empty($tampil[0]['id_pelanggan']))
        {
            $no = "CS" . "001";
        } else{
            $a= "CS";
            $urut = $tampil[0]['id_pelanggan'];
            $no_1 = substr($urut, 2, 3 );
            $hasil = ((int) $no_1) + 1;
            $hasil_2 = sprintf('%03s', $hasil);
            $no = $a . $hasil_2;
        }
        $data['no_otomatis'] = $no;

        $id=$this->fungsi->user_login()->id_user;
        $data['keranjang']=$this->Transaksi_model->tampil_keranjang($id);
        $data['pelanggan']=$this->Pelanggan_model->tampil_data();
        $data['user']=$this->User_model->tampil_data();
        $data['paket']=$this->Paket_model->tampil_data();
        $data['total']=$this->Transaksi_model->tampil_total($id);

        $tampil= $this->Transaksi_model->no_otomatis();
        if (empty($tampil[0]['no_faktur']))
        {
            $no= date('Ymd') . "000001";
        }else{
            $a= date('Ymd');
            $urut = $tampil[0]['no_faktur'];
            $no_1 = substr($urut, 8, 6);
            $hasil = ((int) $no_1) + 1;
            $hasil_2 = sprintf('%06s', $hasil);
            $no = $a . $hasil_2;
        }
        $data['no_faktur'] = $no;

        $this->load->view('templates/header',$data);
        $this->load->view('transaksi/index',$data);
        $this->load->view('templates/footer');
    }

    public function simpan_pelanggan(){
        $this->Pelanggan_model->simpan();
        $pesan="Data Berhasil Disimpan";
            $url = base_url('transaksi');
            echo "<script>

                alert('$pesan');
                location='$url';
            </script>";
    }

    public function tambah_keranjang()
    {
        if($this->input->post('kd_paket')==''){
            $pesan="Data Paket Kosong.! silahkan diisi.";
            $url = base_url('transaksi');
            echo "<script>

                alert('$pesan');
                location='$url';
            </script>";
        }else{
        
        $this->Transaksi_model->simpan_keranjang();
        redirect('transaksi');
    }
    }
    public function hapus_keranjang($id)
    {
        $this->Transaksi_model->hapus_keranjang($id);
        redirect('transaksi');
    }

    public function batal()
    {
        $this->Transaksi_model->hapus_id();
        $pesan="Transaksi Penjualan Berhasil di Batalkan";
        $url = base_url('transaksi');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
    }

    public function simpan()
    {
        if($this->input->post('pelanggan') =='')
        {
        $pesan="Data Pelanggan` Masih Kosong...!! Silahkan dipilih";
        $url = base_url('transaksi');
        echo "<script>
            alert('$pesan');
            location='$url';
        </script>";

    }else{
        $result = array();
        foreach($_POST['no_faktur'] as $key => $val){
            $result[] = array(
                'no_faktur' => $_POST['no_faktur'][$key],
                'kd_paket' => $_POST['kd_paket'][$key],
                'jumlah' => $_POST['jumlah'][$key],
                'waktu' => $_POST['waktu'][$key],
                'harga' => $_POST['harga'][$key],
                'sub_total' => $_POST['subtotal'][$key],
            );
        }
        $this->db->insert_batch('tb_detail_transaksi',$result);
        $this->Transaksi_model->simpan_transaksi();

        $pesan ="Transaksi Berhasil Simpan";
        $url = base_url('transaksi');
        echo "<script>
            alert('$pesan');
            location='$url';
            </script>";
        $this->Transaksi_model->hapus_id();
    }
}
public function data_transaksi()
{
    $data['judul']="Data transaksi";
    $data['data_transaksi']=$this->Transaksi_model->tampil_data();
    $this->load->view('templates/header',$data);
    $this->load->view('transaksi/data_transaksi',$data);
    $this->load->view('templates/footer',$data);
}

public function hapus()
{
    $id = $this->input->post('kd');
    $this->Transaksi_model->hapus_transaksi($id);
    $this->Transaksi_model->hapus_detail($id);
    $pesan ="Data Berhasil di Hapus";
    $url = base_url('transaksi/data_transaksi');
    echo "<script>
        alert('$pesan');
        location='$url';
    </script>";
}

public function cetak($id)
{
  
    $data['cetak'] = $this->Transaksi_model->get_transaksi($id);
    $data['detail'] = $this->Transaksi_model->get_detail($id);
    
    $this->load->view('transaksi/cetak_transaksi',$data); 
  
}

public function wa()
{
    $tampil= $this->Transaksi_model->tampil();
    
    $id = $tampil[0]['no_faktur'];
    $cetak = $this->Transaksi_model->get_transaksi($id);
    $detail = $this->Transaksi_model->get_detail($id);
    
    $data = [
        'phone' => $cetak['no_telpn'], // Receivers phone
        'body' => 'Hai, '.$cetak['nama'].'! No faktur kamu '.$cetak['no_faktur'].' Paket '.$cetak['nama_paket'].
        '. Tanggal Ambil Laundry '.$cetak['tgl_ambil'], // Message
    ];
    $json = json_encode($data); // Encode data to JSON
    // URL for request POST /message
    $token = 'ox7f31xk1e1t7h8o';
    $instanceId = '313529';
    $url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
    // Make a POST request
    $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
        ]
    ]);
    // Send a request
    $result = file_get_contents($url, false, $options);
    $pesan ="Pesan Berhasil di kirim";
    $url = base_url('transaksi/data_transaksi');
    echo "<script>
        alert('$pesan');
        location='$url';
    </script>";
}



}