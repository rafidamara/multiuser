<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
    * { font-size: 9pt; }
		table tr td,
		table tr th {
            text-indent: 2%;
		}
        .kepsek, .guru {
            margin-top: 70px;
            margin-bottom: 70px;
        }
        .kepsek { float: left; margin-left: 70px;}
        .guru { float: right; margin-right: 70px;}
    </style>
</head>
<body>
    <?php
        $rpp = DB::table('rpp')->get();
        $kegiatan = DB::table('kegiatan')->get();
    ?>
<?php $__currentLoopData = $kompetensidasar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $rpp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2 class="text-center">RENCANA PELAKSANAAN PEMBELAJARAN (RPP)</h2>
    <table class="table table-bordered mt-5" width="100%" cellspacing="0">
        <tr>
            <?php
                $id = $kd->mapel;
                $mapel = DB::table('mapel')->where('id_mapel', $id)->get();
                                        
            ?>
            <td class="bg-light">Kelas</td>
            <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td colspan="2"><?php echo e($get->matapel_kelas); ?></td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
        <tr>
            <td class="bg-light">Alokasi Waktu</td>
            <td colspan="2"><?php echo e($kd->alokasi_waktu); ?> JP</td>
        </tr>
        <tr>
            <td rowspan="4">
                <b>Tujuan Pembelajaran : </b> <br>
                <?php echo e($rp->tujuan_pembelajaran); ?>

            </td>
            <td class="text-center bg-light"><b>KD pengetahuan</b></td>
            <td class="text-center bg-light"><b>KD Keterampilan</b> </td>
        </tr>
        <tr>
            <td><?php echo e($kd->kd_pengetahuan); ?></td>
            <td><?php echo e($kd->kd_keterampilan); ?></td>
        </tr>
        <tr>
            <td class="text-center bg-light"><b>IPK KD Pengetahuan</b> </td>
            <td class="text-center bg-light"><b>IPK KD Keterampilan</b> </td>
        </tr>
        <tr>
            <td><?php echo e($rp->ipk_pengetahuan); ?></td>
            <td><?php echo e($rp->ipk_keterampilan); ?></td>
        </tr>
        <tr>
            <td><b>Materi Pembelajaran</b></td>
            <td colspan="2"><?php echo e($rp->materi_pembelajaran); ?></td>
        </tr>
        <tr>
            <td>
                <p><b>Model:</b></p>
                <p><?php echo e($kg->model); ?></p>
                <p><b>Metode:</b></p>
                <p><?php echo e($kg->metode); ?></p> 
                <p><b>Pendekatan:</b></p>
                <p><?php echo e($kg->pendekatan); ?></p>
            </td>
            <td rowspan="2" colspan="2">
                <p>
                    <b>Langkah Pembelajaran:</b>
                </p>
                <ul>
                    <li>
                        <b>Kegiatan Pendahuluan Awal (15 menit) </b>
                    </li>
                    <ol class="ml-2">
                        <li>Mengucapkan salam dan membaca doa bersama untuk mengawali pelajaran.</li>
                        <li>Mengecek kehadiran siswa dan memberi motivasi belajar.</li>
                        <li>Menjelaskan tujuan pembelajaran dan kompetensi dasar yang akan dicapai.</li>
                    </ol>
                </ul>
                <ul>
                    <li>
                        <b>Kegiatan Inti</b>
                    </li>
                </ul>
                <div style="margin-left: 30px">
                    <?php echo e($kg->kegiatan_inti); ?>

                </div>
                <ul>
                    <li>
                        <b>Penutup (15 menit) </b>
                    </li>
                    <ol style="list-style-type:lower-alpha">
                        <li>Siswa bersama guru menyimpulkan pembelajaran.</li>
                        <li>Siswa melakukan refleksi terhadap kegiatan yang sudah dilakukan.</li>
                        <li>Siswa dan guru melakukan umpan balik.</li>
                        <li>Siswa dan guru merencanakan tindak lanjut pembelajaran untuk pertemuan berikutnya.</li>
                    </ol> 
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <b>Alat dan Bahan:</b>
                </p>
                <p><?php echo e($kg->alat_bahan); ?></p>
                <p>
                    <b>Media:</b>
                </p> 
                <p><?php echo e($kg->media); ?></p> 
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <p>
                    <b>Asesmen:</b>
                </p>
                <p>
                    Penilaian Pembelajaran
                </p>
                <ol>
                    <li>Sikap : Observasi, Penilaian Diri, <del>Penilaian Antar Teman</del>*)</li>
                    <li>Pengetahuan : Tes tertulis, <del>Lisan</del>, Penugasan, <del>Portofolio</del>*)</li>
                    <li>Keterampilan : Kinerja , Proyek, <del>Portofolio</del>*)</li>
                </ol> 
            </td>
        </tr>
    </table>
    <div class="">
        <div class="kepsek">
            Mengetahui, <br>
            Kepala SMK Taruna Bhakti <br><br>
            <b>Ramadin Tarigan, ST</b>
        </div>
        <div class="guru">
            Depok, Juli 2020 <br>
            Guru <br><br><br>
            
            <?php
                $id = $kd->guru;
                $get = DB::table('guru')->where('id_guru', $id)->get();
            ?>
            <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <b><?php echo e($guru->nama_guru); ?></b>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH D:\code\uji-level\4\resources\views/rpp_pdf.blade.php ENDPATH**/ ?>