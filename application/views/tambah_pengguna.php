<div class="header">
	<div class="title">
		<h3>Tambah Pengguna</h3>
	</div>
	<div class="action">
		<button type="submit" form="tambah-pengguna" class="btn btn-default">Simpan</button>
	</div>
</div>

<form action="<?php echo site_url('pengguna/tambah/simpan');?>" method="post" id="tambah-pengguna">
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama">
	</div>
	<div class="form-group">
		<label for="jenis_kelamin">Jenis Kelamin</label>
		<label><input type="radio" name="jenis_kelamin" value="Lelaki"> Lelaki</label>
		<label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
	</div>
	<div class="form-group">
		<label for="tanggal_lahir">Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir" id="tanggal_lahir">
	</div>
	<div class="form-group">
		<label for="umur">Umur</label>
		<input type="number" name="umur" id="umur">
	</div>
</form>