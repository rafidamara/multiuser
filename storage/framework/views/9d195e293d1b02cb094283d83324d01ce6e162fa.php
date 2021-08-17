

<?php $__env->startSection('title_web'); ?>
    Data Siswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Siswa</h1>
        <a href="/siswa/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus"></i> 
            Siswa Baru
        </a>
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
                    <form class="form-inline float-right" action="<?php echo e(route('searchSiswa')); ?>" method="get">
                        <div class="dataTables_filter d-flex">
                            <label class="my-1 mr-2">Search:</label>
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
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Photo</th>
                            <th>Nomer Hp</th>
                            <th>Tingkat</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($field->nisn); ?></td>
                            <td><?php echo e($field->nama_siswa); ?></td>
                            <td>
                                <img src="<?php echo e(asset('photo')); ?>/<?php echo e($field->photo); ?>" width="70" height="70">
                            </td>
                            <td><?php echo e($field->nomer_hp); ?></td>
                            <td><?php echo e($field->tingkat); ?></td>
                            <td><?php echo e($field->jurusan); ?></td>
                            
                            <?php
                                $id = $field->kelas;
                                $kelas = DB::table('kelas')->where('id_kelas', $id)->get();
                            ?>
                            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <td><?php echo e($get->nama_kelas); ?></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <td><?php echo e($field->email); ?></td>
                            <td><?php echo e($field->password); ?></td>
                            <td>
                                <a href="siswa/<?php echo e($field->id_siswa); ?>/edit" class="btn btn-warning btn-circle btn-sm">
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
                                            <form action="siswa/<?php echo e($field->id_siswa); ?>" class="d-inline" method="POST">
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
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\4_u\resources\views/data_siswa/siswa.blade.php ENDPATH**/ ?>