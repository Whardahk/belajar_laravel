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
						<h3>Edit Data Dosen</h3>
					</div>
					<div class="col-sm-2">
						<a class="btn btn-primary" href="/dosen"> Back</a>
					</div>
				</div>
				<br>

				<?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<form action="/dosen/update" method="post">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="id" value="<?php echo e($p->id); ?>"> <br/>
					<div class="row mb-3">
						<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="text-align: right;">Nama</label>
						<div class="col-sm-8">
							<input type="text" class="form-control form-control-sm" name="nama" value="<?php echo e($p->nama); ?>" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="text-align: right;">Umur</label>
						<div class="col-sm-4">
							<input type="number" class="form-control form-control-sm" name="umur" value="<?php echo e($p->umur); ?>" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="text-align: right;">Alamat</label>
						<div class="col-sm-8">
							<textarea class="form-control form-control-sm" name="alamat" required><?php echo e($p->alamat); ?></textarea>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-10"></div>
						<div class="col-sm-2">
							<button type="submit" class="mb-3 btn btn-primary">Simpan Data</button>
						</div>
					</div>
				</form>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\belajar_laravel\resources\views/dosen/edit.blade.php ENDPATH**/ ?>