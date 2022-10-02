<html>
<head>
    <title>Form Input Matakuliah</title>
</head>
<body>
   <center>
      <form action="<?= base_url('matakuliah/cetak'); ?>"
method="post">
         <table>
             <tr>
                <th colspan="3">
                    Form Input Data Mata Kuliah
                </th>
             </tr>
             <tr>
                <td colspan="3">
                    <hr>
                </td>
             </tr>
             <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode">
                </td>
             </tr>
             <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
             </tr>
             <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks"
					    <option value="">Pilih SKS</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
      </form>
    </center>
</body>

</html
<?php
class Matakuliah extends CI_Controller
{
    public function index()
 {
       $this->load->view('view-form-matakuliah');
 }
 public function cetak()
 {
  data = [
	'kode' => $this->input->post('kode'),
	'nama' => $this->input->post('nama'),
	'sks' => $this->input->post('sks')
 ];
  $this->load->view('view-data-matakuliah', $data);
 }
}
html>
<head>
   <title>Tampil Data Matakuliah</title>
</head>

<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					Tampil Data Mata Kuliah
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Kode MTK</th>
				<th>:</th>
				<td>
					<?= $kode; ?>
				</td>
			</tr>
			<tr>
				<td>Nama MTK</td>
				<td>:</td>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<td>SKS</td>
				<td>:</td>
				<td>
					<?= $sks; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('matakuliah'); 
?>">Kembali</a>
				</td
			</table>
		</center>
</body>

</html>
