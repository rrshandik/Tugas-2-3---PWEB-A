<?php 
	include 'config/config.php'
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> Detail Data - <?= $mahasiswa['nama'] ?></title>

		<link rel="stylesheet" href="./public/css/style.css" />
	</head>
	<body>
    <div class="form">
		<form action="?action=update&id=<?= $mahasiswa['id']; ?>" class="form" method="post">
            <h2>Detail Data - <?= $mahasiswa['nama'] ?></h2>
			<a class="button1" style="margin-bottom: 20px;" href="<?= $base_url ?>/">Kembali</a>

			<p class="field required">
				<label class="label required" for="nama">Nama Lengkap</label>
				<input class="text-input" id="nama" name="nama"  type="text" value="<?= $mahasiswa['nama']; ?>" readonly/>
			</p>
			<p class="field required half">
				<label class="label" for="nim">NIM</label>
				<input class="text-input" id="nim" name="nim" type="text" value="<?= $mahasiswa['nim']; ?>" readonly/>
			</p>
			<p class="field required half">
				<label class="label" for="email">E-mail</label>
				<input class="text-input" id="email" name="email" type="email" value="<?= $mahasiswa['email']; ?>" readonly/>
			</p>
			<p class="field required">
				<label class="label required" for="alamat">Alamat</label>
				<textarea class="text-input" id="alamat" name="alamat" readonly><?= $mahasiswa['alamat']; ?></textarea>
			</p>
		</form>
	</div>
	</body>
</html>
