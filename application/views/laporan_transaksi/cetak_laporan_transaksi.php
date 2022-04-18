<!DOCTYPE html>
<html>
<head>
<title>Faktur Pembelian</title>

</head>
<body style='font-family:tahoma; font-size:8pt;' onload="window.print()">
<div style="text-align:justify; margin-top: 20px">
    <img src="<?php echo base_url(); ?>assets/img/download.PNG" style="width: 87px; height: 90px; float:left; margin:0 8px 4px 0;"/>
    <p style="text-align: center; line-height: 20px">
      <span style="font-size: 15px">LAPORAN TRANSAKSI PEMASUKAN</span><br/>
      <span style="font-size: 20px;"><strong>LAUNDRY</strong></span><br/>
      <span style="font-size: 12px">Jln. Sulawesi Gg.Keluarga</span><br/>
      <span style="font-size: 12px">Email : berkahabadi958@gmail.com</span>
      <hr>
    </p>
  </div>
<center>
<table style='width:100%; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='100%' align='left' style='padding-right:80px; vertical-align:top'>
<span style='font-size:12pt'><b>Tanggal : <?= date('d F Y', strtotime($tgl_awal)); ?> s.d <?= date('d F Y', strtotime($tgl_akhir)); ?></b></span></br>
</td>
</table>
<table cellspacing='0' style='width:100%; font-size:10pt; font-family:calibri;  border-collapse: collapse;' border='1'>
</br>
<tr align='center'>
  <th>Tanggal</th>
  <th>No Faktur</th>
  <th>Petugas</th>
  <th>Nama Pelanggan</th>
  <th>Kode Paket</th>
  <th>Nama Paket</th>
  <th>Harga</th>
  <th>Jumlah</th>
  <th>Subtotal</th>
</tr>
<?php foreach ($lap_transaksi as $lp): ?>
<tr>
  <td><?= $lp['tgl_ambil']; ?></td>
  <td><?= $lp['no_faktur']; ?></td>
  <td><?= $lp['nama_user']; ?></td>
  <td><?= $lp['nama']; ?></td>
  <td><?= $lp['kd_paket']; ?></td>
  <td><?= $lp['nama_paket']; ?></td>
  <td><?= $lp['harga']; ?></td>
  <td><?= $lp['jumlah']; ?></td>
  <td>Rp. <?= number_format($lp['sub_total'], 0, ',','.'); ?></td>
<?php endforeach; ?>

<tr>
<td colspan = '8'><div style='text-align:left; font-size:14pt'><b>Total Pembelian Barang</b></div></td>
<td style='text-align:left; font-size:14pt'><b>Rp. <?= number_format($total, 2, ',','.'); ?></b></td>
</tr>
</table>

<table style='width:100%; font-size:7pt;' cellspacing='2'>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<tr>
<td style='border:0px solid black; padding:5px; text-align:left; width:80%'></td>
<td align='center'>Pontianak, <?= date('d F Y'); ?></br>Penanggung Jawab,
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<u>..................</u>
</td>
</tr>
</table>
</center>
</body>
</html>