<div class="container body-admin">
<h2>Pesan</h2>
<div class="box-body table-responsive">
<table id="tabel" class="table table-bordered table-striped tab-content" cellpadding="4" cellspacing="2" style="background-color:#CF9; border:solid 1px #C6F; #C6F; border-radius:0px;">
<thead>
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Komentar</th>
			<th>Tanggal di buat</th>
			<th>Opsi</th>
		</tr>
</thead>
<tbody>
<?php
$no = 1;
$signature = new signature;
$key = $this->config->item('encryption_key');
 foreach ($pesan as $data_pesan) {
?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $data_pesan->nama; ?></td>
			<td><?php echo $data_pesan->email; ?></td>
			<td><?php echo $data_pesan->komentar; ?></td>
			<td><?php echo $data_pesan->created_at; ?></td>
			<td><a href="<?php echo base_url().'admin/hapus_pesan/'.$data_pesan->id . '/'. $signature->getSignature($data_pesan->id, $key) ?>" class="btn-sm btn-danger" onclick="return confirm('Yakin  ingin menghapus data ini ?')" ><i class="glyphicon glyphicon-trash"></i></a></td>
		</tr>
	<?php
	$no++;
}
	?>
</tbody>	
<tfoot></tfoot>
</table>
</div>
</div>