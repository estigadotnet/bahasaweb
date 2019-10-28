<div class="header">
	<div class="title">
		<h3>Edit Pengguna</h3>
	</div>
	<div class="action">
		<button type="submit" form="edit-pengguna" class="btn btn-default">Simpan</button>
	</div>
</div>
<form action="<?php echo site_url("pengguna/edit/simpan/".$pengguna->id); ?>" method="post" id="edit-pengguna">
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama" value="<?php echo $pengguna->nama; ?>">
	</div>
	<div class="form-group">
		<label for="jenis_kelamin">Jenis Kelamin</label>
		<label><input type="radio" name="jenis_kelamin" value="Lelaki" <?php echo ($pengguna->jenis_kelamin == 'Lelaki' ? 'checked' : ''); ?>> Lelaki</label>
		<label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($pengguna->jenis_kelamin == 'Perempuan' ? 'checked' : ''); ?>> Perempuan</label>
	</div>
	<div class="form-group">
		<label for="tanggal_lahir">Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo date('Y-m-d', strtotime($pengguna->tanggal_lahir)); ?>">
	</div>
	<div class="form-group">
		<label for="umur">Umur</label>
		<input type="number" name="umur" id="umur" value="<?php echo $pengguna->umur; ?>">
	</div>
</form>