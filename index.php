<?php

require 'config/function.php';

?>

<?php include('template/top.php') ?>

<div class="container col-7" style="margin-top: 2%">
	<div class="responsive-font-example">
		<div class="text text-center">
			<div class="title">
				<h1><strong>Biro Administrasi Perencanaan dan Sistem Informasi [BAPSI] UG</strong></h1>
				<p>Ruang D23, Kampus Depok. Ext 234 Jalan Margonda Raya 100 Pondok Cina Depok 16424 <br> E-mail: mediacenter@gunadarma.ac.id</p>
				<hr>
				<h5>F-01 | FORMULIR PENDAFTARAN FASILITAS ACCOUNT E-MAIL & STAFFSITE</h5>
				<hr>
			</div>
		</div>
	</div><br>

	<form action="" method="post" enctype="multipart/form-data">
		<input name="acc_status" hidden>
		<h5><strong>DATA PEMOHON</strong></h5>
		<div class="mb-3">
			<label for="nama" class="form-label">Nama Lengkap :</label>
			<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required="" oninvalid="this.setCustomValidity('Lengkapi Nama Lengkap')" oninput="setCustomValidity('')">
		</div>
		<div class="mb-3">
			<label for="ttl" class="form-label">Tempat Tanggal Lahir :</label>
			<input type="date" name="ttl" id="ttl" class="form-control text-muted" required="" oninvalid="this.setCustomValidity('Lengkapi Tempat Tanggal Lahir')" oninput="setCustomValidity('')">
		</div>
		<div class="mb-3">
			<label for="lembaga" class="form-label">Bagian / Lembaga / Fakultas :</label><br>
			<select name="lembaga" id="lembaga" class="form-control text-muted" required="" oninvalid="this.setCustomValidity('Lengkapi Bagian / Lembaga / Fakultas')" oninput="setCustomValidity('')" onchange="if(this.options[this.selectedIndex].value=='customOption'){toggleField(this,this.nextSibling); this.selectedIndex='0';}">
				<option hidden disabled>Select Option ▼</option>
				<option value="FIKTI">FIKTI</option>
				<option value="EKONOMI">EKONOMI</option>
				<option value="FTI">FTI</option>
				<option value="FTSP">FTSP</option>
				<option value="KEDOKTERAN">KEDOKTERAN</option>
				<option value="SASTRA">SASTRA</option>
				<option value="KOMUNIKASI">KOMUNIKASI</option>
				<option value="customOption">Lainnya... </option>
				<input name="lembaga" class="form-control" style="display:none;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">
			</select>
		</div>
		<div class="mb-3">
			<label for="jabatan" class="form-label">Jabatan :</label>
			<input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan saat ini">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email :</label>
			<input type="email" name="email" id="email" class="form-control" placeholder="Email aktif" required="" oninvalid="this.setCustomValidity('Lengkapi Email')" oninput="setCustomValidity('')">
		</div>
		<div class="mb-3">
			<label for="nopeg" class="form-label">Nomor Pegawai :</label>
			<input type="text" name="nopeg" id="nopeg" class="form-control" placeholder="Nomor Pegawai">
		</div>
		<div class="mb-3">
			<label for="mengajar" class="form-label">Mulai Mengajar :</label>
			<input type="text" name="mengajar" id="mengajar" class="form-control text-muted" placeholder="ex : PTA 2022/2023" required="" oninvalid="this.setCustomValidity('Lengkapi Mulai Mengajar')" oninput="setCustomValidity('')">
		</div>
		<div class="mb-3">
			<label for="nohp" class="form-label">Nomor Hp:</label>
			<input type="number" name="nohp" id="nohp" class="form-control" placeholder="ex : 081X-XXXX-XXXX" required="" oninvalid="this.setCustomValidity('Lengkapi Nomor HP')" oninput="setCustomValidity('')">
		</div>
		<div class="form-control">
			<label for="kampus">Lokasi / Ruang:</label><br>
			Kampus : <input type="text" name="kampus" id="kampus" class="form-control" placeholder="ex : Kampus D">
			Gedung : <input type="text" name="gedung" class="form-control" placeholder="ex : Gedung 3">
			Lantai : <input type="text" name="lantai" class="form-control" placeholder="ex : Lantai 2">
		</div><br>
		<div class="form-control">
			<label>Status:</label><br>
			<input type="radio" name="status" id="sttetap" value="Staff Tetap" required>
			<label for="sttetap">Staff Tetap</label>
			<input type="radio" name="status" id="sthonorer" value="Staff Honorer" required>
			<label for="sthonorer">Staff Honorer</label>
			<input type="radio" name="status" id="stluarbiasa" value="Staff Luar Biasa" required=>
			<label for="stluarbiasa">Staff Luar Biasa</label>
		</div><br>

		<hr>
		<h5><strong>TIPE AKUN</strong></h5>
		<div class="form-control">
			<input type="radio" name="tipeacc" id="accbaru" value="Account Baru" required>
			<label for="accbaru">Akun Baru</label>
			<input type="radio" name="tipeacc" id="accsem" value="Account Sementara" required>
			<label for="accsem" style="margin-bottom: 1%;">Akun Sementara</label><br>
		</div><br>

		<hr>
		<h5><strong>NAMA AKUN & PASSWORD</strong></h5>
		<div class="mb-3">
			<label for="pil1" class="form-label">Pilihan 1 :</label>
			<input type="text" name="pil1" id="pil1" class="form-control" placeholder="Username pilihan pertama" required="" oninvalid="this.setCustomValidity('Lengkapi Username Pilihan Pertama')" oninput="setCustomValidity('')">
		</div>
		<div class="mb-3">
			<label for="pil2" class="form-label">Pilihan 2 :</label>
			<input type="text" name="pil2" id="pil2" class="form-control" placeholder="Username pilihan kedua" required="" oninvalid="this.setCustomValidity('Lengkapi Username Pilihan Kedua')" oninput="setCustomValidity('')">
		</div>
		<div class="mb-3" hidden>
			<label for="altern" class="form-label">Alternatif (diisi oleh admin) :</label>
			<input type="text" name="altern" id="altern" class="form-control">
		</div>
		<div class="mb-3">
			<label for="pass" class="form-label">Password Awal :</label>
			<input type="text" name="pass" id="pass" class="form-control" placeholder="Password awal" required="" oninvalid="this.setCustomValidity('Lengkapi Password Awal')" oninput="setCustomValidity('')">
		</div>

		<hr>
		<h5><strong>KARTU IDENTITAS</strong></h5>
		<div class="mb-3">
			<label for="ktp" class="form-label">Upload KTP</label>
			<input type="file" name="ktp" id="ktp" class="form-control" required="" oninvalid="this.setCustomValidity('Lengkapi KTP')" oninput="setCustomValidity('')">
			<div class="form-text">Ekstensi jpg/jpeg/png. MaxSize 2mb.</div>
		</div>
		<hr>

		<ol class="list-group list-group-numbered">
			<h5>KETENTUAN</h5>
			<li class="list-group-item">Nama account harus menunjukkan identitas asli.</li>
			<li class="list-group-item">Nama account harus minimum 3 karakter, maksimum 20 karakter.</li>
			<li class="list-group-item">Nama account sebaiknya menggunakan huruf (A-Z) atau (a-z) atau angka (0-9). Karakter pertama berupa huruf dan tanpa spasi.</li>
			<li class="list-group-item">Password minimal 6 karakter dan maksimum 20 karakter, dan dapat diubah kemudian.</li>
			<li class="list-group-item">Bila nama account tidak sesuai dengan di atas, maka system administrator berhak menentukan alternatif untuk nama account.</li>
			<li class="list-group-item">Nama account dan Password untuk E-mail sama dengan Nama account dan Password untuk Staffsite</li>
		</ol><br>

		<h5>PERSETUJUAN</h5>
		<div class="form-control">
			<input type="checkbox" required="" oninvalid="this.setCustomValidity('Centang Untuk Menyetujui')" oninput="setCustomValidity('')"> Dengan ini saya menyatakan bahwa data di atas adalah benar, dan saya mengerti serta setuju akan diberikan hak untuk pemanfaatan fasilitas akses account e-mail Universitas Gunadarma, dan bersedia untuk memenuhi peraturan dan ketentuan yang telah ditetapkan.</input>
		</div><br>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 1%">Submit</button>
		</div>
	</form>
</div>

<?php include('template/bot.php') ?>

<?php

if (isset($_POST['submit'])) {
	if (isi_data($_POST) > 0) {
		echo "<script>Swal.fire('Data Berhasil Ditambah!','','success')</script>";
	} else {
		echo "<script>Swal.fire('Data Gagal Ditambah!','','error')</script>";
	}
}

?>