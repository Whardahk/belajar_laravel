
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('judul_halaman', 'Halaman Home'); ?>
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
 
	<p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel\resources\views/blog/home.blade.php ENDPATH**/ ?>