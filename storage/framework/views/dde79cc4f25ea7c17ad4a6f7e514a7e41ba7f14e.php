<!-- Menghubungkan dengan view template master -->

 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('judul_halaman', 'Halaman Kontak'); ?>
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
 
	<p>Ini Adalah Halaman Kontak</p>
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>malasngoding@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0896-0676-7404</td>
		</tr>
	</table>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel\resources\views/blog/kontak.blade.php ENDPATH**/ ?>