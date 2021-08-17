<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th {
			font-size: 15pt;
            text-indent: 2%;
		}
	</style>
<?php $__currentLoopData = $kompetensidasar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $idm = $field->mapel;
        $mapel = DB::table('mapel')->where('id_mapel', $idm)->get();
        $idg = $field->guru;
        $guru = DB::table('guru')->where('id_guru', $idg)->get();
    ?>
    <h2 class="text-center text-uppercase my-5">Silabus Mata Pelajaran</h2>
    <b class="text-uppercase">Nama Sekolah</b> : SMK TARUNA BHAKTI <br>
    <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <b class="text-uppercase">Mata Pelajaran</b> : <?php echo e($get->nama_mapel); ?> <br>
        <b class="text-uppercase">Kelas</b> : <?php echo e($get->matapel_kelas); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <b class="text-uppercase">Guru</b> : <?php echo e($get->nama_guru); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <table class="table table-bordered mt-5" width="100%" cellspacing="0">
        <thead class="text-center bg-light">
            <tr class="text-uppercase">
                <th rowspan="2">KD ke-</th>
                <th colspan="2">Kompetensi Dasar</th>
                <th rowspan="2">Materi Pokok</th>
                <th rowspan="2">Pembelajaran / Langkah Saintifik</th>
                <th rowspan="2">Penilaian</th>
                <th rowspan="2">Alokasi Waktu</th>
                <th rowspan="2">Sumber Belajar</th>
            </tr>
            <tr>
                <td>Pengetahuan</td>
                <td>Keterampilan</td>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td><?php echo e($field->kd_ke); ?></td>
                <td><?php echo e($field->kd_pengetahuan); ?></td>
                <td><?php echo e($field->kd_keterampilan); ?></td>
                <td><?php echo e($field->materi_pokok); ?></td>
                <td><?php echo e($field->pembelajaran); ?></td>
                <td><?php echo e($field->penilaian); ?></td>
                <td><?php echo e($field->alokasi_waktu); ?></td>
                <td><?php echo e($field->sumber_belajar); ?></td>  
            </tr>
        </tbody>
    </table>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH D:\code\uji-level\4\resources\views/kd_pdf.blade.php ENDPATH**/ ?>