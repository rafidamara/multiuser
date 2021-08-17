  

<?php $__env->startSection('title_web'); ?>
    Data kompetensi dasar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Kompetensi Dasar</h1>
            <div class="">
                <a class="btn btn-primary d-none d-sm-inline-block btn btn-sm shadow-sm" target="_blank" 
                    href="<?php echo e(URL::to('/kompetensidasar/KDpdf')); ?>">Cetak PDF</a>
                
                <a href="/kompetensidasar/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                    style="width: 190px;">
                        <i class="fas fa-plus"></i> 
                        Kompetensi Dasar Baru
                </a>
            </div>
        </div>

        <?php if(session('alert')): ?>
            <div class="alert alert-primary alert-dismissible mt-4">
                <button type="button" class="close mt-2" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="fas fa-check me-2 mt-2"></i><?php echo e(session('alert')); ?>.</h5>
            </div>
        <?php endif; ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <i class="fas fa-folder-open display-6 text-primary"></i>
                    </div>
                    <div class="col-sm-12 col-md-4 mt-1">
                        <form class="form-inline float-right" action="<?php echo e(route('searchKD')); ?>" method="get">
                            <div id="dataTable_filter" class="dataTables_filter d-flex">
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Search:</label>
                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" name="keyword">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-primary">
                                <th>No</th>
                                <th>KD Ke-</th>
                                <th>KD Pengetahuan</th>
                                <th>KD Keterampilan</th>
                                <th>Materi Pokok</th>
                                <th>Pembelajaran</th>
                                <th>Penilaian</th>
                                <th>Alokasi Waktu</th>
                                <th>Sumber Belajar</th>
                                <th>Mata Pelajaran</th>
                                <th>Guru</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kompetensidasar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center">
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($field->kd_ke); ?></td>
                                    <td><?php echo e($field->kd_pengetahuan); ?></td>
                                    <td><?php echo e($field->kd_keterampilan); ?></td>
                                    <td><?php echo e($field->materi_pokok); ?></td>
                                    <td><?php echo e($field->pembelajaran); ?></td>
                                    <td><?php echo e($field->penilaian); ?></td>
                                    <td><?php echo e($field->alokasi_waktu); ?></td>
                                    <td><?php echo e($field->sumber_belajar); ?></td>

                                    <?php
                                        $id = $field->mapel;
                                        $mapel = DB::table('mapel')->where('id_mapel', $id)->get();
                                        $mpl = '-';

                                        foreach ($mapel as $get)
                                            if ($mapel === NULL) {
                                                $mpl;
                                            }else{
                                                $mpl = $get->nama_mapel;
                                            }
                                        
                                    ?>
                                    
                                    <td><?php echo e($mpl); ?></td>
                                    
                                    <?php
                                        $id = $field->guru;
                                        $guru = DB::table('guru')->where('id_guru', $id)->get();
                                        $gr = '-';

                                        foreach ($guru as $get)
                                            if ($guru === NULL) {
                                                $gr;
                                            }else{
                                                $gr = $get->nama_guru;
                                            }
                                        
                                    ?>
                                    
                                    <td><?php echo e($gr); ?></td>
                                    
                                    <td>
                                        <a href="kompetensidasar/<?php echo e($field->id_kd); ?>/edit" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-pen-square"></i>
                                        </a>
                                        <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center mx-auto">
                                                    <h5 id="exampleModalLabel">
                                                        Yakin ingin menghapus data?
                                                    </h5>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <form action="kompetensidasar/<?php echo e($field->id_kd); ?>" class="d-inline" method="POST">
                                                        <?php echo method_field('delete'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button class="btn btn-primary">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_kompetensidasar/kompetensidasar.blade.php ENDPATH**/ ?>