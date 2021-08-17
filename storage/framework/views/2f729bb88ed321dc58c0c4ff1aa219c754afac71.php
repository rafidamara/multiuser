  

<?php $__env->startSection('title_web'); ?>
    Data Kegiatan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Kegiatan</h1>
            <a href="/kegiatan/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus"></i> 
                Tambah Kegiatan
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
                        <form class="form-inline float-right" action="<?php echo e(route('searchKegiatan')); ?>" method="get">
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
                                <th>Model</th>
                                <th>Metode</th>
                                <th>Pendekatan</th>
                                <th>Alat Bahan</th>
                                <th>Media</th>
                                <th>Kegiatan Inti</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center">
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($field->model); ?></td>
                                    <td><?php echo e($field->metode); ?></td>
                                    <td><?php echo e($field->pendekatan); ?></td>
                                    <td><?php echo e($field->alat_bahan); ?></td>
                                    <td><?php echo e($field->media); ?></td>
                                    <td><?php echo e($field->kegiatan_inti); ?></td>
                                    <td>
                                    <a href="kegiatan/<?php echo e($field->id_kegiatan); ?>/edit" class="btn btn-warning btn-circle btn-sm">
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
                                                    <form action="kegiatan/<?php echo e($field->id_kegiatan); ?>" class="d-inline" method="POST">
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
<?php echo $__env->make('layouts/appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\uji-level\4\resources\views/data_kegiatan/kegiatan.blade.php ENDPATH**/ ?>