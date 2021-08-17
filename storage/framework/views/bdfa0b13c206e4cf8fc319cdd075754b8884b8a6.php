<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>

	<table class='table table-bordered'>
		<thead>
			<tr class="text-center">
				<th>No</th>
                <th>Nama Kelas</th>
                <th>Jumlah Siswa</th>
                <th>Wali Kelas</th>
			</tr>
		</thead>
		<tbody>
            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($field->nama_kelas); ?></td>
                    <td><?php echo e($field->jumlah_siswa); ?></td>
                    <?php
                        $id = $field->wali_kelas;
                        $guru = DB::table('guru')->where('id_guru', $id)->get();
                    ?>
                    <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <td><?php echo e($get->nama_guru); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</body>
</html><?php /**PATH D:\code\uji-level\4\resources\views/kelas_pdf.blade.php ENDPATH**/ ?>