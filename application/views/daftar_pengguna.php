<?php if ($this->session->flashdata("tambah")): ?>
	<?php if ($this->session->flashdata("tambah") == true): ?>
		<div class="alert alert-success">Berhasil menambahkan pengguna baru</div>
	<?php elseif ($this->session->flashdata("tambah") == false): ?>
		<div class="alert alert-danger">Gagal menambahkan pengguna baru</div>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->session->flashdata("edit")): ?>
	<?php if ($this->session->flashdata("edit") == true): ?>
		<div class="alert alert-success">Berhasil update data pengguna</div>
	<?php elseif ($this->session->flashdata("edit") == false): ?>
		<div class="alert alert-danger">Gagal update data pengguna</div>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->session->flashdata("hapus")): ?>
	<?php if ($this->session->flashdata("hapus") == true): ?>
		<div class="alert alert-success">Berhasil hapus data pengguna</div>
	<?php elseif ($this->session->flashdata("hapus") == false): ?>
		<div class="alert alert-danger">Gagal hapus data pengguna</div>
	<?php endif; ?>
<?php endif; ?>

<div class="header">
	<div class="title">
		<h3>Daftar Pengguna</h3>
	</div>
	<div class="action">
		<a href="<?php echo site_url('pengguna/tambah');?>" class="btn btn-default">Tambah</a>
	</div>
</div>

<table>
	<thead>
		<tr>
			<th style="width: 7%; text-align: center;">No.</th>
			<th style="width: 30%;">Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th style="text-align: center;">Umur</th>
			<th style="width: 20%; text-align: center;">Tindakan</th>
		</tr>
	</thead>
	<tbody>
		<?php if($semua_pengguna->num_rows() > 0): ?>
			<?php $index = 1; ?>
			<?php foreach ($semua_pengguna->result()  as $pengguna) :?>
				<tr>
					<td style="text-align: center;"><?php echo $index++; ?></td>
					<td><?php echo $pengguna->nama; ?></td>
					<td><?php echo $pengguna->jenis_kelamin; ?></td>
					<td><?php echo date("j F Y", strtotime($pengguna->tanggal_lahir)); ?></td>
					<td style="text-align: center;"><?php echo $pengguna->umur; ?></td>
					<td style="text-align: center;">
						<a href="<?php echo site_url('pengguna/edit/'.$pengguna->id);?>" class="btn btn-default">Edit</a>
						<a href="<?php echo site_url('pengguna/hapus/'.$pengguna->id);?>" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="6" style="text-align: center;">Data tidak tersedia</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>