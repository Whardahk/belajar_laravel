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
 
				<h3>Data Dosen</h3>
 
				<br>
				<div class="form-group">
					<a class="btn btn-primary" href="/dosen/add_form"> + Tambah Pegawai Baru</a>					
				</div>
				<br>
				<table id="example" class="table table-bordered">
					<thead>
						<tr>
							<th align="center">Nama</th>
							<th align="center">Umur</th>
							<th align="center">Alamat</th>
							<th align="center">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($p->nama); ?></td>
							<td><?php echo e($p->umur); ?></td>
							<td><?php echo e($p->alamat); ?></td>
							<td>
								<center>
								<a class="btn btn-info btn-sm" href="/dosen/edit/<?php echo e($p->id); ?>" >Edit</a>
								|
								<a class="btn btn-danger btn-sm" href="/dosen/delete/<?php echo e($p->id); ?>">Hapus</a>
								</center>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
 
				
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script><?php /**PATH C:\xampp\htdocs\belajar_laravel\resources\views/dosen/index.blade.php ENDPATH**/ ?>