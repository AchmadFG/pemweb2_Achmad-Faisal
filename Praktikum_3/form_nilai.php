<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Array Siswa</title>
</head>
<body class="bg-light">
	<div class="container-fluid">
		<div class="col-12 col-md-6 m-auto">
			<h3 class="text-center">Form Nilai Siswa</h3>
			<hr class="featurette-divider mx-auto">
			<form method="POST" action="nilai_siswa.php">
				<div class="form-group row">
					<label for="fname" class="col-4 col-form-label text-end">Nama Mahasiswa</label>
					<div class="col-8">
						<div class="input-group mb-3">
							<input id="fname" name="name" type="text" class="form-control" value="" placeholder="Nama Mahasiswa" aria-label="Nama Mahasiswa" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="matkul" class="col-4 col-form-label text-end">Mata Kuliah</label>
					<div class="col-8">
						<div class="input-group mb-3">
							<select class="form-select" aria-label="Mata Kuliah" name="matkul">
								<option selected value="" class="text-muted">Pilih Mata Kuliah</option>
								<option value="Dasar-dasar Pemrograman">Dasar-dasar Pemrograman</option>
                                <option value="Basis Data I">Basis Data I</option>
								<option value="Pemrograman Web 1">Pemrograman Web 1</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="uts" class="col-4 col-form-label text-end">Nilai UTS</label>
					<div class="col-4">
						<div class="input-group mb-3">
							<input id="uts" name="nilai_uts" type="number" class="form-control" value="" placeholder="Nilai UTS" aria-label="Nilai UTS" aria-describedby="basic-addon2">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="uas" class="col-4 col-form-label text-end">Nilai UAS</label>
					<div class="col-4">
						<div class="input-group mb-3">
							<input id="uas" name="nilai_uas" type="number" class="form-control" value="" placeholder="Nilai UAS" aria-label="Nilai UAS" aria-describedby="basic-addon3">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="tugas" class="col-4 col-form-label text-end">Nilai Tugas/Praktikum</label>
					<div class="col-4">
						<div class="input-group mb-3">
							<input id="tugas" name="nilai_tugas" type="number" class="form-control" value="" placeholder="Nilai Tugas" aria-label="Nilai Tugas" aria-describedby="basic-addon4">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-4 col-8">
						<input type="submit" class="btn btn-primary" value="Simpan" name="submit">
					</div>
				</div>
			</form>
			<hr class="featurette-divider mx-auto">
		</div>
	</div>
	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>