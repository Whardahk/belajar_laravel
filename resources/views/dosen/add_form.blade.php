<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css rel="stylesheet">
	<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				
 
				<h2 class="text-center">Latihan CRUD</h2>

				<div class="row mb-3">
					<div class="col-sm-10">
						<h3>Insert Data Dosen</h3>
					</div>
					<div class="col-sm-2">
						<a class="btn btn-primary" href="/dosen"> Back</a>
					</div>
				</div>
				<br>

 
				<form action="/dosen/store" method="post">
					{{ csrf_field() }}
					<div class="row mb-3">
						<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="text-align: right;">Nama</label>
						<div class="col-sm-8">
							<input type="text" class="form-control form-control-sm" name="nama" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="text-align: right;">Umur</label>
						<div class="col-sm-4">
							<input type="number" class="form-control form-control-sm" name="umur" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="text-align: right;">Alamat</label>
						<div class="col-sm-8">
							<textarea class="form-control form-control-sm" name="alamat" required></textarea>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-10"></div>
						<div class="col-sm-2">
							<button type="submit" class="mb-3 btn btn-primary">Simpan Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
 
</body>
</html>